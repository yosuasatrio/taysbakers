<?php
function getaddress($lat,$lng)
  {
     $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($lat).','.trim($lng).'&sensor=false&API=AIzaSyCUaBCQ7A4KZ7ZlyCf0Ir72vrw6bGAUER0';
     $json = @file_get_contents($url);
     $data=json_decode($json);
     $status = $data->status;
     if($status=="OK")
     {
       return $data->results[0]->formatted_address;
     }
     else
     {
       return false;
     }
  }	

  	$lat = "-6.121435";
	$lng = "106.774124";
	$location = getAddress($lat,$lng);
	echo $location;
?>