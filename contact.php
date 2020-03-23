

<form action="#" method="POST" class="form-contact">

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
        <!--
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
        -->

        <?php foreach ($activePersonData["contact"] as $inputName => $inputProperties) {
            $formCheckedData=htmlCheckedDataFormat([
                "name"=> $inputName,
                "mandatory" =>$inputProperties["mandatory"],
                "type" => $inputProperties["type"],
                "placeholder" => $inputProperties["placeholder"],
                "value" => $inputProperties["value"]
            ]);

            if (!is_null($formCheckedData)) {?>

                <div class="form-group">
                    <label
                        for="<?= $formCheckedData["withoutSpace_name"] ?>"><?= $formCheckedData["name"] ?><?= $formCheckedData["mandatory"] ? '*' : '' ?></label>
                    <input type="<?= $formCheckedData["type"] ?>" placeholder="<?= $formCheckedData["placeholder"] ?>"
                           value="<?= $formCheckedData["value"] ?>" id="<?= $formCheckedData["withoutSpace_name"] ?>"
                           name="<?= $formCheckedData["withoutSpace_name"] ?>" <?= $formCheckedData["mandatory"] ? 'required' : '' ?>>
                </div>

            <?php }
        } ?>


    </div>

    <?php
    /**$adrienContactForm=[
    "Nom ou Entreprise"=> [
    "type" => "text",
    "placeholder" => "",
    "value" => "",
    "mandatory" => true
    ],

    "Email"=> [
    "type" => "email",
    "placeholder" => "",
    "value" => "",
    "mandatory" => true
    ],

    "Sujet"=> [
    "type" => "text",
    "placeholder" => "",
    "value" => "",
    "mandatory" => true
    ],
    ];*/
    ?>





    <div id="message" class="contactBloc form-group">
        <label for="message">Message*</label>
        <textarea name="message" id="message" rows="7" required></textarea>
    </div>

    <div id="button" class="contactBloc form-btn">
        <button class="btn" type="submit">Envoyer le donut's</button>
    </div>

</form>
