<?php
require "../../global.php";
require "../../Dao/control_Comment.php";
require "../../Dao/control_Statistic.php";

extract($_REQUEST);
if (exist_param("chart", $_REQUEST)) {
    $products = statistic_product();
    $VIEW_NAME = "chart.php";
} else {
    $products = statistic_product();
    $VIEW_NAME = "list.php";
}
require "../layout.php";
