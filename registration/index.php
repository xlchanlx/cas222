<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
include '../includes/db.inc.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
    $eventDay = $_POST['eventDay'];
    $athleteVolunteer = $_POST['athleteVolunteer'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contactName = $_POST['contactName'];
    $contactNumber = $_POST['contactNumber'];
    $contactAge = $_POST['contactAge'];
    $accommodations = $_POST['accommodations'];

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try
    {
        $sql = 'INSERT INTO registration SET
          eventDay = :eventDay,
          fullName = :fullName,
          athleteVolunteer = :athleteVolunteer,
          age = :age,
          email = :email,
          gender = :gender, 
          contactName = :contactName,
          contactNumber = :contactNumber,
          contactAge = :contactAge,
          accommodations = :accommodations';

        $s = $pdo->prepare($sql);
        $s->bindValue(':eventDay', $eventDay);
        $s->bindValue(':athleteVolunteer', $athleteVolunteer);
        $s->bindValue(':fullName', $fullName);
        $s->bindValue(':age', $age);
        $s->bindValue(':email', $email);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':contactName', $contactName);
        $s->bindValue(':contactNumber', $contactNumber);
        $s->bindValue(':contactAge', $contactAge);
        $s->bindValue(':accommodations', $accommodations);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'registration_success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    } else {
    include 'registrations.html.php'; //Modify this to include the initial file for this folder
    }?>