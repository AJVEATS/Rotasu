<?php ?>
<section class="view-entry">
    <link rel="stylesheet" href="static/css/entry/view.css">
    <div class="diary-history-title">
        <h1><?php echo $entryTitle; ?></h1>
    </div>
    <article class="diary-entry">
        <div class="diary-entry-title">
            <div class="diary-entry-date">
                <!-- <p><?php echo $entryTitle; ?></p> -->
            </div>
        </div>
        <div class="diary-entry-text">
            <p><?php echo $diaryEntry; ?></p>
        </div>
        <div class="diary-entry-mood">
            <div class="diary-entry-mood-am">
                <p>In the morning you felt: <?php echo $amEntryHTML; ?></p>
            </div>
            <div class="diary-entry-mood-pm">
                <p>In the evening you felt: <?php echo $pmEntryHTML; ?></p>
            </div>
        </div>
        </div>
    </article>
</section>