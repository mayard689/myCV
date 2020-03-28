<?php

    $diplomas=$persons[$activePersonName]["education"];
    foreach ($diplomas as $diploma => $diplomaData) { ?>

        <DIV class="diploma">
            <h3><?=$diploma?></h3>

            <DIV class="diplomaData">
                <?php foreach ($diplomaData as $data => $value) { ?>

                    <DIV class="<?='diploma_'.$data?>">

                        <?php if (!is_array($value)) {
                            echo $value;
                        } else{

                            foreach ($value as $detail){ ?>
                                <DIV class="diploma_detail"><?=$detail?></DIV>
                            <?php }

                        }?>


                    </DIV>

                <?php } ?>
            </DIV>

        </DIV>

    <?php } ?>