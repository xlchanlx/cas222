<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Chan Saechao">
    <base target="_blank"> <!-- open all links not marked "_self" in a new tab -->
    <title>Ace in the Hole Multisport Events :: Registration</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/style.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
</head>

<header class="header">
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

    <h1 id="logo">Ace in the Hole Multisport Events</h1>

    <ul class="menu">
        <li><a href="/cas222/home/index.php" target="_self">Home</a></li>
        <li><a href="/cas222/event/index.php" target="_self">Event</a></li>
        <li><a href="/cas222/gallery/index.php" target="_self">Gallery</a></li>
        <li><a href="/cas222/registration/index.php" target="_self">Registration</a></li>
        <li><a href="/cas222/contact/index.php" target="_self">Contact</a></li>
    </ul>

</header>

<body>
        <main class="main" id="wrapper">
            <h1>Register Today</h1>
            <br><br><br>

            <div>
                <h2>REGISTRATION</h2><br>
                <strong>Long Course</strong><br>
                $240<br>
                <strong>Olympic</strong><br>
                $110<br>
                10K<br>
                $50<br>
                <strong>Half Marathon</strong><br>
                $75<br>
                <strong>Sprint</strong><br>
                $90<br>
                <strong>Try-a-Tri</strong><br>
                $65<br><br>

                Cost Includes<br><br>

                Food & Beer<br>
                Access to the weekend's live entertainment & Fitness Expo<br>
                Commemorative Finisher medal<br>
                Accurate Chip Timing for competitive races<br>
                Ace in the Hole Multisport Weekend Tech Shirt<br>
                Post-event party & entertainment<br><br>

                NOTE: Tech shirts guaranteed to pre-registered participants only.
            </div>

            <div>
                <form method="post" action="index.php" id="registrationForm">

                    <div><label for="eventDay">*Select Event:</label>
                        <select id="eventDay" name="eventDay" form="registrationForm">
                            <option value="saturday">Saturday Event</option>
                            <option value="sunday">Sunday Event</option>
                        </select></div><br><br>

                    <div><label for="athleteVolunteer">*Athlete or Volunteer:</label>
                        <select id="athleteVolunteer" name="athleteVolunteer" form="registrationForm">
                            <option value="athlete">Athlete</option>
                            <option value="volunteer">Volunteer</option>
                        </select></div><br><br>

                    <label for="fullName">*Full Name:</label>
                    <input type="text" name="fullName" id="fullName" required>

                    <label for="age">*Age:</label>
                    <input type="text" name="age" id="age" required>

                    <label for="email">*Email:</label>
                    <input type="email" name="email" id="email" required>

                    <div><label for="gender">*Gender:</label>
                        <select id="gender" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select></div><br><br>

                    <label for="contactName">Emergency Contact Name:</label>
                    <input type="text" name="contactName" id="contactName" required>

                    <label for="contactNumber">Emergency Contact Number:</label>
                    <input type="tel" name="contactNumber" id="contactNumber" required>

                    <label for="contactAge">Emergency Contact Age:</label>
                    <input type="text" name="contactAge" id="contactAge" required>

                    <label for="accommodations">*List special accommodations if needed:</label>
                    <textarea name="accommodations" id="accommodations" rows="2" cols="20" required></textarea>
                    <input id="mysubmit" type="submit" value="Submit">

                </form>
            </div>
        </main>
        <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>
