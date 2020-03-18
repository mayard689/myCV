<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Adrien MAILLARD</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cssAdrien/style.css" title="Adrien" />
        <link rel="alternate stylesheet" type="text/css" href="cssBarney/style.css" title="Barney" />
    </head>

    <body>

        <?php include 'data.php' ?>

        <header style="overflow:visible">
        </header>

            <div class="afterNavbar"></div>
            <nav class="smallNavbar">
                <?php include 'navbar.php' ?>
            </nav>



        <main>

            <section id="whoami">
                <h2>Qui suis je ?</h2>
                <div class="content">
                    <?php include 'whoami.php' ?>
                </div>
            </section>

            <section id="skills">
                <h2>Compétent</h2>
                <div class="content">
                    <?php include 'skills.php' ?>
                </div>
            </section>

            <section id="achievments">
                <h2>Expérimenté</h2>
                <div class="content">
                    <?php include 'experience.php' ?>
                </div>
            </section>

            <section id="education">
                <h2>Formé</h2>
                <div class="content">
                    <?php include 'academic.php' ?>
                </div>
            </section>

            <section id="various">
                <h2>Ouvert</h2>
                <div class="content">
                    <?php include 'various.php' ?>
                </div>
            </section>

            <section id="contact">
                <h2>Contactez moi</h2>
                <div class="content">
                    <?php include 'contact.php' ?>
                </div>
            </section>

        </main>

        <footer>
        </footer>


    </body>

</html>
