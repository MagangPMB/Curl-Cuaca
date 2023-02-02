<?php
$file=file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=1.1123846&lon=104.0651967&appid=a043e60ee71ef442a36bd8c915350c29&units=metric");
$cuaca=json_decode($file,true);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Cuaca Kantor PMB</title>
    <style>
        .city {
            background-color: grey;
            color: white;
            border: 5px solid black;
            margin: 00px;
            padding: 50px;
        }
</style>
</style>
</head>
    <body>
        <div class ="city">
            <h1 >Cuaca di <?php echo $cuaca['name'];?> Hari ini adalah </h1>
                <img src="http://openweathermap.org/img/wn/<?=$cuaca['weather'][0]['icon']?>@4x.png" alt="">
             <h2>
                <?php echo strtoupper($cuaca['weather'][0]['description']);?>
            </h2>
            <h4>
                Kecepatan angin : <?php echo $cuaca['wind']['speed'];?> meter/detik
            </h4> 
            <h5>
                Suhu : <?php echo $cuaca['main']['temp'];?> °c
            </h5>
        </div>
    </body>
</html>