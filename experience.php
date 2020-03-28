
<DIV class="calendar">

    <?php foreach ($persons[$activePersonName]["jobs"] as $job) { ?>


            <?php
                $max=strtotime($calendarMax);
                $min=strtotime($calendarMin);
                $start=strtotime($job['startDate']);
                $end=strtotime($job['endDate']);

                $left=100*($start-$min)/($max-$min);
                $width=100*($end-$start)/($max-$min);
            ?>
            <DIV class="job" style="left: <?=$left?>%; width: <?=$width?>%;">
                <h3 class="jobName"><?=$job['name']?></h3>
                <DIV class="jobCompany"><?=$job['company']?></DIV>
                <DIV class="jobResults"><?=$job['results']?></DIV>
                <DIV class="jobStart"><?=$job['startDate']?></DIV>
            </DIV>



    <?php } ?>

</DIV>
