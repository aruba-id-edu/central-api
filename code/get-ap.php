<style>
    html { color-scheme: light dark; }
    body { margin: 50px 50px;
    font-family: Consolas; }
</style>
<h1>Aruba Central API</h1>
<a href="index.html">Back to Home</a> 
<p>Get AP Details<br>Input AP's SN and Token</p>
<form method="post">
    <input type="text" name="sn" placeholder="Enter SN">
    <input type="password" name="token" placeholder="Enter Token">
    <input type="submit" value="Submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_sn = $_POST['sn'];
    $input_sn = escapeshellarg($input_sn);
    $input_token = $_POST['token'];
    $input_token = escapeshellarg($input_token);
    echo "Details:";
    $output = shell_exec("./get-ap.sh $input_sn $input_token");
    echo "<br><pre>$output</pre>";
}
?>
