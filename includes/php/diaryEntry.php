<?php 

    include_once './databaseConnection.php';

    if (isset($_POST['diary-submit'])) {

        $image = $_FILES['image'];

        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $imageError = $_FILES['image']['error'];
        $imageType = $_FILES['image']['type'];

        $imageExtension = explode('.', $imageName);
        $imageActualExtension = strtolower(end($imageExtension));

        $allowed = array('jpg', 'jpeg', 'png', 'svg');

        if (in_array($imageActualExtension, $allowed)) {
            if ($imageError === 0) {
                if ($imageSize < 500000) {
                    $imageNameFormatted = uniqid('', true).".".$imageActualExtension;

                    $imageDestination = '../../uploads/'.$imageNameFormatted;

                    move_uploaded_file($imageTmpName, $imageDestination);

                    // header("Location: home.php?upload_worked");
                } else {
                    echo "<script type='text/javascript'>alert('Your image is too large 😮');</script>";
                    // echo "Your image is too large 😮";
                }
            } else {
                echo "<script type='text/javascript'>alert('There was an error uploading your image 😔');</script>";
                // echo "There was an error uploading your image 😔";
            }
        } else {
            echo "<script type='text/javascript'>alert('The file needs to be an image 🥺');</script>";
            // echo "The file needs to be an image 🥺";
        }

        $userID = $_COOKIE['user_id'];
        if (isset($_COOKIE['amEntry'])) {
            $amEntry = $_COOKIE['amEntry'];
        } else {
            $amEntry = 0;
        }
        
        if (isset($_COOKIE['pmEntry'])){
            $pmEntry = $_COOKIE['pmEntry'];
        } else {
            $pmEntry = 0;
        }
        
        if ($_POST['diary-entry'] == "") {
            $diaryEntry = "No diary entry for today";
        } else {
            $diaryEntry = $_POST['diary-entry'];
        }

        $entryDateTime = date("Y-m-d");

        $diary_entry_create = "INSERT INTO user_entries_tbl(user_id, entry_time, am_entry, pm_entry, diary_entry) VALUES ('$userID', '$entryDateTime', '$amEntry', '$pmEntry', '$diaryEntry');";

        if (mysqli_query($connection, $diary_entry_create)) {
            unset($_COOKIE['amEntry']);
            unset($_COOKIE['pmEntry']);

            setcookie('amEntry', null, -1, '/'); 
            setcookie('pmEntry', null, -1, '/'); 

            header('Location: ../../home.php');
        }
    }
?>