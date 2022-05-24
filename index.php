<?php
require 'database.php';



$post_url_key=$_GET['post'];

if(isset($post_url_key))
{
	require 'post.php';
}
elseif($_SERVER['REQUEST_URI']=="/blog/" || $_SERVER['REQUEST_URI']=="/blog/index.php"){
	$database_connection = getConnection();
	
	$sql_blog = getSqlBlog();
	$result = $database_connection->query($sql_blog);

	$array_result= $result->fetchAll();


require 'blog.view.php';
}else{
require '404.view.php';
}

