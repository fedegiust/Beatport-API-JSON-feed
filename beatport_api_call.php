<?php

	if(isset($_GET['facets'])){
		$facets=$_GET['facets'];
	}
	if(isset($_GET['sortBy'])){
		$sortBy=$_GET['sortBy'];
	}
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	if(isset($_GET['url'])){
		$url=$_GET['url'];
	}
	
	$qrystring = '';

	if(isset($facets) && strlen($facets) > 0){
		$qrystring .= '?facets=' . $facets;
	}elseif(isset($id) && strlen($id) >0) {
		$qrystring .= '?id=' . $id;
	}else{
		echo 'Parameter missing';
		exit;
	}
	if(isset($sortBy) && strlen($sortBy) > 0){
		$qrystring .= '&sortBy=' . $sortBy;
	}
	if(isset($url) && strlen($url) > 0){
		$qrystring .= '&url=' . $url;
	}

echo 'http://www.federicogiust.com/beatportapi/beatport_api.php'. $qrystring;
	$json = file_get_contents('http://www.federicogiust.com/beatportapi/beatport_api.php'. $qrystring);        
	$data = json_decode($json);
echo '<pre>';
print_r($json);
echo '</pre>';

	$dataArray = (array) $data;

?>