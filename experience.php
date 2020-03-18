
<DIV class="calendar">

    <?php foreach ($jobs as $job) { ?>
        <article class="calendarElement">

            <?php
                $max=strtotime($calendarMax);
                $min=strtotime($calendarMin);
                $start=strtotime($job['startDate']);
                $end=strtotime($job['endDate']);

                $left=100*($start-$min)/($max-$min);
                $width=100*($end-$start)/($max-$min);
            ?>
            <DIV class="job" style="left: <?=$left?>%; width: <?=$width?>%;">
                <DIV class="jobName"><?=$job['name']?></DIV>
                <DIV class="jobCompany"><?=$job['company']?></DIV>
                <DIV class="jobResults"><?=$job['results']?></DIV>
            </DIV>


        </article>
    <?php } ?>

</DIV>
