<html>
<head>
</head>
<body>
<?php
require 'debconnection.php';

$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')";

$result = mysqli_query($db,$query);
mysqli_close($db);

?>

<h3> Book information is inserted successfully </h3>

<a href="searchbooks.php"> Click here to search books </a>
</body>
</html>