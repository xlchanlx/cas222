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
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                    Athlete or Volunteer: <?php echo htmlspecialchars($party, ENT_QUOTES, 'UTF-8') ?><br>
                    Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8') ?><br>
                    Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8') ?><br>
                    Message: <?php echo htmlspecialchars($myQuestion, ENT_QUOTES, 'UTF-8') ?><br>
                </p>
            </main>
            <?php include '../includes/footer.inc.html.php'; ?>
        </div>
    </body>
</html>