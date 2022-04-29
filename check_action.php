<?php

function isAllowed($ip){
    
    include('includes/dbconnection.php');

    $que=mysqli_query($con,"select ipaddress from ipaddress_tbl where ipaddress = '$ip' and isAllowed = 'Yes'");
    $ret=mysqli_fetch_array($que);
    if($ret > 0){
        return true;
    }


    // $whitelist = array('127.0.0.1', ':1', '68.71.44.*');
    // If the ip is matched, return true
    // if(in_array($ip, $whitelist)) {
    //     return true;
    // }

    // foreach($whitelist as $i){
    //     $wildcardPos = strpos($i, "*");

    //     // Check if the ip has a wildcard
    //     if($wildcardPos !== false && substr($ip, 0, $wildcardPos) . "*" == $i) {
    //         return true;
    //     }
    // }

    return false;
}

function logActivity($ipAddress, $browserType, $browserVersion, $page, $currentDateTime){
    
    include('includes/dbconnection.php');

    $query=mysqli_query($con,"insert into activitylog_tbl(ipaddress,browserType,browserVersion,page,dateTime) 
    value('$ipAddress','$browserType','$browserVersion','$page','$currentDateTime')");
    if ($query) {
        return true;
    }
    
    return false;
}

?>