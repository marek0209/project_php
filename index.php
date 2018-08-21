<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    $nazwa_zmiennej = "tekst przykładowy";
    $Nazwa_zmiennej = "tekst drugi";
    $suma = $nazwa_zmiennej . $Nazwa_zmiennej;
    echo $suma;
    echo "<br>";
    $imie = "Heniek";
    $typ_zmmienej_a=gettype($imie);
    echo $typ_zmmienej_a;
    echo "<br>";
    var_dump($nazwa_zmiennej);
        */

    //tablice
    $miasta = array("Wrocław","Kraków", "Katowice");
    //var_dump($miasta);
    echo($miasta[0]);
    $miasta[0]="Wrocław after change";
    $miasta[4]="LOL";

    echo($miasta[4]);
    
    echo($miasta[0]);

    //tablice asoscjacyjne
    // $ludzie = array("Albert"=>24, "Adam"=>78);
    // $ludzie["Albert"] = 45;
    // $ludzie["Adam"] = 19;
    // echo "<br>";
    // var_dump($ludzie);
    $ludzie = array(
        array(
            "imie" => "Alojzy",
            "wiek" => 102
        ),
        array(
            "imie" => "Grażyna",
            "wiek" => 42
        ),
        array(
            "imie" => "Janusz",
            "wiek" => 34
        ),
    );

   // var_dump($ludzie);
   echo "<br>";
   echo "Pan ". $ludzie[0]["imie"]. " ma lat: ".$ludzie[0]["wiek"];
    ?>
    <br>
    <br>
    <?php 
    // $budynki = array(
    //     'weglokoks' => array(
    //     'ilosc_sal' => 234,
    //     'pietra' => 14
    //     ),
    //     'Supersam' => array(
    //         'ilosc_sal' => 45,
    //         'pietra' => 3
    //     )
    // );


    // $auta = array(
    //     'tesla' => array(
    //         'color' => "black",
    //         'type' => "electric",
    //         'price' => 370000 
    //     ),
    //     'mercedes' => array(
    //         'color' => "white",
    //         'type' => "petrol",
    //         'price' =>270000
    //     ),
    // );
    // echo"Tesla <br> type:";
    // echo($auta['tesla']['type']);

//operatory skrotowe
$x = 10;
$y = 20;
$x+=$y;
echo($x);
    ?>

    
    <center> <h2><?php echo "Hello world"; ?></h2> </center>
<?php /* Komentarz w php */ ?>

</body>
</html>