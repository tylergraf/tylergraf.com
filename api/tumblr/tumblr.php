
<?php
error_reporting(E_ALL & ~E_NOTICE);

#Written by Dhruv Govil.
#Please credit in code or link to my site if used.
#www.dgovil.com



//if ($_GET['post'] == ''){
//	$postID = '' ;
//}
//
//	else {
//		$postID = '&id='.$_GET['post'];
//		$offset = '0' ;
//		$limit='2';
//	};
//  var $limit = '10';
//
//if ($_GET['offset'] == ''){
//	$offset = '0' ;
//}
//	else {
//		$offset = $_GET['offset'];
//};

if (!class_exists('phpTumblr')) {
  if (session_id() == "") {
    @session_start();
  }
  class phpTumblr
  {
    var $username;
    var $api_key;
    var $secret;

    function phpTumblr($api_key, $username, $secret = NULL)
    {
      $this->api_key = $api_key;
      $this->secret = $secret;
      $this->username = $username;
    }

    function call($url){
      $ci = curl_init($url);
      curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
      $input = curl_exec($ci);
      $value = json_decode($input, true);

      return $value;
    }

    function getPosts(){
      $request = 'http://api.tumblr.com/v2/blog/' . $this->username . '.tumblr.com/posts?api_key=' . $this->api_key;
      return $this->call($request);
    }
  }
}
