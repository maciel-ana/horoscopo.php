<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Horóscopo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form action="" method="get">
        <label for="data">Insira sua data de nascimento:</label>
        <input type="date" id="data" name="data">
        <br>
        <input type="submit" value="Descubra seu signo">
    </form>

    <?php
    if (isset($_GET["data"])) {
        $data = date_parse($_GET["data"]);
        $month = $data["month"];
        $day = $data["day"];

        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
            $signo = 'Aquário';
        } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
            $signo = 'Peixes';
        } elseif (($month == 3 && $day >= 21) || ($month == 4 && $day <= 20)) {
            $signo = 'Áries';
        } elseif (($month == 4 && $day >= 21) || ($month == 5 && $day <= 20)) {
            $signo = 'Touro';
        } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
            $signo = 'Gêmeos';
        } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
            $signo = 'Câncer';
        } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
            $signo = 'Leão';
        } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
            $signo = 'Virgem';
        } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
            $signo = 'Libra';
        } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
            $signo = 'Escorpião';
        } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
            $signo = 'Sagitário';
        } else {
            $signo = 'Capricórnio';
        }

        echo "<p>Seu signo é: " . $signo . "</p>";
    }
    ?>

</body>

</html>