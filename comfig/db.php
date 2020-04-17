<?php
define('db_server',"localhost");
define('db_user',"root");
define('db_pass',"tushar00");
define('db_name',"myblog");

$conn=mysqli_connect(db_server,db_user,db_pass,db_name);

if(mysqli_connect_errno()){
    echo "failed to connect to Database: ".mysqli_connect_errno();
}
?>