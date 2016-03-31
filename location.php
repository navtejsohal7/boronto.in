<?php

$tags = get_meta_tags('http://www.geobytes.com/IpLocator.htm?GetLocation&template=php3.txt&IpAddress=117.199.81.29');
echo $tags['country'];
echo $tags['region'];
echo $tags['city'];
?>