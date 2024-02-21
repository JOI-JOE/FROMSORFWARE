<section class="section_product ">
    <div class="title">
        <h1>LIST Clients</h1>
    </div>
    <table>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Email</th>
            <th>Pass</th>
            <th>Name</th>
            <th>Img</th>
            <th>Role</th>
            <th>Active</th>
            <th></th>
        </tr>
        <?php
        foreach ($clients as $client) {
            extract($client);
            $fix_type = "index.php?btn_edit&id=" . $id_client;
            $del_type = "index.php?btn_delete&id=" . $id_client;
            $up_img_dm = "../../Content/Images/client/" . $img_client;
            if (is_file($up_img_dm)) {
                $img = "<img src='" . $up_img_dm . "' width ='100' >";
            } else {
                $img = 'No photo';
            }
            ($active === 1) ? $choose = "Active" : $choose  = "Not Active";
            echo
            '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>PS' . $id_client . '</td>
                <td>' . $email . '</td>
                <td>' . $password . '</td>
                <td>' . $name_client . '</td>
                <td>' . $img . '</td>
                <td>' . $role . '</td>
                <td>' . $choose . '</td>

                <td> 
                <a href="' . $fix_type . '"><button type="submit" class="button-86">Edit</button> </a>|
                <a href="' . $del_type . '"><button type="submit" class="button-86">Delete</button> </a>
                </td>
            </tr>';
        }
        ?>

    </table>
    <div class="button">
        <!-- <input type="button" class="my-button" value="chon tất cả">
        <input type="button" class="my-button" value="bỏ chọn tất cả">
        <input type="button" class="my-button" value="Xóa các mục đã chọn"> -->
        <a href="index.php?btn_add"><input type="button" class="my-button" value="Add More"></a>
    </div>
</section>