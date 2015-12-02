<?php

require_once('TwitterAPIExchange.php');

if (isset($_GET['screen_name'])) {

  $screen_name = $_GET['screen_name'];

  $settings = array(
    'oauth_access_token' => "xxx",
    'oauth_access_token_secret' => "xxx",
    'consumer_key' => "xxx",
    'consumer_secret' => "xxx",
    'count' => 20,
  );

  $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
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