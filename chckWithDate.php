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
        document.getElementById("theDate").style.display = "inline";
        document.getElementById("btnVer").style.display = "inline";
        document.getElementById("lbl").style.display = "inline";
		document.getElementById("btnVer2").style.display = "inline";
        document.getElementById("txtHint").innerHTML = "";
    }

    function myFunction() {
        // document.getElementById("theDate").innerHTML = "Hello World";
        // alert(document.getElementById("theDate").value);

        var mystring = document.getElementById("theDate").value;
		
        if(mystring.length == 0 ){

            alert('Das Feld fÃ¼r das Datum ist leer');
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
                document.getElementById("theDate").style.display = "none";
                document.getElementById("btnVer").style.display = "none";
                document.getElementById("lbl").style.display = "none";
				document.getElementById("btnVer2").style.display = "none";
				
            }
			document.getElementById("userTemp").style.display = "none";
			
			
        };
        xmlhttp.open("GET","callFrancFinal.php?q="+mystring,true);
        xmlhttp.send();
    }


    window.onload = function () {

        document.getElementById("btnToDate").style.display = "none";
        document.getElementById("btnToNTrans").style.display = "none";
        document.getElementById("btnNomPrenom").style.display = "none";
        document.getElementById("btnabml2").style.display = "none";


    }

    function zurueck() {
        document.getElementById("btnToDate").style.display = "inline";
        document.getElementById("btnToNTrans").style.display = "inline";
        document.getElementById("btnNomPrenom").style.display = "inline";
        document.getElementById("btnabml2").style.display = "inline";

		
        document.getElementById("theDate").style.display = "none";
        document.getElementById("lbl").style.display = "none";
		document.getElementById("userTemp").style.display = "none";
        document.getElementById("btnVer").style.display = "none";
        document.getElementById("btnabml1").style.display = "none";
       // document.getElementById("btnabml1").style.display = "none";
        document.getElementById("btnVer2").style.display = "none";


    }

</script>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form validate-form register">
                <label id="lbl">Entrez la Date:</label>
                <div class="wrap-input100 validate-input" >
                    <input class="input100"  id = "theDate" type="date" >
                    <span  id="userTemp" class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="container-login100-form-btn">
                            <button id="btnVer" onclick="myFunction()" class="login100-form-btn">
                                Verifier
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

           
            <button id="btnToDate" class="login100-form-btn" onclick="window.location.href='chckWithDate.php'"> Verifier avec la Date</button >
			<br>
            <button id="btnToNTrans" class="login100-form-btn" onclick="window.location.href='check_transactionNummer.php'"> Verifier avec la Transactions</button >
			<br>
            <button id="btnNomPrenom" class="login100-form-btn" onclick="window.location.href='check_name_vorname.php'"> Verifier avec Nom et Prenom</button >
			<br>
            <button id = "btnabml2" class="login100-form-btn" onclick="location.href='index.php';" >Abmelden</button >
			
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