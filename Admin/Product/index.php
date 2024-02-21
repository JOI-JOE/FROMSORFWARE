<?php
require "../../Dao/pdo.php";
require "../../Dao/control_Commodity.php";
require "../../Dao/control_Product.php";
require "../../global.php";
extract($_REQUEST);
// ========================= START ADD PRODUCT ===============================
if (exist_param("btn_add")) {
    if (isset($_POST['Add']) && ($_POST['Add'])) {
        $name_product = $_POST['name_product'];
        $type_product = $_POST['type_product'];
        $genre = $_POST['genre'];
        $date = $_POST['date_product'];
        $price = $_POST['price_product'];
        $sale = $_POST['sale_product'];
        $description = $_POST['opinion'];
        $img_product = $_FILES['img_product']['name'];
        $target_dir = "$IMAGE_DIR/product/";
        // ---------------- FUNCTION ------------------//
        save_file('img_product', $target_dir);
        insert_product($name_product, $type_product, $genre, $date, $price, $sale, $description, $img_product);
        $success = "Added successfully";
    }
    $types = show_commodity();
    $VIEW_NAME = "new.php";
    // ========================= END ADD PRODUCT ===============================

    // ========================= START DELETE PRODUCT ===============================
} elseif (exist_param("btn_delete")) {
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        delete_product($_GET['id']);
    }

    $products = pagination_product();
    // $products = show_product();
    $VIEW_NAME = "list.php";
    // ========================= END DELETE PRODUCT ===============================

    // ========================= START DELETE BY SELECT PRODUCT ===============================
} elseif (exist_param("del_by_id")) {
    if (is_array($_POST["deleteId"])) {
        foreach ($_POST['deleteId'] as $deleteId) {
            delete_product($deleteId);
        }
    }
    $products = pagination_product();
    // $products = show_product();
    $VIEW_NAME = "list.php";
    // ========================= END DELETE BY SELECT PRODUCT ===============================

    // ========================= START EDIT PRODUCT ===============================
} elseif (exist_param("btn_edit")) {
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $products = show_product_one($_GET['id']);
    }
    $types = show_commodity();
    $VIEW_NAME = "update.php";
    // ========================= END EDIT PRODUCT ===============================

    // ========================= START UPDATE PRODUCT ===============================
} elseif (exist_param("btn_update")) {
    if (isset($_POST['update']) && ($_POST['update'])) {
        $id_product = $_POST['id_product'];
        $name_product = $_POST['name_product'];
        $type_product = $_POST['type_product'];
        $genre = $_POST['genre'];
        $date = $_POST['date_product'];
        $price = $_POST['price_product'];
        $sale = $_POST['sale_product'];
        $description = $_POST['opinion'];
        $img_product = $_FILES['img_product']['name'];
        $target_dir = "$IMAGE_DIR/product/";
        // ---------------- FUNCTION ------------------//
        save_file('img_product', $target_dir);
        update_product_one($id_product, $name_product, $price, $sale, $img_product, $description, $type_product, $genre, $date);
    }
    $types = show_commodity();
    // $products = show_product();
    $products = pagination_product();
    $VIEW_NAME = "list.php";
    // ========================= END UPDATE COMMODITY ===============================
} elseif (exist_param("list_product")) {
    if (isset($_POST['list_ok']) && ($_POST['list_ok'])) {
        $kyw = $_POST['kyw'];
        $id_commodity = $_POST['id_commodity'];
        $_SESSION['page_count'] = 0;
    }
    $products = show_product($kyw, $id_commodity);
    $types = show_commodity();
    // $products = pagination_product();
    $VIEW_NAME = "list.php";
} else {
    $types = show_commodity();
    // $products = show_product();
    $products = pagination_product();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
