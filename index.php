<?php require 'includes/header.php'; ?>

<header class="header">
    <?php require 'includes/navigation.php'; ?>
</header>

<div class="hero">
    <h1 class="hero-title">Lieke<br>van Vegchel</h1>
    <img class="hero-image" src="images/foto3.jpg">
</div>

<div class="wrapper">

    <div class="intro">
        <h2 class="intro-title">Hallo! Welkom op mijn portfolio.</h2>
        <p class="intro-text">Hier kun je een aantal projecten vinden die ik heb gedaan.</p>

        <a href="files/cv.pdf" target="_blank" class="link-cv">
            <p class="link-cv-p">Bekijk hier mijn CV</p>
        </a>


    </div>

    <div class="projects" id="projecten">
        <div class="project-item">

            <div class="image">
                <a class="project-link" href="pictures-manu.php">
                    <img src="images/DSC_0063.jpg" class="project-image">
                </a>
            </div>

            <div class="project-content">
                <a href="pictures-manu.php">
                    <h3 class="project-title">
                        Foto's Manu
                    </h3>
                </a>
                <p>
                    Voor onze mediacampagne voor Manu met als uitgangspunt "dat ene moment", ben ik productfoto's gaan maken.
                    Alle foto's die hier te zien zijn heb ik zelf geschoten, geselecteerd en bewerkt in Adobe Lightroom.
                </p>
            </div>
        </div>


        <div class="project-item project-item-invert">

            <div class="image">
                <a class="project-link" href="inspiratieboek-manu.php">
                    <img src="images/inspiratieboek-cover.jpg" class="project-image project-image-invert">
                </a>
            </div>
                <div class="project-content">
                    <a href="inspiratieboek-manu.php">
                        <h3 class="project-title">
                            Inspiratieboek Manu
                        </h3>
                    </a>
                <p class="project-text">
                    Voor onze mediacampagne voor Manu met als uitgangspunt "dat ene moment", heb ik een inspiratieboek gemaakt. Dit inspiratieboek moet de doelgroep kennis laten maken met de producten van Manu, zonder dat ze de producten zelf aan hoeven te schaffen. Hiermee proberen we de drempel te verlagen om de producten te kopen.
                </p>
            </div>
        </div>

        <div class="project-item">

            <div class="image">
                <a class="project-link" href="zelfportret.php">
                    <img src="images/ChillHighlightTitel.jpg" class="project-image">
                </a>
            </div>

            <div class="project-content">
                <a href="zelfportret.php">
                    <h3 class="project-title">
                        Moodboard
                    </h3>
                </a>
                <p>
                    Deze opdracht stond in het teken van een deel van mezelf laten zien. Dit heb ik gedaan door middel van dit letterlijke moodboard.
                </p>
            </div>
        </div>

        <div class="project-item project-item-invert">

            <div class="image">
                <a class="project-link" href="fotoseries.php">
                    <img src="images/fotoserie1-foto1.jpg" class="project-image project-image-invert">
                </a>
            </div>

            <div class="project-content">
                <a href="fotoseries.php">
                    <h3 class="project-title">
                        Fotoseries architectuur
                    </h3>
                </a>
                <p class="project-text">
                    Deze fotoseries heb ik gemaakt in Eindhoven als opdracht voor school.
                </p>
            </div>
        </div>

        <div class="project-item">

            <div class="image">
                <a class="project-link" href="drone-adventure-one.php">
                    <img src="images/drone-shot.png" class="project-image">
                </a>
            </div>

            <div class="project-content">
                <a href="drone-adventure-one.php">
                    <h3 class="project-title">
                        Drone adventure
                    </h3>
                </a>
                <p>
                    In mijn vrije tijd houd ik me regelmatig bezig met film en fotografie. Zie hier het resultaat van een van deze sessies.
                </p>
            </div>
        </div>

        <div class="project-item project-item-invert">

            <div class="image">
                <a class="project-link" href="photoshop.php">
                    <img src="images/preekstoel3-2.jpg" class="project-image project-image-invert">
                </a>
            </div>

            <div class="project-content">
                <a href="photoshop.php">
                    <h3 class="project-title">
                        Photoshop
                    </h3>
                </a>
                <p class="project-text">
                    Niet alle foto’s worden altijd precies zoals je dat graag zou willen. Gelukkig bestaat er zoiets als Photoshop! Zie hier een van mijn kleine experimenten.
                </p>
            </div>
        </div>

        <div class="project-item">

            <div class="image">
                <a class="project-link" href="weer.php">
                    <img src="images/weerapp-portrait.png" class="project-image">
                </a>
            </div>

            <div class="project-content">
                <a href="weer.php">
                    <h3 class="project-title">
                        Weer app
                    </h3>
                </a>
                <p>
                    Bij deze opdracht heb ik gebruik gemaakt van een API.
                    Ik heb mijn eigen weer app gemaakt.
                </p>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $("#projects").click(function() {
        $('html, body').animate({
            scrollTop: $("#projecten").offset().top
        }, 2000);
    });
</script>

<?php require 'includes/footer.php'; ?>