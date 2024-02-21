<style>
    form {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-box {
        height: 60px;
        width: 600px;
        background: #fff;
        margin-right: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .search-box input {
        height: 100%;
        width: 100%;
        outline: none;
        font-size: 18px;
        font-weight: 400;
        border: none;
        padding: 0 15px 0;
        background-color: transparent;
    }

    .button-search {
        height: 40px;
        margin: 0 20px;
        font-size: 16px;
        font-weight: 400;
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 6px;
        background-color: #28282d;
        cursor: pointer;
    }

    .type_game {
        height: 55px;
        background: rgba(255, 255, 255, 0.05);
        padding: 10px 40px;
        font-size: 20px;
        font-weight: 400;
        border-radius: 8px;
        align-items: center;
        cursor: pointer;
        justify-content: space-between;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    /*------------------- pagination ------------------- */
    .pagination {
        margin-top: 30px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60px;
        box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(3px);
        border-radius: 10px;
    }

    .pagination li {
        list-style-type: none;
        display: inline-block;
    }

    .pagination li a {
        padding: 20px 25px;
        text-decoration: none;
        color: #28282d;
        font-weight: 500;
    }

    .pagination li a:hover,
    .pagination li.active a {
        border-radius: 5px;
        background: rgba(100, 100, 100, 0.2);
    }
</style>
<section class="section_list">
    <div class="title">
        <h1>List Product</h1>
    </div>
    <form action="index.php?list_product" method="post">

        <!-- ---------------------------------------------------------------- -->
        <div class="search-box">
            <input type="text" name="kyw" class="search-btn" placeholder="search...">
        </div>
        <!------------------------------------------------------------------ -->
        <select name="id_commodity" class="type_game">
            <option value="0" selected>All Select</option>
            <?php
            foreach ($types as $type) {
                extract($type);
                echo '<option value=' . $id_commodity . '>' . $name_commodity . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="list_ok" class="button-search" value="search">
    </form>
    <table>
        <tr>
            <th>#</th>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Sale</th>
            <th>Type</th>
            <th>Img</th>
            <!-- <th>Decrip</th> -->
            <th>View</th>
            <th>Classify</th>
            <th>Date</th>
            <th></th>
        </tr>
        <form action="index.php" method="post">
            <?php

            foreach ($products as $product) {
                extract($product);
                $fix_product = "index.php?btn_edit&id=" . $id_product;
                $del_product = "index.php?btn_delete&id=" . $id_product;
                $up_img_dm = "../../Content/Images/product/" . $img_product;
                if (is_file($up_img_dm)) {
                    $img = "<img src='" . $up_img_dm . "'  width='50'  >";
                } else {
                    $img = 'No photo';
                }
                echo
                '<tr>
                <td><input type="checkbox" name="deleteId[]" value="' . $id_product . '"></td>
                <td>' . $id_product . '</td>
                <td>' . $name_product . '</td>
                <td>$' . number_format($price_product, 2) . '</td>
                <td>' . number_format($sale_product * 100) . '%</td>
                <td>' . $name_commodity . '</td>
                <td>' . $img . '</td>
               
                <td>' . $view . '</td>
                <td>' . $special . '</td>
                <td>' . $date_product . '</td>
                <td> 

                <a href="' . $fix_product . '"  class="button-86" >Edit</a> |
                <a href="' . $del_product . '"  class="button-86">Delete</a>
                </td>
                </tr>
                ';
            }
            ?>
    </table>
    <!-- pagionation  -->
    <div class="pagination">
        <ul>
            <?php
            for ($i = 1; $i <= $_SESSION['page_count']; $i++) {
                echo ' <li>
                <a href="index.php?page_no=' . $i . '">' . $i . '</a>
            </li>';
            }
            ?>
        </ul>
    </div>
    <!------------------------------------ End Pagionation  ------------------>
    <div class="button">
        <input type="button" id="select-all" class="my-button" value="Select All">
        <input type="button" id="not-select" class="my-button" value="Deselect All">
        <button type="submit" name="del_by_id" class="my-button">Delete By Select</button>
        <a href="index.php?btn_add"><input type="button" class="my-button" value="Add More"></a>
    </div>
    </form>
</section>
<script>
    const selectAllButton = document.querySelector("#select-all");
    const not_select = document.querySelector("#not-select");
    const checkboxes = document.querySelectorAll("input[name='deleteId[]']");

    function toggleCheckboxes(checkedState) {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = checkedState;
        });
    }

    selectAllButton.addEventListener("click", () => {
        toggleCheckboxes(!selectAllButton.checked);
    });

    not_select.addEventListener("click", () => {
        toggleCheckboxes(selectAllButton.checked);
    });
</script>