

<form action="#" method="POST" class="form-contact">

    <div id="contact-info" class="contactBloc">
        <p class="item-info"><?=$persons[$activePerson]["completeName"]?></p>
        <p class="item-info"><?=$persons[$activePerson]["address"]?></p>
        <p class="item-info"><?=$persons[$activePerson]["phoneNumber"]?></p>
        <p class="item-info"><?=$persons[$activePerson]["email"]?></p>
        <a href="#"><img src="https://icongr.am/devicon/linkedin-plain.svg?color=fdd420" alt="Linkedin"></a>
        <a href="#"><img src="https://icongr.am/entypo/pinterest-with-circle.svg?color=fdd420" alt="Pinterest"></a>
        <a href="#"><img src="https://icongr.am/entypo/instagram-with-circle.svg?color=fdd420" alt="Instagram"></a>
    </div>

    <div id="userData" class="contactBloc">
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
    </div>

    <div id="message" class="contactBloc form-group">
        <label for="message">Message*</label>
        <textarea name="message" id="message" rows="7" required></textarea>
    </div>

    <div id="button" class="contactBloc form-btn">
        <button class="btn" type="submit">Envoyer le donut's</button>
    </div>

</form>
