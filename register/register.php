<?php 
session_start();
if(isset($_SESSION['name'])){
    header("location:results.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> Please Write your Name and Lastname 👽 </h1>
    <h4>And see what happens when you click 'Submit'</h4>
<?php 

echo "<form action='results.php' METHOD='POST'>";

echo "<input type='text' name='name'>Name<br/>";

echo "<input type='text' name='lastname'>Lastname<br/>";

echo "<input type='submit' value='Submit'>";

echo     "</form>";


<<<<<<< HEAD
echo "<div> A couple of seconds ago... someone wrote:" . ($_SESSION['name']) . ' ' . ($_SESSION['lastname']) . "</div>";
=======

// print_r ($_SESSION['name']);
>>>>>>> cbd823ae7ad3bebc750b4849424fb4e3f217910c

?>


</body>
</html>