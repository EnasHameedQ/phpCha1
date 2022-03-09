<?php
$x = 300;
$y = 200;

function multiplication()
{
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}

multiplication();
echo "GLOBALS" . $z . "<br>";

echo "_SERVER" . $z;
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";


echo "_ENV <br>";


echo 'My username is ' . $_ENV["USER"] . '!<br>';

?>

<?php

$name=$_GET["name"];
$age=$_GET["age"];
if ($name || $age) {
    echo "Welcome " . $name . "<br />";
    echo "You are " . $age . " years old.";

    exit();
}
?>
<html>

<body>

    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>

</body>

</html>