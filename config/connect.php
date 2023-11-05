<?php
//postgresql://db:AVNS_J1irDLwrx8C49pOOphK@app-d73a5bcd-b1ed-44c8-8488-46e3ccd620f6-do-user-14788487-0.c.db.ondigitalocean.com:25060/db?sslmode=require
$servername = "app-d73a5bcd-b1ed-44c8-8488-46e3ccd620f6-do-user-14788487-0.c.db.ondigitalocean.com";
$database = "db";
$username = "db";
$password = "AVNS_J1irDLwrx8C49pOOphK";
// Create connection
$conn = pg_connect("host=$servername port=25060 dbname=$database user=$username password=$password sslmode=require");
// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
// mysqli_set_charset($conn, 'UTF8');
// mysqli_close($conn);


?>