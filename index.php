<?php
$counter = "counter";
$cookie_value = 0;

?>
<html lang="ru">
<body>

<?php
if(!isset($_COOKIE[$counter])) {
    echo "Посещение сайта '" . $cookie_value . "' раз!";
} else {
    $cookie_value = $_COOKIE[$counter] + 1;
    echo "Посещение сайта '" . $cookie_value . "' раз!";
    setcookie($counter, '');
}
setcookie($counter, $cookie_value);
?>

</body>
</html>