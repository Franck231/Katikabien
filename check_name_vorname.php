<!DOCTYPE html>
<html lang="en">
<head>
    <title>Katika</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<script>
function showlikeReset() {

		document.getElementById("theName").style.display = "inline";
				document.getElementById("theVorname").style.display = "inline";
				document.getElementById("lbsuchgbS").style.display = "inline";
				document.getElementById("btnVer").style.display = "inline";
				document.getElementById("lbsuchz").style.display = "inline";
				document.getElementById("btnVer2").style.display = "inline";
		document.getElementById("txtHint").innerHTML = "";
}

  function myFunction() {
   // document.getElementById("theTransaction").innerHTML = "Hello World";
  // alert(document.getElementById("theTransaction").value);
  
  var mystring = document.getElementById("theName").value;
  
  if(mystring.length == 0 ){
	  
	  alert('Das Feld fuer den Namen ist leer');
	  return;
  }
  
    
  var mystring2 = document.getElementById("theVorname").value;
  
  if(mystring2.length == 0 ){
	  
	  alert('Das Feld fuer den Vornamen ist leer');
	  return;
  }

  
  if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
			
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
				document.getElementById("theName").style.display = "none";
				document.getElementById("theVorname").style.display = "none";
				document.getElementById("btnVer").style.display = "none";
				document.getElementById("lbsuchgbS").style.display = "none";
				document.getElementById("lbsuchz").style.display = "none";
				document.getElementById("btnVer2").style.display = "none";

            }
        };
        xmlhttp.open("GET","callFrancFinalcheckNameVorname.php?q="+mystring+"&r="+mystring2,true);
        xmlhttp.send();
}

window.onload = function () {
		
		document.getElementById("btnToDate").style.display = "none";
		document.getElementById("btnToNTrans").style.display = "none";
		document.getElementById("btnNomPrenom").style.display = "none";
		document.getElementById("btnabml2").style.display = "none";
		document.getElementById("lbsuch").style.display = "none";
		
    }
	
	function zurueck() {
		
		document.getElementById("btnToDate").style.display = "inline";
		document.getElementById("btnToNTrans").style.display = "inline";
		document.getElementById("btnNomPrenom").style.display = "inline";
		document.getElementById("btnabml2").style.display = "inline";
		
		document.getElementById("lbsuch").style.display = "none";
		document.getElementById("theName").style.display = "none";
		document.getElementById("theVorname").style.display = "none";
		document.getElementById("btnVer").style.display = "none";
		document.getElementById("btnabml1").style.display = "none";
		document.getElementById("btnabml1").style.display = "none";
		document.getElementById("btnVer2").style.display = "none";
		document.getElementById("lbsuchgbS").style.display = "none";
		document.getElementById("lbsuchz").style.display = "none";
		
    }



</script>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form validate-form register">
                <label id="lbsuch">Waehhlen Sie eine Option aus:</label>
                <br>
                <label id="lbsuchgbS">Geben Sie bitte den Namen an:</label>
                <div class="wrap-input100 validate-input" >
                    <input class="input100"  id = "theName" type="text" >
                    <span class="symbol-input100">
							<i class="fa fa-id-user" aria-hidden="true"></i>
                    </span>
                </div>

                <label id="lbsuchz">Geben Sie bitte den Vornamamen an:</label>
                <div class="wrap-input100 validate-input" >
                    <input class="input100"  id = "theVorname" type="text" >
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-id-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="container-login100-form-btn">
                            <button id="btnVer" onclick="myFunction()" class="login100-form-btn">
                                Uepruefen
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container-login100-form-btn">
                            <button id = "btnabml1" onclick="location.href='index.php';" class="login100-form-btn">
                                Abmelden
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container-login100-form-btn">
                            <button id="btnVer2" onclick="zurueck()" class="login100-form-btn">
                                Zurueck
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <button id="btnToDate" class="login100-form-btn" onclick="window.location.href='chckWithDate.php'">Ueberpruefen mit Datum</button >
				<br>
                <button id="btnToNTrans" class="login100-form-btn" onclick="window.location.href='check_transactionNummer.php'">Ueberpruefen mit TransaktionsID</button >
				<br>
                <button id="btnNomPrenom" class="login100-form-btn" onclick="window.location.href='check_name_vorname.php'">Ueberpruefen mit Namen und Vornamen</button >
				<br>
                <button id = "btnabml2" class="login100-form-btn" onclick="location.href='index.php';" >Abmelden</button >

                <br>

                <div id="txtHint"></div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>
</html>
