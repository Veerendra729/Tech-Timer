<?php
include('config.php');
     $from = $_POST['from'];
     $to = $_POST['to'];
     $duration = $_POST['duration'];
     $project = $_POST['project'];
     $activty = $_POST['activity'];
     $description = $_POST['description'];
     $tags = $_POST['tags'];

     $sql = "INSERT INTO times (Fromt,Tot,Duration,Project,Description,Tags,Activity)
     VALUES ('$from','$to','$duration','$project','$description','$tags','$activty')";
     if (mysqli_query($link, $sql)) {
        header("Location: test-time.php"); /* Redirect browser */
        exit();
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
    mysqli_close($link);
?>