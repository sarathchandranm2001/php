<?php
include('sarath_db.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $uname = $_POST['uname'];

    $ins = $connection_variable->query("insert into tbl_register(email,password) values('$email','$uname')");

}
?>
