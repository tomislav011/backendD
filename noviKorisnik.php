<html>
<head>
 <title>Unos korisnika</title>
 <meta http-equiv="Content-Type"content="text/html; charset=windows-1250" />

<script type="text/javascript">

    function validiraj(){
        //var element = document.foruma.pass.value;
        var element = document.getElementById('pass');

        if(element.value.length<6){
            alert('Lozinka mora biti minimalno 6 znakova!');
            element.style.background='red';
            return false;
        }else{
            element.style.background='white';
        }

        return true;
    }

</script>

</head>
<body>
 <h1>Unos korisnika</h1>
 <form method="post" name="forma" action="spremiKorisnika.php" onsubmit="return(validiraj());">
    Ime:<br/>
    <input type="text" name="ime" required/>
    <br/><br/>
    Prezime:<br/>
    <input type="text" name="prezime" required/>
    <br/><br/>
    Username:<br/>
    <input type="text" name="username" required/>
    <br/><br/>
    Password:<br/>
    <input type="password" id="pass" name="pass"/>
    <br/><br/>
    <input type="submit" value="Spremi" /> 
    <input type="reset" value="Odustani" />

</form>
</body>
</html>