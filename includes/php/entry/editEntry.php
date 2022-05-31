<?php 
    include_once './includes/php/entry/editEntryScript.php';
?>
<section class="view-entry">
    <link rel="stylesheet" href="static/css/entry/edit.css">
    <script src="/includes/js/editEntry.js"></script>
    <div class="diary-history-title">
        <h1>Edit - <?php echo $entryTitle; ?></h1>
    </div>
    <article class="diary-entry">
        <form action="" method="POST" class="update-entry">
            <div class="edit-diary-entry-text">
                <textarea name="edit-diary-entry" rows="4" cols="50"><?php echo $diaryEntry ?></textarea>
            </div>
            <div class="edit-mood-morning">
                <a name="edit-am-entry" onclick="editAMEntry(1)" value="1"><i class="fa-solid fa-face-disappointed fa-2xl"></i></a>
                <a name="edit-am-entry" onclick="editAMEntry(2)" value="2"><i class="fa-solid fa-face-meh fa-2xl"></i></a>
                <a name="edit-am-entry" onclick="editAMEntry(3)" value="3"><i class="fa-solid fa-face-smile-relaxed fa-2xl"></i></a>
            </div>
            <div class="edit-mood-afternoon">
                <a name="edit-pm-entry" onclick="editPMEntry(1)" value="1"><i class="fa-solid fa-face-disappointed fa-2xl"></i></a>
                <a name="edit-pm-entry" onclick="editPMEntry(2)" value="2"><i class="fa-solid fa-face-meh fa-2xl"></i></a>
                <a name="edit-pm-entry" onclick="editPMEntry(3)" value="3"><i class="fa-solid fa-face-smile-relaxed fa-2xl"></i></a>
            </div>
            <div class="edit-diary-submit-container">
                <button name="edit-diary-submit" class="edit-diary-submit" type="submit">edit entry</button>
            </div>
        </form>
    </article>
</section>