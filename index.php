<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Adrien MAILLARD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <?php include 'data.php' ?>

    <header>
    </header>

    <div class="afterNavbar"></div>
    <div class="smallNavbar">
        <?php include 'navbar.php' ?>
    </div>


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

        <section id="portfolio">
            <h2>Expérimenté</h2>
            <div class="content">
                <?php include 'experience.php' ?>
            </div>
        </section>

        <section id="academic">
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


                    <div class="contact-info">
                        <p class="item-info">Bernard Gumble</p>
                        <p class="item-info">69 rue de la soif - Springfield</p>
                        <p class="item-info">06.06.06.06.06</p>
                        <p class="item-info">Gumble@springfield.com</p>
                        <a href="#"><img src="https://icongr.am/devicon/linkedin-plain.svg?color=fdd420" alt="Linkedin"></a>
                        <a href="#"><img src="https://icongr.am/entypo/pinterest-with-circle.svg?color=fdd420" alt="Pinteres"></a>
                        <a href="#"><img src="https://icongr.am/entypo/instagram-with-circle.svg?color=fdd420" alt="Instagram"></a>
                    </div>
                    <form action="#" method="POST" class="form-contact">
                        <div class="form-group">
                            <label for="name">Nom ou entreprise*</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet*</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message*</label>
                            <textarea name="message" id="message" rows="7" required></textarea>
                        </div>
                        <div class="form-btn">
                            <button class="btn" type="submit">Envoyer le donut's</button>
                        </div>
                    </form>









            </div>
        </section>

    </main>

    <footer>
    </footer>


</body>

</html>
