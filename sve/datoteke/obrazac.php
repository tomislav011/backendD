<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<form action="slanjeDatoteke.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="datoteka">
  <input type="submit" value="Upload" name="upload_btn">
</form>

<?php
    if(isset($_SESSION['poruka'])){
        echo '<b>'.$_SESSION['poruka'].'</b>';
        unset($_SESSION['poruka']);
    }

    echo $_COOKIE['nekiCookie'];
?>

</body>
</html>



<!--<html>
    <head>
        <title>Forma za slanje datoteka</title>
    </head>
    <body>
        <form method="POST" action="slanjeDatoteke.php" enctype="multipart/form-data">
            <input type="file" name="datoteka" value=""/><br/>
            <input type="submit" name="upload_btn" value="Upload"/>
        </form>
    </body>
</html>-->