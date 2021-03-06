<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_data = get_ip_info($ip);

    function get_ip_info($ip = NULL)
    {
       if(empty($ip)) return false;
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, 'http://www.ipaddresslocation.org/ip-address-locator.php');
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_POSTFIELDS, array('ip' => $ip));
       $data = curl_exec($ch);
       curl_close($ch);    
       preg_match_all('/<i>([a-z\s]+)\:<\/i>\s+<b>(.*)<\/b>/im', $data, $matches, PREG_SET_ORDER);
       if(count($matches) == 0) return false;    
       $return = array();
       $format_labels = array(
            'Hostname'          => 'host',
            'IP Country'        => 'country',
            'IP Country Code'   => 'country_code',
            'IP Continent'      => 'continent',
            'IP Region'         => 'region',
            'IP Latitude'       => 'latitude',
            'IP Longitude'      => 'longitude',
            'Organization'      => 'organization',
            'ISP Provider'      => 'isp'
       );
       foreach($matches as $info)
       {
          if(isset($info[2]) && !is_null($format_labels[$info[1]]))
          {
             $return[$format_labels[$info[1]]] = $info[2];
          }
       }
       return (count($return)) ? $return : false;
    }
$get=file_get_contents("http://api.ipaddresslabs.com/iplocation/v1.7/locateip?key=demo&ip=".$ip_data['host']."&format=XML");
echo $get;

$a=strpos($get,'<ip_address>');
$b=strpos($get,'</ip_address>');

echo $a;
echo $b;





?>