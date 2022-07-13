<?php

    if(isset($_POST['submit_btn'])){
      $newWord = $_POST['rijec'];

      $jsonFile = file_get_contents("f.json");
      $words = json_decode($jsonFile,true);

      $words[]=$newWord;

      $jsonFile = json_encode($words);
      file_put_contents("f.json",$jsonFile);
    }

    function pobroji($word,$flag=0){
        $p = str_split(strtolower($word));
        $counter=0;
        foreach($p as $s){
          if($flag==0){
            if(!in_array($s,['a','e','i','o','u'])){
              $counter++;
            }
          }else{
            if(in_array($s,['a','e','i','o','u'])){
              $counter++;
            }
          }
        }
        return $counter;
    }

?>


<!DOCTYPE html>
<html>
  <body>
    <form action="" method="POST">
      Upisite rijec:<br/>
      <input type="text" name="rijec" required>
      <input type="submit" value="Submit" name="submit_btn">
    </form>


    <table border="1">
      <tr>
        <th>Rijec</th>
        <th>Broj slova</th>
        <th>Broj suglasnika</th>
        <th>Broj samoglasnika</th>
      </tr>

      <?php

        $jsonFile = file_get_contents("f.json");
        $words = json_decode($jsonFile,true);

        foreach($words as $word){
          echo "<tr>";
          echo "<td>".$word."</td>";
          echo "<td>".strlen($word)."</td>";
          echo "<td>".pobroji($word)."</td>";
          echo "<td>".pobroji($word,1)."</td>";
        }
      ?>

  </body>
</html>