

<!DOCTYPE html>
<html lang="en">
   <head>
     
   <script>
var browser = '';
var browserVersion = 0;

if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Opera';
} else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
    browser = 'MSIE';
} else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Netscape';
} else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Chrome';
} else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Safari';
    /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
    browserVersion = new Number(RegExp.$1);
} else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
    browser = 'Firefox';
}
if(browserVersion === 0){
    browserVersion = parseFloat(new Number(RegExp.$1));
}
               //document.getElementById('brwname').value = browser;

alert(browser + "*" + browserVersion);
</script>
   </head>
   <body class="main-layout">

   <form>
   <input type="text" id="brwname" name="brwame" />
</form>

</body>
</html>

<?php

// function isAllowed($ip){
//     $whitelist = array('127.0.0.1', ':1', '68.71.44.*');

//     // If the ip is matched, return true
//     if(in_array($ip, $whitelist)) {
//         return true;
//     }

//     foreach($whitelist as $i){
//         $wildcardPos = strpos($i, "*");

//         // Check if the ip has a wildcard
//         if($wildcardPos !== false && substr($ip, 0, $wildcardPos) . "*" == $i) {
//             return true;
//         }
//     }

//     return false;
// }

// if (! isAllowed($_SERVER['REMOTE_ADDR'])) {
    
//     echo "This IP Address ".$_SERVER['REMOTE_ADDR']." is not permitted. Kindly Contact Administrator to Whitelist so that you can have access to this Website";
// //     header('Location: http://asdf.com');
// }
// else{


// }

?>


