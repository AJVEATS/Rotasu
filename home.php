<?php
    session_start();
    include_once 'includes/php/validateUser.php';
    include_once 'includes/php/databaseConnection.php';
    include_once 'includes/php/welcomeMessage.php';
    include_once 'includes/php/diaryEntry.php';
    include_once 'static/templates/htmlHeader.php';
?>
    <title><?php echo $_SESSION["user_name"] ?>'s homepage</title>
    <link rel="stylesheet" href="static/css/home.css">
    <script src="/includes/js/dairy.js"></script>
</head>
<body>
    <?php include_once 'static/templates/navBar.php'; ?>
    <main>
        <section class="welcome-message">
            <p><?php echo $welcomeMessage; ?></p>
        </section>
        <form action="" method="POST"  class="your-day">
            <div class="your-day-question">
                <p>How did you feel this morning?</p>
            </div>
            <div class="your-morning">
                <a name="am-entry" onclick="saveAMEntry(1)" value="1"><i class="fa-solid fa-face-disappointed fa-2xl"></i></a>
                <a name="am-entry" onclick="saveAMEntry(2)" value="2"><i class="fa-solid fa-face-meh fa-2xl"></i></a>
                <a name="am-entry" onclick="saveAMEntry(3)" value="3"><i class="fa-solid fa-face-smile-relaxed fa-2xl"></i></a>
            </div>
            <div class="your-day-question">
                <p>How did you feel this afternoon?</p>
            </div>
            <div class="your-afternoon">
                <a name="pm-entry" onclick="savePMEntry(1)" value="1"><i class="fa-solid fa-face-disappointed fa-2xl"></i></a>
                <a name="pm-entry" onclick="savePMEntry(2)" value="2"><i class="fa-solid fa-face-meh fa-2xl"></i></a>
                <a name="pm-entry" onclick="savePMEntry(3)" value="3"><i class="fa-solid fa-face-smile-relaxed fa-2xl"></i></a>
            </div>
            <div class="your-day-question">
                <p>Tell me more about your day</p>
            </div>
            <div class="your-day">
                <textarea name="diary-entry" rows="4" cols="50"></textarea>
            </div>
            <button name="diary-submit" class="diary-submit" type="submit">save entry</button>
        </form>
    </main>
</body>

</html>