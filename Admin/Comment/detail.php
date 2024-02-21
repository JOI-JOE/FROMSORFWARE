<?php

?>
<section class="section_list">
    <div class="title">
        <h1>List Detail Of Comment</h1>
    </div>
    <!-- <form action="index.php?delete=<?= $id_comment ?>" method="post"> -->
    <h3 style="margin-bottom: 30px;">Product: <?= isset($comments[0]['name_product']) ?  $comments[0]['name_product'] : ""; ?></h3>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Content_Comment</th>
                <th>Date</th>
                <th>Your_Comment</th>
                <th></th>
            </tr>
        </thead>
        <form action="index.php" method="post">
            <tbody>
                <?php
                foreach ($comments as $comment) {
                    extract($comment);
                    echo '
                        <tr>
                            <td><input type="checkbox" name="deleteId[]" value=' . $id_comment . '><input type="hidden" name="box" value=' . $id_product . '></td>
                            <td>' . $content_comment . '</td>
                            <td>' . $date_comment . '</td>
                            <td>' . $name_client . '</td>
                            <td>
                                <a href="index.php?delete&id_comment=' . $id_comment . '&id_product=' . $id_product . '" class="button-86">Delete</a>
                            </td>
                        </tr>
                        ';
                }
                ?>
            </tbody>
    </table>
    <div class="button">
        <input type="button" id="select-all" class="my-button" value="Select All">
        <input type="button" id="not-select" class="my-button" value="Deselect All">
        <button type="submit" name="delete_by_id" class="my-button">Delete By Select</button>
        <a href="index.php"><input type="button" class="my-button" value="List"></a>
    </div>
    </form>
</section>
<script>
    const selectAllButton = document.querySelector("#select-all");
    const not_select = document.querySelector("#not-select");
    const checkboxes = document.querySelectorAll("input[name='deleteId[]']");

    selectAllButton.addEventListener("click", () => {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = !selectAllButton.checked;
        });
    });
    not_select.addEventListener("click", () => {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllButton.checked;
        });
    });
</script>