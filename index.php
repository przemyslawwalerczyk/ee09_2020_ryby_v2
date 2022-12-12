<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami</h2>
    </div>
    <div id="lewy">
        <img src="ryba2.jpg" alt="szczupak"/>
    </div>
    <div id="prawy">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <?php
        $connect = new mysqli('localhost', 'root', '', 'wedkowanie');
        $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 2";
        $result = $connect -> query($sql);

        while($row = $result -> fetch_assoc()) {
            $id = $row['id'];
            $nazwa = $row['nazwa'];
            $wystepowanie = $row['wystepowanie'];
            echo "$id. $nazwa występuje w: $wystepowanie<br>";
        }

        $connect -> close();
        ?>

        <ol>
            <li><a href="https://wedkuje.pl" target="_blank">Odwiedź także</a></li>
            <li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    <div id="stopka">
        <p>Stronę wykonał Przemysław Walerczyk</p>
    </div>

</body>
</html>