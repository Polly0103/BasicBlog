<?php
	
	$database_connection = getConnection();

	$sql_post=getSqlPost($post_url_key);
	$result = $database_connection->query($sql_post);
	
	

$array_result= $result->fetchAll();
$data=current($array_result);



if(empty($array_result))
{
http_response_code(404);
include('404.view.php'); 
die();
}
require 'post.view.php';

