<?php include('check_action.php');?>

<?php if (isAllowed($_SERVER['REMOTE_ADDR'])) {
    
    echo "<script type = \"text/javascript\">
    window.location = (\"index.php\");
    </script>";
}
else{
        
?>

<!DOCTYPE html>
<html style="height:100%">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title> 401 Not Authorised
</title></head>
<body style="color: #444; margin:0;font: normal 14px/20px Arial, Helvetica, sans-serif; height:100%; background-color: #fff;">
<div style="height:auto; min-height:100%; ">     <div style="text-align: center; width:800px; margin-left: -400px; position:absolute; top: 30%; left:50%;">
        <h1 style="margin:0; font-size:150px; line-height:150px; font-weight:bold;">401</h1>
<h2 style="margin-top:20px;font-size: 30px;">Not Authorised
</h2>
<p>This IP Address <?php echo $_SERVER['REMOTE_ADDR'];?> is not whitelisted. Kindly Contact Administrator to Whitelist so that you can have access to this Website!</p>
<!-- <p><a href="index.php">Click here if IP Address has been Whitelisted</a></p> -->

</div></div></body></html>
<?php
}?>
