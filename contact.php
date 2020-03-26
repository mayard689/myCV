

<?php $contactErrorMessage='';

if($_SERVER['REQUEST_METHOD']==="POST") {
    $contactErrorMessages=checkDataFromContactForm($activePersonData["contact"]);
    $messageContent=$_POST["message"];

    foreach ($contactErrorMessages as $mistakenField => $mistakesList){
        foreach ($mistakesList as $mistake) {/**/
            $contactErrorMessage.=$mistake."</br>";
        }
    }

    if(!empty($contactErrorMessage)){ ?>
        <div class="contactErrorMessage"><?=$contactErrorMessage ?? ''?></div>
    <?php }else{
        $contactMessageAnswer="Bonjour, j'ai bien bien pris connaissance de votre message '".htmlentities($_POST["message"])."'. Je vous contacterai des que je serai décemment capable de le faire. "?>
        <div class="contactMessageAnswer"><?=$contactMessageAnswer ?? ''?></div>
        <?php /*header('Location: index.php')*/ ?>
    <?php } ?>

<?php } ?>



<form action="#contact" method="POST" class="form-contact">

    <div id="contact-info" class="contactBloc">
        <p class="item-info"><?=$persons[$activePersonName]["completeName"]?></p>
        <p class="item-info"><?=$persons[$activePersonName]["address"]?></p>
        <p class="item-info"><?=$persons[$activePersonName]["phoneNumber"]?></p>
        <p class="item-info"><?=$persons[$activePersonName]["email"]?></p>
        <a href="#"><img src="https://icongr.am/devicon/linkedin-plain.svg?color=fdd420" alt="Linkedin"></a>
        <a href="#"><img src="https://icongr.am/entypo/pinterest-with-circle.svg?color=fdd420" alt="Pinterest"></a>
        <a href="#"><img src="https://icongr.am/entypo/instagram-with-circle.svg?color=fdd420" alt="Instagram"></a>
    </div>

    <div id="userData" class="contactBloc">

        <?php foreach ($activePersonData["contact"] as $inputName => $inputProperties) {
            $inputProperties=checkDataBeforeFormIntegration($inputName, $inputProperties);
            $activePersonData["contact"]=$inputProperties;

            if (!is_null($inputProperties)) {?>

                <div class="form-group">
                    <label
                        for="<?= $inputProperties["fieldName"] ?>"><?= $inputName ?><?= !empty($inputProperties["mandatory"]) ? '*' : '' ?></label>
                    <input type="<?= $inputProperties["type"] ?>" placeholder="<?= $inputProperties["placeholder"]??'' ?>"
                           value="<?= $inputProperties["value"] ?? '' ?>" id="<?= $inputProperties["fieldName"] ?>"
                           name="<?= $inputProperties["fieldName"] ?>" <?= !empty($inputProperties["mandatory"]) ? 'required' : '' ?>>
                </div>

            <?php }
        } ?>


    </div>

    <div id="message" class="contactBloc form-group">
        <label for="message">Message*</label>
        <textarea name="message" id="message" rows="7" required><?=$messageContent ?? '' ?></textarea>

    </div>

    <div id="button" class="contactBloc form-btn">
        <button class="btn" type="submit">Envoyer le donut's</button>
    </div>

</form>
