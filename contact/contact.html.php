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
  <div id="wrapper">
    <main class="main"><br><br>
      <h1>Questions? We'd love to hear from you!</h1>
      <form method="post" action="index.php" id="inquiryForm">
          <div>
              <label for="party">Choose a party:</label>
              <select id="party" name="party" form="inquiryForm" >
                  <option selected="selected">Select Your Party</option>
                  <option value="athlete">Athlete</option>
                  <option value="volunteer">Volunteer</option>
                  <option value="interested party">Interested Party</option>
              </select>
          </div><br>
          <div>
              <label for="myName">Name:</label>
              <input type="text" name="myName" id="myName">
              <label for="myEmail">E-mail:</label>
              <input type="text" name="myEmail" id="myEmail">
              <label for="myQuestion">Question:</label>
              <textarea form="inquiryForm" rows="10" cols="45" name="myQuestion" id="myQuestion"></textarea>
              <input id="mySubmit" type="submit" value="Submit">
          </div>
      </form>
    </main>

  </div><br><br><br><br><br><br><br>
  <?php include "../includes/footer.inc.html.php"; ?>
</body>
</html>