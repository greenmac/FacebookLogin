<?php
  session_start();
  require_once "Facebook/autoload.php";
  $FB = new \Facebook\Facebook([
    'app_id' => '606095676392484',
    'app_secret' => '2f6b4e9bd734d82a124d0a25a55ca69d',
    'default_graph_version' => 'v3.0'
  ]);

  $helper = $FB->getRedirectLoginHelper();
?>
