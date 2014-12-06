<?php
   $url = "https://www.cyta.com.cy/cytamobilevodafone/dev/websmsapi/sendsms.aspx";
   $xml = file_get_contents("body.xml");

   $headers = array(
      "POST HTTP/1.1",
      "Content-type: application/xml; charset=\"utf-8\"",
      "Content-length: " . strlen($xml),
      "Connection: close",
   );

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, POST);
   curl_setopt($ch, CURLOPT_POSTFIELDS,  $xml);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   $data = curl_exec($ch);
   echo $data;
   curl_close($ch);
?>