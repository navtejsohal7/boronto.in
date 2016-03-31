<?php
$url = "http://api.ipinfodb.com/v3/ip-city/?key=$your_key&ip=$ip&format=json";
     
$d = file_get_contents($url);
$data = json_decode($d , true);
     
/*
{
"statusCode" : "OK",
"statusMessage" : "",
"ipAddress" : "74.125.45.100",
"countryCode" : "US",
"countryName" : "UNITED STATES",
"regionName" : "CALIFORNIA",
"cityName" : "MOUNTAIN VIEW",
"zipCode" : "94043",
"latitude" : "37.3956",
"longitude" : "-122.076",
"timeZone" : "-08:00"
}
*/
 
if(strlen($data['countryCode']))
{
$info = array(
    'ip' => $data['ipAddress'] ,
    'country_code' => $data['countryCode'] ,
    'country_name' => $data['countryName'] ,
    'region_name' => $data['regionName'] ,
    'city' => $data['cityName'] ,
    'zip_code' => $data['zipCode'] ,
    'latitude' => $data['latitude'] ,
    'longitude' => $data['longitude'] ,
    'time_zone' => $data['timeZone'] ,
);
}
return $info;
?>