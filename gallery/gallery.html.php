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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
</head>

<body>

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

    <main class="main">
        <h1>Gallery</h1>

        <div class="row">
            <div class="column">
                <img src="../images/ace1.jpg">
                <img src="../images/ace2.jpg">
                <img src="../images/ace4.jpg">
                <img src="../images/ace5.jpg">

            </div>
            <div class="column">
                <img src="../images/ace8.jpg">
                <img src="../images/ace9.jpg">
                <img src="../images/ace10.jpg">
                <img src="../images/ace11.jpg">

            </div>
            <div class="column">
                <img src="../images/ace12.jpg">
                <img src="../images/ace13.jpg">
                <img src="../images/ace14.jpg">
                <img src="../images/ace15.jpg">
                <img src="../images/ace17.jpg">
            </div>
            <div class="column">
                <img src="../images/ace7.jpg">
                <img src="../images/ace3.jpg">
                <img src="../images/ace6.jpg">
                <img src="../images/ace16.jpg">
                <img src="../images/ace18.jpg">
            </div>
        </div>


        <script>
            $(".gallery").magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery:{
                    enabled: true
                }
            });
        </script>

    </main>

</body>
<?php include('../includes/footer.inc.html.php'); ?>


</html>
