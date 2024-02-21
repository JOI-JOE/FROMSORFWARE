<?php
require '../../global.php';
require '../../Dao/control_Client.php';
extract($_REQUEST);
if (exist_param('update_ac')) {
    $target_dir = "$IMAGE_DIR/client/";
    // ---------------- FUNCTION ------------------//
    $file_name = save_file('img_client', $target_dir);
    $img = $file_name ? $file_name : $old_img;
    try {
        update_client_one($id_client, $email, $password, $name, $img, $role, $active);
        $MESSAGE = "Update your infor successfully";
        $user =  show_client_by_id($id_client);
        extract($user);
    } catch (Exception $exc) {
        $MESSAGE = "Update your infor client failed";
    }
}
$VIEW_NAME = "Account/update_Ac_form.php";
require '../layout.php';
