<?php
// require "../../Dao/pdo.php";
require "../../Dao/control_Comment.php";
require "../../Dao/control_Statistic.php";
require "../../global.php";
// ------------------------------------------//
extract($_REQUEST);
if (exist_param('detail', $_REQUEST)) {
    $comments = comment_select_by_product($id_product);
    $VIEW_NAME = "detail.php";
} elseif (exist_param('delete', $_REQUEST)) {
    comment_delete($id_comment);
    $comments = comment_select_by_product($id_product);
    $VIEW_NAME = "detail.php";
} elseif (exist_param('delete_by_id', $_REQUEST)) {
    foreach ($_POST['deleteId'] as $id_comment) {
        comment_delete($id_comment);
    }
    $comments = comment_select_by_product($_POST['box']);
    $VIEW_NAME = "detail.php";
} else {
    $statis_comments = statistic_comment();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
