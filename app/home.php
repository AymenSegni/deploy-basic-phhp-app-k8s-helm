<?php
try{
    $mysql_host = getenv('MYSQL_HOST');
    $dbh = new pdo( "mysql:host=$mysql_host:3306;dbname=sakila",
                    getenv('MARIADB_USER'),
                    getenv('MARIADB_PASSWORD'),
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $result = $dbh->query("show tables");
    while ($row = $result->fetch(PDO::FETCH_NUM)) {
        echo($row[0]) . "<br />";
    }
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => "Unable to connect: $ex")));
}
?>