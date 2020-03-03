<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Chan Saechao">
    <base target="_blank"> <!-- open all links not marked "_self" in a new tab -->
    <title>Ace in the Hole Multisport Events</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/style.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
</head>

<body>

<header class="header">
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

    <h1 id="logo">Ace in the Hole Multisport Events</h1>

    <ul class="menu">
        <li><a href="http://chansaechao.webhostingforstudents.com/cas222/" target="_self">Home</a></li>
        <li><a href="http://chansaechao.webhostingforstudents.com/cas222" target="_self">Event</a></li>
        <li><a href="http://chansaechao.webhostingforstudents.com/cas222" target="_self">Gallery</a></li>
        <li><a href="http://chansaechao.webhostingforstudents.com/cas222/registration/registrations.html.php" target="_self">Registration</a></li>
        <li><a href="http://chansaechao.webhostingforstudents.com/cas222/contact/contact.html.php" target="_self">Contact</a></li>
    </ul>

</header>

    <div id="wrapper">
        <main>
            <h1>Register Today</h1>
            <div id="registration">
                <form method="post" action=" ">

                    <label for="eventDay">*Select Event:</label>
                    <select id="eventDay" name="eventDay">
                        <option value="saturday">Saturday Event</option>
                        <option value="sunday">Sunday Event</option>
                    </select>

                    <label for="athleteVolunteer">*Athlete or Volunteer:</label><br><br>
                    <select id="athleteVolunteer" name="athleteVolunteer">
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select><br>

                    <label for="myFName">*Full Name:</label>
                    <input type="text" name="myFName" id="myFNname" required>

                    <label for="myAge">*Age:</label>
                    <input type="text" name="ageAge" id="myAge" required>

                    <label for="myEmail">*Email:</label>
                    <input type="email" name="myEmail" id="myEmail" required>

                    <label for="myGender">*Gender:</label>
                    <select id="myGender" name="myGender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br>

                    <label for="contactGame">Emergency Contact Name:</label>
                    <input type="text" name="contactGame" id="contactGame" required>

                    <label for="contactGumber">Emergency Contact Number:</label>
                    <input type="tel" name="contactNumber" id="contactNumber" required>

                    <label for="contactNumber">Emergency Contact Age:</label>
                    <input type="tel" name="contactAge" id="contactAge" required>

                    <label for="myAccommodations">*List special accommodations if needed:</label>
                    <textarea name="myAccommodation" id="myAccommodation" rows="2" cols="20" required></textarea>
                    <input id="mysubmit" type="submit" value="Submit">

                </form>
            </div>
        </main>
        <?php include('../includes/footer.inc.html.php'); ?>
    </div>
</body>

</html>
