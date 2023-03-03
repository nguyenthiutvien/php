<?php
    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case "edit": {
                    header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/form-edit.php?id={$_GET['id']}");
                    break;
                }
            case "add": {
                    header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/add.php?status={$_GET['status']}");
                    break;
                }
            case "remove": {
                    header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/remove.php?id={$_GET['id']}");
                    break;
                }
            default: {
                    header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/admin.php?status={$_GET['status']}");
                    break;
                }
        }
    }
    else {
        header("Location: http://localhost:8080/ltweb_php/phpMySQL/admin/admin.php");
    }
?>