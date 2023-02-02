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

$send = curl("https://api.openweathermap.org/data/2.5/weather?lat=3.6039888&lon=98.6648916&appid=a043e60ee71ef442a36bd8c915350c29");

//mengubah json menjadi array
$data = json_decode($send, TRUE);


echo "<pre>";
print_r($data);
echo "</pre>";
?>

<!-- <?php 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "https://sandbox.rachmat.id/curl/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    curl_close($ch);      
    echo $output;
?> -->

