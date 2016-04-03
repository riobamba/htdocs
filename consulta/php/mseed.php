<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://service.iris.edu/fdsnws/dataselect/1/query?net=IU&sta=ANMO&loc=00&cha=BHZ&starttime=2016-02-26T23:21:09&endtime=2016-02-26T23:22:13&nodata=404");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$file = curl_exec($ch);
curl_close($ch);

echo $file;
?>