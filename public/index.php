<?php
echo "Hola Mundo\n";
echo"ola k ase";

try {
    echo '<br />';
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'mysql-db';
    $dbname = 'beginningPHP';
    $user = 'user';
    $pass = 'pass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
?>
