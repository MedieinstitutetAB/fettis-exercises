<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    h1 {
        font-size: 6em;
        background-color: black;
        color: white;
    }

    a {
        background-color: #8B0000;
        color: white;
        font-size: 3em;
        text-decoration: none;
    }
    </style>
</head>
<body>

<?php
<<<<<<< HEAD
ini_set("display_errors", 1);
session_start();
=======
>>>>>>> cbd823ae7ad3bebc750b4849424fb4e3f217910c

if(isset($_POST['name']) or isset($_POST['lastname'])){
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['lastname'] = $_POST['lastname'];
}
$name = $_SESSION['name'];
$lastname = $_SESSION['lastname'];

echo "<h1>Welcome ".$name  . '  ' . $lastname.", Enjoy your stay!</h1>";
echo "<br/>";
echo '<a href="register.php">back</a>';

echo '<br/><a href="sessiondestroy.php"><button>DÖDA</button></a>'

?>



</body>
</html>