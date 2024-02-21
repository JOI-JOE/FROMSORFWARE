<section class="section_product ">
    <div class="title">
        <h1>LIST TYPE OF GAME</h1>
    </div>
    <table>
        <tr>
            <th>#</th>
            <th>Id_Product</th>
            <th>Name_Product</th>
            <th style="width:50px"></th>
            <th style="width:50px"></th>
        </tr>
        <form action="index.php" method="Post">
            <?php
            foreach ($types as $type) {
                extract($type);
                $fix_type = "index.php?btn_edit&id=" . $id_commodity;
                $del_type = "index.php?btn_delete&id=" . $id_commodity;
                echo
                '<tr>
                <td><input type="checkbox" name="deleteId[]"  value="' . $id_commodity . '"></td>
                <td>' . $id_commodity . '</td>
                <td>' . $name_commodity . '</td>
                <td> 
                <a href="' . $fix_type . '"  class="button-86" >Edit</a>
                </td>
                <td>
                <a href="' . $del_type . '"  class="button-86">Delete</a>
                </td>
            </tr>';
            }
            ?>
    </table>
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