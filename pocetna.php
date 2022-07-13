<html>
<head>
 <title>Pocetna stranica</title>
 <meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />

<script>
   function pokreniOdjavu(){
      var request = new XMLHttpRequest();

      request.open("GET","odjava.php?id=pperic");

      request.onreadystatechange = function(){
         if(this.readyState===4 && this.status===200){
            window.location.href="login.php";
         }
      };
      request.send();
   }
</script>


</head>
<body>
 <h1>Pocetna stranica</h1>

 <a onclick="pokreniOdjavu()" href="#"> Odjava </a>
 <?php
    //session_destroy();
 ?>
</body>
</html>