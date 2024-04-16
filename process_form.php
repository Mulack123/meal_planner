<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $mealMon = $_POST["mealMon"];
    $commentsMon = $_POST["commentsMon"];
    $dateMon = $_POST["dateMon"];

    $mealTues = $_POST["mealTues"];
    $commentsTues = $_POST["commentsTues"];
    $dateTues = $_POST["dateTues"];

    $mealWed = $_POST["mealWed"];
    $commentsWed = $_POST["commentsWed"];
    $dateWed = $_POST["dateWed"];

    $mealThur = $_POST["mealThur"];
    $commentsThur = $_POST["commentsThur"];
    $dateThur = $_POST["dateThur"];

    $mealFri = $_POST["mealFri"];
    $commentsFri = $_POST["commentsFri"];
    $dateFri = $_POST["dateFri"];

    $mealSat = $_POST["mealSat"];
    $commentsSat = $_POST["commentsSat"];
    $dateSat = $_POST["dateSat"];

    $mealSun = $_POST["mealSun"];
    $commentsSun = $_POST["commentsSun"];
    $dateSun = $_POST["dateSun"];


    $monArray = array($dateMon, "Monday", $mealMon, $commentsMon);
    $tuesArray = array($dateTues, "Tuesday", $mealTues, $commentsTues);
    $wedArray = array($dateWed, "Wednesday", $mealWed, $commentsWed);
    $thurArray = array($dateThur,"Thursday", $mealThur, $commentsThur);
    $friArray = array($dateFri, "Friday", $mealFri, $commentsFri);
    $satArray = array($dateSat, "Saturday", $mealSat, $commentsSat);
    $sunArray = array($dateSun, "Sunday", $mealSun, $commentsSun);

    // CSV file path
    $csvFile = 'data.csv';

    // Open the CSV file in append mode
    $file = fopen($csvFile, 'a');

    // Write form data to CSV file
    fputcsv($file, $monArray);
    fputcsv($file, $tuesArray);
    fputcsv($file, $wedArray);
    fputcsv($file, $thurArray);
    fputcsv($file, $friArray);
    fputcsv($file, $satArray);
    fputcsv($file, $sunArray);

    // Close the file
    fclose($file);

    // Redirect back to the form page
    header("Location: index.html");
    exit();
}
