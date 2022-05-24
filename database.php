<?php

function getConnection()
{
	return new PDO('mysql:host=mysql_local;dbname=blog;charset=UTF8', 'root', 'pass');
}

function getSqlBlog()
{
	return "SELECT posts.title, authors.name, posts.created_at, posts.description, posts.url_key FROM posts INNER JOIN authors ON  posts.author_id=authors.author_id order by posts.created_at desc limit 4;";
}

function getSqlPost($post_url_key)
{
	return "SELECT posts.title, authors.name, posts.created_at, posts.url_key, posts.content, posts.description FROM posts INNER JOIN authors ON  posts.author_id=authors.author_id WHERE posts.url_key='$post_url_key'";
}

