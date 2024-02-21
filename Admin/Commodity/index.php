<?php
require "../../global.php";
require "../../Dao/pdo.php";
require "../../Dao/control_Commodity.php";
extract($_REQUEST);
// ========================= START ADD COMMODITY ===============================
if (exist_param("btn_add")) {
    if (isset($_POST['Add']) && ($_POST['Add'])) {

        if (trim($name_type) == null) {
            $error = "Name cannot be blocked";
        } elseif (strlen(trim($name_type)) < 1) {
            $error = "Have to be more than 1 characters";
        } elseif (!check_name($name_type)) {
            $error = "It existed before";
        } else {
            insert_commodity($name_type);
            $success = "Added successfully";
        }
        // ----------------------------------//
    }
    $VIEW_NAME = "new.php";
    // ========================= END ADD COMMODITY ===============================

    // ========================= START DELETE COMMODITY ===============================
} elseif (exist_param("btn_delete")) {
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_commodity($_GET['id']);
    }
    $types = show_commodity();
    $VIEW_NAME = "list.php";
    // ========================= END DELETE COMMODITY ===============================

    // ========================= START DELETE BY ID COMMODITY ===============================
} elseif (exist_param("del_by_id")) {
    if (is_array($_POST["deleteId"])) {
        foreach ($_POST['deleteId'] as $deleteId) {
            delete_commodity($deleteId);
        }
    }
    $types = show_commodity();
    $VIEW_NAME = "list.php";
    // ========================= END END DELETE BY ID PRODUCT ===============================

    // ========================= START UPDATE COMMODITY ===============================
} elseif (exist_param("btn_edit")) {
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $types = show_commodity_one($_GET['id']);
    }
    $VIEW_NAME = "update.php";
    // ========================= END UPDATE COMMODITY ===============================

    // ========================= START EDIT COMMODITY ===============================
} elseif (exist_param("btn_update")) {
    if (isset($_POST['update']) && ($_POST['update'])) {
        $id_type = $_POST['id_type'];
        $name_type = $_POST['name_type'];
        update_commodity_one($id_type, $name_type);
        // ----------------------------------//
    }
    $types = show_commodity();
    $VIEW_NAME = "list.php";

    // ========================= END EDIT COMMODITY ===============================
} else {
    $types = show_commodity();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
