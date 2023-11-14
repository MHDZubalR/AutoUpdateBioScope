<?php
// Your PHP code here

// URLs to fetch content from
$urls = [
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/zee-bangla',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-hd-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-max-hd-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-ten-1-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-ten-5',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/somoy-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/ekattur-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/independent-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/atn-news',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/jamuna-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sa-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/news-24-hd',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/dbc-news',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sangsad-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/al-jazeera-english-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/eeuro-news-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/channel-news-asia',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/dw-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/zee-bollywood',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/zee-tv-hd',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/zee-cinema-hd',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-aath-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/max-2',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-wah-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-pal',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-sab-tv-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-pix-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/lotus-macau-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/i-film-english',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/btv-world',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/nexus-television-hd',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/ekushey-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/ananda-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/atn-bangla',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/bangla-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/asian-tv-hd',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/channel-i',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/bijoy-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/ekhon-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/mohona-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/my-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/ntv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/bangla-vision',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/global-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/desh-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/rtv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/channel-24',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/boishakhi-tv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/btv-hd',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/colors-rishtey',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/colors-infinity',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/comedy-central',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/mtv',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/colors-bangla',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/colors-asia',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-ten-2-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sony-ten-3-live',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/nickelodeon',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/sonic',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/nick-junior',
'https://mhdzubair.top/testt.php?api=https://api3.bioscopelive.com/ironman/api/v1/content/detail/history-tv'
];

// Array to store the extracted URLs
$urlArray = array();

// Loop through the URLs
foreach ($urls as $url) {
    // Read the content of the text file
    $fileContent = file_get_contents($url);

    // Extract all URLs containing .m3u8
    preg_match_all('/\b(https?:\/\/\S*.m3u8\S*)\b/', $fileContent, $matches);
    
    // Add the matched URLs to the array
    $urlArray = array_merge($urlArray, $matches[0]);

    // Add a 1-second interval before the next request
    usleep(500000); // 0.5 second = 500,000 microseconds
}

// Convert the array to JSON format
$jsonUrls = json_encode($urlArray);

// Replace backslashes with forward slashes in the JSON-formatted URLs
$url = str_replace("\/", "/", $jsonUrls);

// Print the JSON-formatted URLs
echo $url;

// Reload the page after 2 minutes
header("refresh:120;url=https://mhdzubair.top/biom3u8grab.php");
?>
