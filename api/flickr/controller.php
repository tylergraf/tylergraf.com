<?php
/* Last updated with phpFlickr 1.3.2
 *
 * This example file shows you how to call the 100 most recent public
 * photos.  It parses through them and prints out a link to each of them
 * along with the owner's name.
 *
 * Most of the processing time in this file comes from the 100 calls to
 * flickr.people.getInfo.  Enabling caching will help a whole lot with
 * this as there are many people who post multiple photos at once.
 *
 * Obviously, you'll want to replace the "<api key>" with one provided 
 * by Flickr: http://www.flickr.com/services/api/key.gne
 */

$api_key    = "844e245170907033a0e43e7e5e96abb8";
$api_secret = "111c7ebeb4908575";
$username = 'tylergraf';

require_once("phpFlickr.php");
$f = new phpFlickr($api_key);
//$f->enableCache("fs", "/image_cache");

$result = $f->people_findByUsername($username);
$nsid = $result["id"];

if($_GET['id']){
  $photoSetId = $_GET['id'];
  $photoSet = $f->photosets_getPhotos($photoSetId);

}
else{
  $photoSets = $f->photosets_getList($nsid);
}




?>
