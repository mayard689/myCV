<?php require 'data.php' ?>
<?php require 'tools.php' ?>

<?php
    $activePersonName="barney";
    if (isset($_GET["name"])) {
        if (array_key_exists(strtolower($_GET["name"]), $persons)) {
            $activePersonName=$_GET["name"];
        }
    }

    $activePersonData=$persons[$activePersonName];
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?php $persons[$activePersonName]["completeName"]?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?= $persons[$activePersonName]["stylesheet"]?>/style.css" title="Auto" />
        <link rel="alternate stylesheet" type="text/css" href="cssBarney/style.css" title="Barney" />
        <link rel="alternate stylesheet" type="text/css" href="cssAdrien/style.css" title="Adrien" />
    </head>

    <body>

        <header>

            <nav class="smallNavbar">
                <?php include 'navbar.php' ?>
            </nav>

        </header>

        <main>

            <h1><?=$persons[$activePersonName]["completeName"]?></h1>

            <section id="whoami">
                <h2><?=$persons[$activePersonName]["sectionsNames"]["whoami"]?></h2>
                <div class="content">
                    <?php include 'whoami.php' ?>
                </div>
            </section>

            <section id="skills">
                <h2><?=$persons[$activePersonName]["sectionsNames"]["skills"]?></h2>
                <div class="content">
                    <?php include 'skills.php' ?>
                </div>
            </section>

            <section id="achievments">
                <h2><?=$persons[$activePersonName]["sectionsNames"]["achievments"]?></h2>
                <div class="content">
                    <?php include 'experience.php' ?>
                </div>
            </section>

            <section id="education">
                <h2><?=$persons[$activePersonName]["sectionsNames"]["education"]?></h2>
                <div class="content">
                    <?php include 'academic.php' ?>
                </div>
            </section>

            <section id="various">
                <h2><?=$persons[$activePersonName]["sectionsNames"]["various"]?></h2>
                <div class="content">
                    <?php include 'various.php' ?>
                </div>
            </section>

            <section id="contact">
                <h2><?=$persons[$activePersonName]["sectionsNames"]["contact"]?></h2>
                <div class="content">
                    <?php include 'contact.php' ?>
                </div>
            </section>

        </main>

        <footer>
        </footer>


    </body>

</html>
