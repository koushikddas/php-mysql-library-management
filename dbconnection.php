<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'books'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 //database sql script
/*
create database books;
create table book_info(
id int(10) auto_increment primary key,
isbn varchar(30) not null,

);
*/
?>