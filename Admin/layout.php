<?php
try {
    check_login();
} catch (Exception $e) {
    if ($e->getCode() === 403) {
        echo "You are not authorized to access this page.";
    } else {
        echo "An error occurred: " . $e->getMessage();
    }
}
require "header.php";
?>
<main>
    <!-- ========================= HOME =============================== -->
    <section class="home container">
        <?php
        // include "Main/home.php";
        include $VIEW_NAME;
        ?>
    </section>
</main>
<?php
require "footer.php";
?>