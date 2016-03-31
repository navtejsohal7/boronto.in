<?php



   if (getenv('HTTP_X_FORWARDED_FOR')) 
	{
        $a = getenv('HTTP_X_FORWARDED_FOR');
		echo "Your Proxy IP address is : ".$a;
    } 
	else 
	{s
        $a = getenv('REMOTE_ADDR');
        echo "Your IP address is : $a";
    }
	
	$tags = get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress=117.199.81.29');
echo $tags['country'];
echo $tags['region'];
echo $tags['city'];
?>
 