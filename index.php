<?php include 'data.php' ?>

<?php
$activePerson="adrien";
if (isset($_GET["name"])) {
    if (strtolower($_GET["name"])=="barney") {
        $activePerson="barney";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?php $persons[$activePerson]["completeName"]?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?= $persons[$activePerson]["stylesheet"]?>/style.css" title="Auto" />
        <link rel="alternate stylesheet" type="text/css" href="cssBarney/style.css" title="Barney" />
        <link rel="alternate stylesheet" type="text/css" href="cssAdrien/style.css" title="Adrien" />
    </head>

    <body>

        <header style="overflow:visible">
        </header>

            <div class="afterNavbar"></div>
            <nav class="smallNavbar">
                <?php include 'navbar.php' ?>
            </nav>



        <main>

            <h1><?=$persons[$activePerson]["completeName"]?></h1>

            <section id="whoami">
                <h2><?=$persons[$activePerson]["sectionsNames"]["whoami"]?></h2>
                <div class="content">
                    <?php include 'whoami.php' ?>
                </div>
            </section>

            <section id="skills">
                <h2><?=$persons[$activePerson]["sectionsNames"]["skills"]?></h2>
                <div class="content">
                    <?php include 'skills.php' ?>
                </div>
            </section>

            <section id="achievments">
                <h2><?=$persons[$activePerson]["sectionsNames"]["achievments"]?></h2>
                <div class="content">
                    <?php include 'experience.php' ?>
                </div>
            </section>

            <section id="education">
                <h2><?=$persons[$activePerson]["sectionsNames"]["education"]?></h2>
                <div class="content">
                    <?php include 'academic.php' ?>
                </div>
            </section>

            <section id="various">
                <h2><?=$persons[$activePerson]["sectionsNames"]["various"]?></h2>
                <div class="content">
                    <?php include 'various.php' ?>
                </div>
            </section>

            <section id="contact">
                <h2><?=$persons[$activePerson]["sectionsNames"]["contact"]?></h2>
                <div class="content">
                    <?php include 'contact.php' ?>
                </div>
            </section>

        </main>

        <footer>
        </footer>


    </body>

</html>
