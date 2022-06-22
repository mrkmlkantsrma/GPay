<!DOCTYPE html>
<html oncontextmenu="return false" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Tuhin Kanti Pal">
    <title>G-Pay | KAMAL</title>
    <meta name="description" content="Shareable Payment's Link for UPI">
    <meta name="keywords" content="UPI, UPI Payment , Google Pay">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Krona+One" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@900&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/button.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body onload="hideF()">
    <div id="content" class="contentdiv">
        <h1 class="headingw">
        <img src="img/upi.svg" class="upilogo" width="100" onclick="window.location.href='https://www.bhimupi.org.in/';">
      
        If you are in PC Scan It with any UPI App to Pay
        </h1>
        <div id="inputd" class="inputdiv">
            <div class="center">
                <p class="pdetailupiid">
                    Pay With <img src="img/gpay-logo.png" class="upilogo" width="52" onclick="window.location.href='https://www.bhimupi.org.in/';">
       
                </p>
                <input type="hidden" id="vpa" value="kmlkantsrma-1@oksbi" placeholder="UPI ID" class="inputbox" readonly>
            </div>
            <div class="amountdiv">
                <p class="pdetailamount" id="amount">
                    Amount = <span>1</span> ₹
                </p>
            </div>
            <div class="center">
                <a onclick="genLink();" class="createb">C O N F I R M</a>
                <p id="invalid" class="invalidtext">
                    * Invalid VPA
                </p>
            </div>
        </div>
        <div id="outputd" class="outputdiv">
            <div class="center">
                <input type="hidden" id="outlink" readonly="true" class="inputbox">
            </div> 
            <p class="smalltext">
                If you are in PC Scan It with <img src="img/gpay-logo.png" class="upilogo" width="40" onclick="window.location.href='https://www.bhimupi.org.in/';">
       
            </p>
            <div class="center">
                <img id="qrcodescan" class="qrsvg" width="240" height="240" src="" style="dislay: none;">
                <p id="copiedtext" class="copiedtxt"></p>
                <p id="holder" class="vpatext"></p>
                <a id="upibtn" class="paybutton">P A Y</a>
            </div>
        </div>
    </div>
</body>
<script src="js/main.js"></script>
<script src="js/authDisable.js"></script>
<script>
// document.addEventListener("keydown", function (event) {
//     if (event.ctrlKey) {
//         event.preventDefault();
//     } 
//     if (event.shiftKey) {
//         event.preventDefault();
//     }  
// });

//  document.onkeydown = function(e) {
//     if (e.ctrlKey && 
//         (e.keyCode === 67 || 
//             e.keyCode === 86 || 
//             e.keyCode === 85 || 
//             e.keyCode === 117)) {
//         alert('not allowed');
//         return false;
//     } else {
//         return true;
//     }
// };
// document.onkeydown = function(e) {
//   if(event.keyCode == 123) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//      return false;
//   }
//   if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//     console.log('hit')
//      return false;
//   }
// }
// document.onkeypress = function (event) {
//     event = (event || window.event);
//     if (event.keyCode == 123) {
//         return false;
//     }
// }
// document.onmousedown = function (event) {
//     event = (event || window.event);
//     if (event.keyCode == 123) {
//         return false;
//     }
//     if(event.button == 2)
//     {
//       return false; 
//     }
// }
// document.onkeydown = function (event) {
//         event = (event || window.event);
//         if (event.keyCode == 123) {
//         return false;
//     }
// }
// jQuery(document).ready(function($){
//     $(document).keydown(function(event) {
//         var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
//         if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
//             return false;
//         }
//     });
// });

// function mousehandler(e) {
//     var myevent = (isNS) ? e : event;
//     var eventbutton = (isNS) ? myevent.which : myevent.button;
//     if ((eventbutton == 2) || (eventbutton == 3)) return false;
// }
// document.oncontextmenu = mischandler;
// document.onmousedown = mousehandler;
// document.onmouseup = mousehandler;

// function disableCtrlKeyCombination(e) {
//     var forbiddenKeys = new Array("a", "s", "c", "x","u");
//     var key;
//     var isCtrl;
//     if (window.event) {
//         key = window.event.keyCode;
//         if (window.event.ctrlKey)
//             isCtrl = true;
//         else
//             isCtrl = false;
//     }
//     else {
//         key = e.which;
//         if (e.ctrlKey)
//             isCtrl = true;
//         else
//             isCtrl = false;
//     }
//     if (isCtrl) {
//         for (i = 0; i < forbiddenKeys.length; i++) {
//             if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
//                 return false;
//             }
//         }
//     }
//     return true;
// }
</script>
</html>
