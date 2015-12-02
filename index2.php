<?php

require_once('TwitterAPIExchange.php');

if (isset($_GET['screen_name'])) {

  $screen_name = $_GET['screen_name'];
  $twitts = $_GET['twitts'];


  $settings = array(
    'oauth_access_token' => "4304990969-eC62VXfFn5vnZZMNbkSLvuaGIElCax4OGf4tmJf",
    'oauth_access_token_secret' => "NdFbP7ToaOY0FUR6NSwFWsum6QugP8076ZIWh4rpSTVCE",
    'consumer_key' => "Vy1UOFLSyhot0xASnYyVrQMWK",
    'consumer_secret' => "TFHpkDG0LEeIubeHEaLe1GHp3D1TmuhR4uq6xtPUOf750RQH5T"
  );

  $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json?count=' . twitts;
  $getfield = '?screen_name=' . $screen_name;
  $requestMethod = 'GET';

  $twitter = new TwitterAPIExchange($settings);
  $response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

 if ((isset($_GET['object'])) == 'on') { var_dump(json_decode($response));
 } else {
   echo $response;
 }

} else {
  header("Location: form.php");
  die();}