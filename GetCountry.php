<?php
function GetCountry(){
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, 'https://geo.ipify.org/api/v2/country?apiKey=' . 'PUT YOUR IPIFY APIKEY HERE' . '&ipAddress=' . $_SERVER['REMOTE_ADDR']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

    $output = curl_exec($curl);

    if($output == false){ 
        echo 'Error occured: ' . curl_error($curl);
        echo "Please make sure you have AdBlockers disabled for this to work.";
        die(); 
    } 

    $httpstatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if($httpstatus >= 400){
        echo 'Server respond with HTTP : ' . $httpstatus;
        die();
    }

    $data = json_decode($output);
    if($data == null || json_last_error() !== JSON_ERROR_NONE){
        echo "JSON ERROR" . json_last_error_msg();
        die();
    }
    return $data;
}
//End of function
GetCountry();
?>