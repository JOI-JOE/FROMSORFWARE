<?php
require "../../Dao/pdo.php";
require "../../Dao/control_Client.php";
require "../../global.php";
extract($_REQUEST);
// extract($_request) sẽ bỏ qua bất kỳ biến nào có tên không hợp lệ.


// ========================= START ADD CLIENT ===============================
if (exist_param("btn_add")) {
    if (isset($_POST['Add']) && ($_POST['Add'])) {
        $email = $_POST['email_client'];
        $password = $_POST['pass_client'];
        $name = $_POST['name_client'];
        $role = $_POST['role'];
        $active = $_POST['active'];
        $img = $_FILES['img_client']['name'];
        $target_dir = "$IMAGE_DIR/client/";
        // ---------------- FUNCTION ------------------//
        save_file('img_client', $target_dir);
        insert_client($email, $password, $name, $img, $role, $active);
    }
    $VIEW_NAME = "new.php";
    // ========================= END ADD CLIENT ===============================

    // ========================= START DELETE CLIENT ===============================
} elseif (exist_param("btn_delete")) {
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_client($_GET['id']);
    }
    $clients = show_client();
    $VIEW_NAME = "list.php";
    // ========================= END DELETE CLIENT ===============================

    // ========================= START UPDATE CLIENT ===============================
} elseif (exist_param("btn_edit")) {
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $client = show_client_one($_GET['id']);
    }
    $VIEW_NAME = "update.php";
    // ========================= END UPDATE CLIENT ===============================

    // ========================= START EDIT CLIENT ===============================
} elseif (exist_param("btn_update")) {
    if (isset($_POST['update']) && ($_POST['update'])) {
        $id_client = $_POST['id_client'];
        $email = $_POST['email_client'];
        $password = $_POST['pass_client'];
        $name = $_POST['name_client'];
        $role = $_POST['role'];
        $active = $_POST['active'];
        $img = $_FILES['img_client']['name'];
        $target_dir = "$IMAGE_DIR/client/";
        // ---------------- FUNCTION ------------------//
        save_file('img_client', $target_dir);
        update_client_one($id_client, $email, $password, $name, $img, $role, $active);
    }
    $clients = show_client();
    $VIEW_NAME = "list.php";

    // ========================= END EDIT CLIENT ===============================
} else {
    $clients = show_client();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
