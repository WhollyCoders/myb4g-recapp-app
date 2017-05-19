<!DOCTYPE HTML>
<html>
<head>
  <title>MyBod4God Recap Application | RecApp</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="./css/style/style.css" title="style" />
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Rec<span class="logo_colour">App</span></a></h1>
          <h2>Improved Efficiency Through Dynamic Data Generation...</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li <?php if($page_title == 'home'){echo('class="selected"');} ?>><a href="index.php">Home</a></li>
          <li <?php if($page_title == 'competitors'){echo('class="selected"');} ?>><a href="competitors.php">Competitors</a></li>
          <li <?php if($page_title == 'teams'){echo('class="selected"');} ?>><a href="teams.php">Teams</a></li>
          <li <?php if($page_title == 'weigh_ins'){echo('class="selected"');} ?>><a href="weighins.php">Weigh-Ins</a></li>
          <li <?php if($page_title == 'contact'){echo('class="selected"');} ?>><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
