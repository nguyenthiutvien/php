<?php
require_once "../core/connectDB.php";
error_reporting(0);
if (isset($_GET["id"])) {
    if ($con->query("DELETE FROM products WHERE id = '{$_GET['id']}'")) {
        header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/index.php?page=admin&status=successful");
    } else {
        header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/index.php?page=admin&status=fail");
    };
}
?>