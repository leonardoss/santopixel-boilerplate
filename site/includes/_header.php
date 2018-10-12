<header class="header">
    <h1 class="logo"><img src="../images/almap.png" alt="Almap - Intranet" /></h1>
    <div class="header-container">
        <div class="header-container-menu">
            <!-- PROFILE -->
            <?php include '../includes/_profile.php'; ?>

            <!-- NAV -->
            <?php include '../includes/_nav.php'; ?>

            <!-- ANIVERSARIOS -->
            <?php include '../includes/_bithday.php'; ?>

            <!-- LINKS -->
            <?php include '../includes/_links.php'; ?>

            <!-- DBR -->
            <div class="box-logo-dbr  hidden-md hidden-lg">
                <a href="http://dbr.ag" target="_blank"><span class="svg-dbr-mobo" data-icon-name="logodbr"></span></a>
            </div>

        </div>
        <div class="header-btns">
            <button class="btn btn-icon btn-toggle-menu hidden-md hidden-lg"><i class="icon-menu-1"></i></button>
            <button class="btn btn-icon btn-toggle-search hidden-md hidden-lg"><i class="icon-magnifying-glass"></i></button>
            <!-- <button class="btn btn-icon btn-notification btn-notification-has-notification btn-trigger-notifications"><i class="icon-notification-bell"></i><span class="has-notification"></span></button> -->
            <button class="btn btn-icon btn-notification btn-trigger-notifications"><i class="icon-notification-bell"></i><span class="has-notification"></span></button>
            <div class="box-notifications" id="box-notifications">
                <div class="box-notifications-internal">
                    <div class="box-notifications-header">
                        <h6>NOTIFICAÇÕES</h6>
                    </div>
                    <div class="box-notifications-body"></div>
                </div>
            </div>
        </div>
        <!-- SEARCH -->
        <?php include '../includes/_search.php'; ?>
    </div>
</header>