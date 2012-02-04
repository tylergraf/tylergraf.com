<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tylergraf
 * Date: 1/31/12
 * Time: 12:15 AM
 * To change this template use File | Settings | File Templates.
 */

class dribbble {

  var $username;

  function dribbble($username){
    $this->username = $username;
  }

  function call($url){
    $ci = curl_init($url);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
    $input = curl_exec($ci);
    $value = json_decode($input, true);

    return $value;
  }

  function getShots(){
    $request = 'http://api.dribbble.com/players/tylergraf/shots';
    return $this->call($request);
  }
}

?>