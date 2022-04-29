<?php
include('includes/dbconnection.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'Add')
	{
        $ipaddress = $_POST["ipaddress"];

        $que=mysqli_query($con,"select * from ipaddress_tbl where ipaddress ='$ipaddress'");
        $ret=mysqli_fetch_array($que);
        if($ret > 0){
            $message = '<div style="color:red">This IP Address "'.$ipaddress.'" Already Exists!</div>';
        }
        else{

            $query=mysqli_query($con,"insert into ipaddress_tbl(ipaddress,isAllowed,dateCreated,createdBy) 
            value('$ipaddress','Yes','$currentDate','$admin_id')");
            if ($query) {
                $message ='<div style="color:green">IP Address Added for Whitelisting Successfully!</div>';
            }
            else
            {
                $message = '<div style="color:red">An Error Occured!</div>';
            }
        }
    }
}

if(isset($_GET["delid"]))
{
	$delid = $_GET['delid'];
    $que=mysqli_query($con,"select * from ipaddress_tbl where id ='$delid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

        $query = mysqli_query($con,"DELETE FROM ipaddress_tbl WHERE id ='$delid'");
        if ($query) {
            $message ='<div style="color:green">IP Address Deleted Successfully!</div>';
        }
    }
}

if(isset($_GET["editid"]))
{
	$editid = $_GET['editid'];
    $que=mysqli_query($con,"select * from ipaddress_tbl where id ='$editid'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){

    if($ret['isAllowed'] == "Yes"){
        $query = mysqli_query($con,"update ipaddress_tbl set isAllowed = 'No' WHERE id ='$editid'");
        if ($query) {
            $message ='<div style="color:red">IP Address Access Denied Successfully!</div>';
        } 
    }
    else{
        $query = mysqli_query($con,"update ipaddress_tbl set isAllowed = 'Yes' WHERE id ='$editid'");
        if ($query) {
            $message ='<div style="color:green">IP Address Access Granted Successfully!</div>';
        } 
    }
        
    }
}

//all branch

?>