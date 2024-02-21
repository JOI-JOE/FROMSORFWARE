<section class="section_commodity ">
    <div class="title">
        <h1>ADD TYPE OF GAME</h1>
    </div>

    <form action="index.php?btn_add" method="post" class="form" id="myForm">
        <?php
        if (isset($success)) {
            echo '<div class="input-box">
            <div class="alert">
                <i class="bx bxs-chck-circle"></i>
                <h1>' . $success . '</h1>
            </div>
        </div>';
        }
        ?>

        <div class="input-box">
            <label>ID_Type</label>
            <input type="text" name="id_type" disabled>
        </div>
        <div class="input-box <?= isset($error) ? "error" : "" ?>">
            <label>Name_Type</label>
            <input type="text" name="name_type" id="nameType" require>
            <small><?= $error ?></small>
        </div>
        <div class="button">
            <!-- <input type="button" class="select-image" value="Submit" /> -->
            <input type="submit" name="Add" class="my-button" value="Add">
            <button id="resetButton" class="my-button">Reset</button>
            <a href="index.php"><input type="button" class="my-button" value="List"></a>
        </div>
    </form>
</section>

<script>
    // RESET BUTTON //
    const form = document.getElementById("myForm");
    const resetButton = document.getElementById("resetButton");
    // const Add = document.querySelector("input[name='Add']");
    resetButton.addEventListener("click", () => {
        form.reset();
    });
</script>