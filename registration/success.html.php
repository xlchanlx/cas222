<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portland Historical Tour Reservations</title>
        <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../project.css>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Athlete or Volunteer: <?php echo htmlspecialchars($athleteVolunteer, ENT_QUOTES, 'UTF-8') ?><br>
                  Event DAy: <?php echo htmlspecialchars(($eventDay, ENT_QUOTES, 'utf-8'))
                  Full Name: <?php echo htmlspecialchars($myFName, ENT_QUOTES, 'UTF-8') ?><br>
                  Age: <?php echo htmlspecialchars($myAge, ENT_QUOTES, 'UTF-8') ?><br>
                  Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8') ?><br>
                  Gender: <?php echo htmlspecialchars($myGender, ENT_QUOTES, 'UTF-8') ?><br>
                  Emergency Contact Name: <?php echo htmlspecialchars($contactName, ENT_QUOTES, 'UTF-8') ?><br>
                  Emergency Contact Number: <?php echo htmlspecialchars($contactNumber, ENT_QUOTES, 'UTF-8') ?><br>
                    Emergency Contact Age: <?php echo htmlspecialchars($contactAge, ENT_QUOTES, 'UTF-8') ?><br>
                  Special Accomodations: <?php echo htmlspecialchars($myAccommodations, ENT_QUOTES, 'UTF-8') ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>