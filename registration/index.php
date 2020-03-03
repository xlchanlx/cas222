<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
include '../includes/db.inc.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['fullName'])) {
    $myFName = $_POST['fullName'];
    $myEventDay = $_POST['eventDAy'];
    $athleteVolunteer = $_POST['athleteVolunteer'];
    $myAge = $_POST['age'];
    $myEmail = $_POST['email'];
    $myGender = $_POST['gender'];
    $myContactName = $_POST['contactName'];
    $myContactNumber = $_POST['contactNumber'];
    $myContactAge = $_POST['contactAge'];
    $myAccommodations = $_POST['accommodations'];


    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try
    {
        $sql = 'INSERT INTO registration SET
          eventDay = :eventDay,
          fullName = :fullName,
          eventVolunteer = :eventVolunteer,
          age = :age,
          email = :email,
          gender = :gender, 
          contactName = :contactName,
          contactNumber = :contactNumber,
          contactAge = :contactAge,
          accommodations = :accommodations';

        $s = $pdo->prepare($sql);
        $s->bindValue(':eventDay', $myEventDay);
        $s->bindValue(':fullName', $myFName);
        $s->bindValue(':athleteVolunteer', $athleteVolunteer);
        $s->bindValue(':age', $myAge);
        $s->bindValue(':email', $myEmail);
        $s->bindValue(':gender', $myGender);
        $s->bindValue(':contactName', $myContactName);
        $s->bindValue(':contactNumber', $myContactNumber);
        $s->bindValue(':contactAge', $myContactAge);
        $s->bindValue(':accommodations', $myAccommodations);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
} else {
    include 'registrations.html.php'; //Modify this to include the initial file for this folder
}