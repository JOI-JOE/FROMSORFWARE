<?php
require_once "pdo.php";

function show_product($kyw = "", $id_commodity = 0)
{
    $sql = "SELECT * FROM `products`
            JOIN `commodity` ON products.id_commodity = commodity.id_commodity
            WHERE 1 ";
    if ($kyw != "") {
        $sql .= " AND `products`.`name_product` LIKE '%"  . $kyw . "%'";
    }
    if ($id_commodity > 0) {
        $sql .= " AND `products`.`id_commodity` = '" . $id_commodity . "'";
    }

    $sql .= " ORDER BY `id_product` ASC";
    $list_product =  pdo_query($sql);
    return $list_product;
}
function show_product_one($id_product)
{
    $sql = "SELECT * FROM `products`
    JOIN `commodity` ON products.id_commodity = commodity.id_commodity WHERE `id_product` =  '$id_product'";
    return pdo_query_one($sql);
}
function insert_product($name, $type, $genre, $date, $price, $sale, $option, $img)
{
    $sql = "INSERT INTO `products`(`name_product`, `price_product`, `sale_product`, `img_product`, `description`,`id_commodity`, `special`, `date_product`) 
    VALUES ('$name','$price','$sale','$img','$option','$type','$genre','$date')";
    pdo_execute($sql);
}
function delete_product($id_type)
{
    $sql = "DELETE FROM `products` WHERE  `id_product` =" . $id_type;
    pdo_execute($sql);
}
function update_product_one($id_product, $name, $price, $sale, $img_product, $description, $type, $genre, $date)
{
    if ($img_product !== "") {
        $sql = "UPDATE `products` 
        SET 
        `name_product`='$name',
        `price_product`='$price',
        `sale_product`='$sale',
        `img_product`='$img_product',
        `description`='$description',
        `id_commodity`='$type',
        `special`='$genre',
        `date_product`='$date' WHERE `id_product`='$id_product'";
    } else {
        $sql = "UPDATE `products` 
        SET 
        `name_product`='$name',
        `price_product`='$price',
        `sale_product`='$sale',
        `description`='$description',
        `id_commodity`='$type',
        `special`='$genre',
        `date_product`='$date' WHERE `id_product`='$id_product'";
    }
    pdo_execute($sql);
}

function product_exists($id_product)
{
    $sql = "SELECT count(*) FROM products WHERE id_product=$id_product";
    return pdo_query_value($sql) > 0;
}

function select_all_product()
{
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}


function select_product_top10()
{
    $sql = "SELECT * FROM products WHERE view > 0 ORDER BY view DESC LIMIT 0,10";
    return pdo_query($sql);
}

function increase_view_product($id_product)
{
    $sql = "UPDATE products SET view = view + 1 WHERE id_product =" . $id_product;
    return pdo_query($sql);
}

function select_product_special()
{
    $sql = "SELECT * FROM `products` WHERE special = 'special'";
    return pdo_query($sql);
}

function select_product_by_commodity($id_commodity)
{
    $sql = "SELECT * FROM products WHERE id_commodity= $id_commodity LIMIT 0, 20";
    return pdo_query($sql);
}

function select_product_keyword($keyword)
{
    $sql = "SELECT * FROM products P "
        . "JOIN commodity C ON C.id_commodity = P.id_commodity"
        . " WHERE name_product LIKE '%' . $keyword . '%' OR id_commodity LIKE  '%' . $keyword . '%'";
    return pdo_query($sql);
}

function select_product_by_date()
{
    $sql = "SELECT * FROM products WHERE date_product BETWEEN '2024-01-01' AND '2025-04-01'";
    return pdo_query($sql);
}
// ----------------------------------------------------------------------------------------
function pagination_product()
{
    $limit = 4;
    if (!isset($_SESSION['page_no'])) {
        $_SESSION['page_no'] = 1;
    }
    if (!isset($_SESSION['page_count'])) {
        $row_count = pdo_query_value("SELECT count(*) FROM products");
        $_SESSION['page_count'] = ceil($row_count / $limit);
    }

    if (exist_param("page_no")) {
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if ($_SESSION['page_no'] < 0) {
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if ($_SESSION['page_no'] > $_SESSION['page_count']) {
        $_SESSION['page_no'] = 0;
    }
    // if ($_SESSION['page_no'] < 0) {
    //     $_SESSION['page_no'] = 0;
    // } else if ($_SESSION['page_no'] >= $_SESSION['page_count']) {
    //     $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    // }
    $start =  ($_SESSION['page_no'] - 1) * $limit;
    $sql = "SELECT * FROM `products`
    JOIN `commodity` ON products.id_commodity = commodity.id_commodity ORDER BY id_product LIMIT  $start , $limit";

    return pdo_query($sql);
}
//  CHECK DATA EXISTS
