<?php
// Function to make GET request and save response to file
function makeRequest($url, $filename) {
  $ch = curl_init($url);
  $fp = fopen($filename, 'w');
  curl_setopt($ch, CURLOPT_FILE, $fp);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_exec($ch);
  curl_close($ch);
  fclose($fp);
}

// URL to send GET request
$url = 'https://mhdzubair.top/ARAFAT/biom3u8grab.php';
// File to save the response
$filename = 'response.txt';

// Continuous loop to send request every 30 minutes
while (true) {
  makeRequest($url, $filename);
  sleep(120); // 30 minutes in seconds
}
?>
