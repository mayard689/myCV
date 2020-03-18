<?php foreach ($skills as $skillType => $skillTab) { ?>

    <DIV class="skillSet">

        <h3><?=$skillType?></h3>

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