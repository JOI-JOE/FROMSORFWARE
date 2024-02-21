<section class="section_list">
    <div class="title">
        <h1>Statistic Product By Commodity</h1>
    </div>
    <table>
        <thead>

            <tr>
                <th>Type Of Game</th>
                <th>Quantity</th>
                <th>Min Price</th>
                <th>Max Price</th>
                <th>Averge Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                extract($product);
                echo '
                <tr>
                <td>' . $name_commodity . '</td>
                <td>' . $quantity . '</td>
                <td>' . number_format($price_min, 2) . '</td>
                <td>' . number_format($price_max, 2) . '</td>
                <td>' . number_format($price_avg, 2) . '</td>
                </tr>
                ';
            }
            ?>
        </tbody>
    </table>
    <div class="button">
        <a href="index.php?chart"><input type="button" class="my-button" value="Show Chart"></a>
    </div>
</section>