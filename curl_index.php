<?php 

function curl($url){
//create curl resource
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//$output contains the output string
$output = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
return $output;
}

$send = curl("https://api.openweathermap.org/data/2.5/weather?lat=3.6039888&lon=98.6648916&appid=a043e60ee71ef442a36bd8c915350c29&units=metric");

//mengubah json menjadi array
$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Cuaca Kantor PMB Medan</title>
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
            <h1 >Cuaca di <?php echo $data['name'];?> Hari ini adalah </h1>
                <img src="http://openweathermap.org/img/wn/<?=$data['weather'][0]['icon']?>@4x.png" alt="">
             <h2>
                <?php echo strtoupper($data['weather'][0]['description']);?>
            </h2>
            <h4>
                Kecepatan angin : <?php echo $data['wind']['speed'];?> meter/detik
            </h4> 
            <h5>
                Suhu : <?php echo $data['main']['temp'];?> °c
            </h5>
        </div>
    </body>
</html>