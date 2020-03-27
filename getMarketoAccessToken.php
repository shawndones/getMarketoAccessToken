<?php

function getAccessToken() {
  $client_id = <Client ID>;
  $client_secret = <Client Secret>;
  $auth_user = <Auth User>;
  $identity_url = <Identity URL>;

  $url = "$identity_url/oauth/token?grant_type=client_credentials&client_id=$client_id&client_secret=$client_secret";
    $data = array();
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $responseInfo = curl_exec($ch);
  curl_close($ch);
  
  $response = json_decode($responseInfo, true);
  
  return $response['access_token'];

}
