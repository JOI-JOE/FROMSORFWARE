<section class="section_product">
    <div class="title">
        <h1>Add Client</h1>
    </div>
    <form action="index.php?btn_add" method="post" enctype="multipart/form-data" class="form">
        <div class="input-box">
            <label>Id_Client</label>
            <input type="text" placeholder="Auto Number" disabled />
        </div>
        <div class="input-box">
            <label>Email</label>
            <input type="email" placeholder="Your email" name="email_client" required />
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="password" placeholder="Your password" name="pass_client" required />
        </div>
        <div class="input-box">
            <label>Full Name</label>
            <input type="text" placeholder="Your name" name="name_client" required />
        </div>
        <div class="column">
            <div class="input-box">
                <label for="file">Image</label>
                <div class="input_file">
                    <input type="file" id="file" name="img_client" accept="image/*" hidden>
                    <div class="img-area" data-img="">
                        <i class='bx bxs-cloud-upload icon'></i>
                        <h3>Upload Image</h3>
                        <p>Image size must be less than <span>2MB</span></p>
                    </div>
                    <input type="button" class="select-image" value="Submit" />
                </div>
            </div>
            <div class="input-box">
            </div>
        </div>
        <div class="input-box">
            <label>Role</label>
            <div class="select-box">
                <select name="role">
                    <option value="boss">Boss</option>
                    <option value="client">Client</option>
                </select>
            </div>
        </div>
        <div class="type-box">
            <label>Choose</label>
            <div class="type-option">
                <div class="genre">
                    <input type="radio" id="active" name="active" value="1" />
                    <label for="active">Active</label>
                </div>
                <div class="genre">
                    <input type="radio" id="not-active" name="active" value="0" checked />
                    <label for="not-active">Not Active</label>
                </div>
            </div>
        </div>
        <div class="button">
            <input type="submit" name="Add" class="my-button" value="Add">
            <input type="reset" value="Reset" class="my-button">
            <a href="index.php"><input type="button" class="my-button" value="DANH SACH"></a>
        </div>
        <?php
        if (isset($thongbao) && $thongbao != "")
            echo $thongbao;
        ?>
    </form>
</section>