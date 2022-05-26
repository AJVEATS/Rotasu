<?php ?>
<section class="view-entry">
    <link rel="stylesheet" href="static/css/entry/view.css">
    <div class="diary-history-title">
        <h1>Your Diary Entry History</h1>
    </div>
    <article class="diary-entry">
        <div class="diary-entry-title">
            <div class="diary-entry-date">
                <p><?php echo $entryTitle; ?>
            </div>
        </div>
        <div class="diary-entry-text">
            <p><?php echo $diaryEntry; ?></p>
        </div>
        <div class="diary-entry-mood">
            <div class="diary-entry-mood-am">
                <?php echo $amEntryHTML; ?>
            </div>
            <div class="diary-entry-mood-pm">

            </div>
        </div>
    </article>
</section>