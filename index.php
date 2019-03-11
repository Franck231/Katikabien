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
	
    <script src="https://code.jquery.com/jquery-latest.js"></script>

	
	
</head>

<script>

    function showlikeReset() {

        document.getElementById("theName").style.display = "inline";
        document.getElementById("theVorname").style.display = "inline";
        document.getElementById("lbl").style.display = "inline";
        document.getElementById("btnVer").style.display = "inline";
        document.getElementById("lbl2").style.display = "inline";
        document.getElementById("txtHint").innerHTML = "";
		
    }

    function myFunction() {
        // document.getElementById("theTransaction").innerHTML = "Hello World";
        // alert(document.getElementById("theTransaction").value);
		
        var mystring = document.getElementById("username").value;

        if(mystring.length == 0 ){

            alert('Das Feld fuer den User-Name ist leer');
            return;
        }


        var mystring2 = document.getElementById("pword").value;

        if(mystring2.length == 0 ){

            alert('Das Feld fuer das Passwort ist leer');
            return;
        }


		/*

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();

        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

        }
        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                // alert (this.responseText);
                var temp = parseInt(this.responseText);


                if(temp == 1){

                    document.getElementById("lbl").style.display = "none";
                    document.getElementById("lbl2").style.display = "none";
                    document.getElementById("username").style.display = "none";
                    document.getElementById("pword").style.display = "none";
                    document.getElementById("btnVer").style.display = "none";
					document.getElementById("envelope").style.display = "none";
                    document.getElementById("lock").style.display = "none";
					document.getElementById("meldung").style.display = "none";
					document.getElementById("btnVerAgain").style.display = "none";

                    document.getElementById("btnToDate").style.display = "inline";
                    document.getElementById("btnToNTrans").style.display = "inline";
                    document.getElementById("btnNomPrenom").style.display = "inline";
                    document.getElementById("btnVerAbmelden").style.display = "inline";
					

					
                    document.getElementById("hinweis").innerHTML = "Choisissez svp une option";

                }else {

                    document.getElementById("meldung").style.display = "inline";
                    document.getElementById("btnVerAgain").style.display = "inline";
                    document.getElementById("btnVer").style.display = "none";
                    document.getElementById("btnVerAbmelden").style.display = "none";

                }
            }
        };
        xmlhttp.open("GET","callFrancFinalchklogin.php?q="+mystring+"&r="+mystring2,true);
        xmlhttp.send();
		
		*/ 
		
		
		
		$.ajax({
			type: 'POST',
			url: "http://simkhaa.com/callFrancFinalchklogin.php",
			data: {q: mystring, r: mystring2},
			datatype: "json",
			crossDomain: true,
			cache:false,
			success: function(responseData) 
			{
				// alert(responseData);
				// var obj = JSON.parse(responseData); 
				var temp = parseInt(responseData);

				if(temp == 1){
					
                    document.getElementById("lbl").style.display = "none";
                    document.getElementById("lbl2").style.display = "none";
                    document.getElementById("username").style.display = "none";
                    document.getElementById("pword").style.display = "none";
                    document.getElementById("btnVer").style.display = "none";
					document.getElementById("envelope").style.display = "none";
                    document.getElementById("lock").style.display = "none";
					document.getElementById("meldung").style.display = "none";
					document.getElementById("btnVerAgain").style.display = "none";

                    document.getElementById("btnToDate").style.display = "inline";
                    document.getElementById("btnToNTrans").style.display = "inline";
                    document.getElementById("btnNomPrenom").style.display = "inline";
                    document.getElementById("btnVerAbmelden").style.display = "inline";
					
                    document.getElementById("hinweis").innerHTML = "Waehlen Sie eine Option aus";
					
				} else {
					
					document.getElementById("meldung").style.display = "inline";
                    document.getElementById("btnVerAgain").style.display = "inline";
                    document.getElementById("btnVer").style.display = "none";
                    document.getElementById("btnVerAbmelden").style.display = "none";
					
				}

			},
			error: function (e) 
			{     
			   alert(e.status); //Ajax koennte nicht ausgefuehrt sein
			}
		});
		
		
		
    }

    function myFunctionabmeldung() {

        document.getElementById("lbl").style.display = "inline";
        document.getElementById("lbl2").style.display = "inline";
        document.getElementById("username").style.display = "inline";
        document.getElementById("pword").style.display = "inline";
        document.getElementById("username").value = "";
        document.getElementById("pword").value = "";
        document.getElementById("btnVer").style.display = "inline";

        document.getElementById("hinweis").innerHTML = "Melden Sie sich bitte an";
        document.getElementById("meldung").style.display = "none";
        document.getElementById("btnVerAgain").style.display = "none";
        document.getElementById("btnToDate").style.display = "none";
        document.getElementById("btnToNTrans").style.display = "none";
        document.getElementById("btnNomPrenom").style.display = "none";
        document.getElementById("btnVerAbmelden").style.display = "none";


    }

    window.onload = function () {

        document.getElementById("meldung").style.display = "none";
        document.getElementById("btnVerAgain").style.display = "none";
        document.getElementById("btnToDate").style.display = "none";
        document.getElementById("btnToNTrans").style.display = "none";
        document.getElementById("btnNomPrenom").style.display = "none";
        document.getElementById("btnVerAbmelden").style.display = "none";

        document.getElementById("username").value = "";
        document.getElementById("pword").value = "";

    }

</script>

<body>

<div class="limiter" id ="Enveloppe">
    <section class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>

            <div class="login100-form validate-form" >
                
				
				
				<span class="login100-form-title">
						<b> <p style="font-size:16px" id="hinweis">Melden Sie sich bitte an</p> </b>
				</span>

                <label id="lbl">Email:</label>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" id = "username" type="email" name="email" placeholder="Email">
                    <span  id="envelope" class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <label id="lbl2">Password:</label>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                    <input class="input100" id = "pword" type="password"  placeholder="Password">
                    <span  id="lock" class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="login" id="btnVer" onclick="myFunction()">
                        Login
                    </button>
                </div>

                <h4 id="meldung"   style="color: red"> Login-Daten nicht korrekt</h4>
				
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" id="btnVerAgain" onclick="myFunction()"> Melden Sie sich bitte nochmal an</button>
				</div>
				 <div class="container-login100-form-btn">
					<button class="login100-form-btn" id="btnToDate" onclick="window.location.href='chckWithDate.php'">Ueberpruefen mit Datum</button >
				</div>
					
				 <div class="container-login100-form-btn">
						<button class="login100-form-btn" id="btnToNTrans" onclick="window.location.href='check_transactionNummer.php'">Ueberpruefen mit TransaktionsID</button >
				 </div>
						
				 <div class="container-login100-form-btn">		
                    <button class="login100-form-btn" id="btnNomPrenom" onclick="window.location.href='check_name_vorname.php'">Ueberpruefen mit Namen und Vornamen</button >
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" id="btnVerAbmelden" onclick="myFunctionabmeldung()">Abmelden</button >
				</div>

            </div>

        </div>
    </section>
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
