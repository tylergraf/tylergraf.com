
<?php
error_reporting(E_ALL & ~E_NOTICE);

#Written by Dhruv Govil.
#Please credit in code or link to my site if used.
#www.dgovil.com



function displayTree($var) {
  $newline = "\n";
  foreach($var as $key => $value) {
      if (is_array($value) || is_object($value)) {
          $value = $newline . "<ul>" . displayTree($value) . "</ul>";
      }

      if (is_array($var)) {
          if (!stripos($value, "<li class=")) {
             $output .= "<li class=\"file\">" . $value . "</li>" . $newline;
          }
          else {
             $output .= $value . $newline;
          }

      }
      else { // is_object
         if (!stripos($value, "<li class=")) {
            $value = "<ul><li class=\"file\">" . $value . "</li></ul>" . $newline;
         }

         $output .= "<li class=\"folder\">" . $key . $value . "</li>" . $newline;
      }

  }

  return $output;
 }



#Necessary Paramaters

$uname = 'solenoled';
$limit = '10';

if ($_GET['offset'] == ''){
	$offset = '0' ;
}

	else {
		$offset = $_GET['offset'];};


$key = 'dIhAnxldxbsglBGNVV44pUdXesW9DcjMRfcSVey0lXg9VAQmsN' ;

#Get offset from URL

if ($_GET['post'] == ''){
	$postID = '' ;
}

	else {
		$postID = '&id='.$_GET['post'];
		$offset = '0' ;
		$limit='2';
	};


$key = 'jQLvpw94zw5RczdZnNQWNyY3VAgXZWMnv0tJ6axMX1hqFsUAdy' ;

//
//#Generate Tumblr URL
//	$request = 'http://api.tumblr.com/v2/blog/'.$uname.'.tumblr.com/posts?api_key='.$key;
////echo $request;
//		#Get Tumblr JSON via curl_*
//		$ci = curl_init($request);
//		curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
//		$input = curl_exec($ci);
//
//		#Put JSON into Array
//		$value = json_decode($input,true);
//
//		#Check if Tumblr JSON is correct
//		if ($value['meta']['msg'] == 'OK'){
//
//			#Process JSON Array
//			$posts = $value['response']['posts'];
//			$pCount = $value['response']['blog']['posts'];
//			$tCount = $value['response']['total_posts'];
//			$p = '<p>';
//                        $cp = '</p>';
//                        $br = '<br>';
//                        $brc = '</br>';
//			for($i='0';$i<$tCount;$i++){
//				Echo $br.$brc;
//                                $inf = $posts[$i];
//                                $tags = $inf['tags'];
//				$tagsCount = count($tags);
//				Echo $p.(date("n.j.Y",$inf['timestamp'])).$cp;
//				Echo $p.($inf['title']).$cp;
//				Echo $p.($inf['body']).$cp;
//				#iterates through tags, if there are any.
//					for($j='0';$j<$tagsCount;$j++){
//						Echo '#'.($inf['tags'][$j]).' ';
//						}
//
//			}
//		}
//    else{
////      echo displayTree($value);
//      print_r($value);
//    }
$posts_get_endpoint = 'http://api.tumblr.com/v2/blog/{base-hostname}/posts';

public function get_entries($blog_name = '', $limit = 20) {
        if ( !function_exists('curl_init') ) {
            return false;
        }
        $use_url = str_replace('{base-hostname}', $blog_name,
        $this->posts_get_endpoint);
        $use_url .= '?api_key='.$this->application_key;
        $posts = false;
        $curl = curl_init($use_url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        if($response['meta']['status'] == 200){
            $posts = $response['response']['posts'];
        }
        unset ($response);
        return $posts;
    }