<?php

require_once('twitter-api-php/TwitterAPIExchange.php');

$settings = array(

	// 'oauth_access_token' => "313052807-4ldfhDG7ssRNuSf5nZEGOPr9TqNp2INYBZFx3q3a",
 //    'oauth_access_token_secret' => "bNvvix6IdJaPiUi5aanqYXzmp8WrApiohJaZTTAGA4lFN",
    'oauth_access_token' => $GET['accessToken'],
    'oauth_access_token_secret' => $GET['accessTokenSecret'],
    'consumer_key' => "m22uAjj1aTSm3xJ435wXfGL4f",
    'consumer_secret' => "pxYQ30ME10cEJPLWxVRcyvy0VwvWS4eoAEV996drNwwQOH92Ri"	

);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$getField = "?screen_name=saxinabottle" + "&count=1&result_type=recent";
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetField($getField)->buildOauth($url, $requestMethod)->performRequest();

?>