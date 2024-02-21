<section class="section_list">
    <div class="title">
        <h1>List Comments</h1>
    </div>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th style="padding: 0 70px;">Quantity</th>
                <th style="padding: 0 70px;">New</th>
                <th style="padding: 0 100px;">Old</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($statis_comments as $comment) {
                extract($comment);
                echo '<tr>
                    <td>' . $name_product . '</td>
                    <td>' . $quantity . '</td>
                    <td>' . $newest_comment_date . '</td>
                    <td>' . $oldest_comment_date . '</td>
                    <td>
                    <a href="index.php?detail&id_product=' . $id_product . '" class="button-86">Detail</a>
                    </td>
                    </tr>';
            }
            ?>
        </tbody>
    </table>

</section>