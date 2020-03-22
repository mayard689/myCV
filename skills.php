<?php
    $skillsFamilies=$persons[$activePerson]["skills"];
    foreach ($skillsFamilies as $skillFamilyName => $skillFamily) { ?>

    <DIV class="skillFamily">
        <h3><?=$skillFamilyName?></h3>

        <DIV class="skillList">
        <?php foreach ($skillFamily as $skillName => $skillData) { ?>
            <article class="skill">
                <h4><?=$skillName?></h4>

                <DIV class="skillDataList">
                <?php foreach ($skillData as $data => $value) {?>
                        <DIV class="<?=$data?>">
                            <?=$value?>
                        </DIV>
                <?php } ?>
                </DIV>

            </article>
        <?php } ?>
        </DIV>

    </DIV>

<?php } ?>