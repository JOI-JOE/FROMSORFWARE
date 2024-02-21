<style>
    :root {
        /* ===== Colors ===== */
        --primary-color: hsl(0, 0%, 70%);
        --panel-color: #FFF;
        --text-color: #000;
        --black-light-color: #707070;
        --border-color: #e6e5e5;
        --toggle-color: #DDD;
        --box1-color: #4DA3FF;
        --box2-color: #FFE6AC;
        --box3-color: #E7D1FC;
        --title-icon-color: #fff;
    }

    body {
        min-height: 100vh;
        background-color: var(--primary-color);
    }

    body.dark {
        --primary-color: #3A3B3C;
        --panel-color: #242526;
        --text-color: #CCC;
        --black-light-color: #CCC;
        --border-color: #4D4C4C;
        --toggle-color: #FFF;
        --box1-color: #3A3B3C;
        --box2-color: #3A3B3C;
        --box3-color: #3A3B3C;
        --title-icon-color: #CCC;
    }

    /* === Custom Scroll Bar CSS === */
    .dash-content .title {
        display: flex;
        align-items: center;
        margin: 60px 0 30px 0;
    }

    .dash-content .title .text {
        font-size: 40px;
        font-weight: 500;
        color: var(--text-color);
        margin-left: 20px;
    }

    .dash-content .user-logo {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .dash-content .user-logo img {
        display: block;
        border-radius: 50%;
        width: 400px;
        height: 400px;
        margin: 0 50px;
        object-fit: cover;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        background: #fff;
    }

    .dash-content .boxes {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .dash-content .boxes .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 12px;
        width: calc(100% / 3 - 15px);
        padding: 15px 20px;
        background-color: var(--box1-color);
        transition: var(--tran-05);
    }

    .boxes .box .text {
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
        color: var(--text-color);
    }

    .boxes .box .number {
        font-size: 40px;
        font-weight: 500;
        color: var(--text-color);
    }

    .boxes .box.box2 {
        background-color: var(--box2-color);
    }

    .boxes .box.box3 {
        background-color: var(--box3-color);
    }

    .dash-content .activity .activity-data {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .activity .activity-data {
        display: flex;
    }

    .activity-data .data {
        display: flex;
        flex-direction: column;
        margin: 0 15px;
    }

    .activity-data .data-title {
        font-size: 20px;
        font-weight: 500;
        color: var(--text-color);
    }

    .activity-data .data .data-list {
        font-size: 18px;
        font-weight: 400;
        margin-top: 20px;
        white-space: nowrap;
        color: var(--text-color);
    }
</style>
<section class="section_list">
    <div class="title">
        <h1>Admin</h1>
    </div>
    <div class="dash-content">
        <div class="overview">
            <div class="user-logo">
                <img src="<?= $CONTENT_URL ?>/Images/client/<?= isset($_SESSION['user']['img_client']) ? $_SESSION['user']['img_client'] : "" ?>" alt="">
            </div>
            <div class="title">
                <span class="text">Dashboard</span>
            </div>
            <div class="boxes">
                <div class="box box1">
                    <span class="text">Role</span>
                    <span class="number">Boss</span>
                </div>
                <div class="box box2">
                    <span class="text">Budget</span>
                    <span class="number">999,999$</span>
                </div>
                <div class="box box3">
                    <span class="text">Client</span>
                    <span class="number">10,120</span>
                </div>
            </div>
        </div>
        <div class="activity">
            <div class="title">
                <span class="text">WORK</span>
            </div>
            <div class="activity-data">
                <div class="data names">
                    <span class="data-title">Company</span>
                    <span class="data-list">Fromsoftware</span>
                    <span class="data-list">Sony Interactive Entertainment</span>
                    <span class="data-list">Naughty Dog</span>
                    <span class="data-list">Santa Monica Studio</span>
                    <span class="data-list">Insomniac Games</span>
                    <span class="data-list">Guerilla Games</span>
                    <span class="data-list">Polyphony Digital</span>
                </div>
                <div class="data email">
                    <span class="data-title">Game</span>
                    <span class="data-list">Sekiro: Shadow Die Twice</span>
                    <span class="data-list">Uncharted</span>
                    <span class="data-list">The Last of Us</span>
                    <span class="data-list">God of War</span>
                    <span class="data-list">Spider-Man</span>
                    <span class="data-list">Horizon Zero Dawn</span>
                    <span class="data-list">Gran Turismo</span>
                </div>
                <div class="data joined">
                    <span class="data-title">Release</span>
                    <span class="data-list">2025-02-12</span>
                    <span class="data-list">2026-02-01</span>
                    <span class="data-list">2026-09-13</span>
                    <span class="data-list">2025-02-13</span>
                    <span class="data-list">2025-07-14</span>
                    <span class="data-list">2024-02-14</span>
                    <span class="data-list">2025-29-15</span>
                </div>
                <div class="data type">
                    <span class="data-title">Console</span>
                    <span class="data-list">PS5</span>
                    <span class="data-list">PS5</span>
                    <span class="data-list">PS5</span>
                    <span class="data-list">PS4</span>
                    <span class="data-list">Xbox</span>
                    <span class="data-list">Xbox</span>
                    <span class="data-list">Nintendo</span>
                </div>
                <div class="data status">
                    <span class="data-title">Version</span>
                    <span class="data-list">New</span>
                    <span class="data-list">Update</span>
                    <span class="data-list">Remake</span>
                    <span class="data-list">Part III</span>
                    <span class="data-list">Part II</span>
                    <span class="data-list">Part II</span>
                    <span class="data-list">Part IV</span>
                </div>
            </div>
        </div>
    </div>
</section>