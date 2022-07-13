<html>
    <head>
        <title> Komentar</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <h1>Komentar</h1>

        <form method="POST" action="obradaObrascaZ2.php">
            <textarea name="komentar" cols="50">
            <?php
                $datoteka='komentari.txt';
                $dat = fopen($datoteka,'a+');

                $tekst = fread($dat,filesize($datoteka));

                echo $tekst."\n";
                fclose($dat);

            ?>
            </textarea>
            <input type="submit" name="submit_btn" value="Pošalji"/>

        </form>


    </body>

</html>