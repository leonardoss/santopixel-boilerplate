<!DOCTYPE html>
<html lang="pt-br">
<?php include '../includes/_head.php'; ?>

<body class="home">
<div class="all">

<!-- HEADER -->
    <?php include '../includes/_header.php'; ?>

    <div class="container-nav">
    <!-- NAV -->
        <?php include '../includes/_nav.php'; ?>

    <!-- DBR -->
        <div class="box-logo-dbr hidden-xs hidden-sm">
            <a href="http://dbr.ag" target="_blank"><span class="svg-dbr-desk" data-icon-name="logodbr"></span></a>
        </div>  
    </div>

<!-- MAIN -->
    <section class="section-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-11 col-md-offset-1">
                    <!-- SLIDER AVISOS -->
                    <?php include '../includes/_slider.php'; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-7 col-md-offset-1">
                    
                    <?php include '../includes/_publisher.php'; ?>

                    <div class="box-feed">
                        <div class="feed-label">
                            <i class="icon-a icon-big-world-globe"></i>
                            <span>Timeline</span>
                            <i class="icon-b icon-download-12"></i>
                        </div>
                        <?php include '../includes/_feed.php'; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 hidden-xs hidden-sm">
                    <div class="sticky">
                        <!-- ANIVERSARIOS -->
                        <?php include '../includes/_bithday.php'; ?>

                        <!-- LINKS -->
                        <?php include '../includes/_links.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
    <script type="text/javascript">
        var  themeFolder = '../',
        ajax_url = "/",
        searchResults = [
        {
            value: "Edu Ferreira",
            label: "Edu Ferreira",
            img: "<img src='../images/@temp/person.png' />",
            setor: "Recursos Humanos",
            ramal: "Ramal 456"
        },
        {
            value: "Eduarda Alves Ferreira",
            label: "Eduarda Alves Ferreira",
            img: "<img src='../images/@temp/person.png' />",
            setor: "Almoxarifado",
            ramal: "Ramal 256"
        },
        {
            value: "Carlos Alberto Silva da Silva",
            label: "Carlos Alberto Silva da Silva",
            img: "<img src='../images/@temp/person.png' />",
            setor: "Núcleo Digital de TI",
            ramal: "Ramal 213"
        },
        {
            value: "Andriy Schevchenko Silva",
            label: "Andriy Schevchenko Silva",
            img: "<img src='../images/@temp/person.png' />",
            setor: "Almoxarifado",
            ramal: "Ramal 000"
        }
    ];
    </script>
    
    <script type="text/javascript" src="../scripts/site.js"></script>
</body>
</html>
