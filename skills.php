<?php foreach ($skills as $skillFamilly => $skillTab) { ?>

    <DIV class="skillSet">

        <h3><?=$skillFamilly?></h3>

        <DIV class="skillList">
        <?php foreach ($skillTab as $skill) { ?>
            <article class="skill">
            <?php foreach ($skill as $key => $value) {?>

                    <DIV class="<?=$key?>">
                        <?=$value?>
                    </DIV>

            <?php } ?>
            </article>
        <?php } ?>
        </DIV>
    </DIV>

<?php } ?>