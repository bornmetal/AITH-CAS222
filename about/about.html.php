<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ace In The Hole Multisports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="1shVGe2r"></script>


<!-- top section -->
<div class="section header">
    <div class="container">
        <div class="row">
            <div class="nav-container">
                <nav>
                    <input type="checkbox" id="nav-toggle">
                    <label for="nav-toggle" class="burger-menu">
                        <img src="../imgs/menu.jpg" alt="menu" width="80" height="80">
                    </label>
                    <div class="left-menu">
                      <a href="/Cas222/aith/template/">Home</a>
                        <a href="../forms/">Events</a>
                        <a href="about/">About</a>
                        <a href="../imggallery/photos.html.php">multimedia</a>
                        <a href="faq.html.php">FAQ</a>
                    </div>
                    <a href="/index.php" class="logo">Ace In The Hole Multisports</a>
                </nav>
            </div>
        </div>
        <div class="row action">
            <h1>Why Not you?</h1>
            <h2>Multisports for Everyone</h2>
            <h2><a href="../forms/" class="button button-primary">Register Today!</a></h2>
        </div>
    </div>
</div>

<!-- info section -->
<div class="section info">
    <div class="container info">
        <div class="row">
            <h2>We Want You!!</h2>
        </div>
        <div class="row">



            <div class="six columns">


                <h1>Contact Us</h1>
                <div id="source">Required fields are marked with an asterisk (*).</div>
                <div id="reservations">
                    <form method="post" action="">
                     <label for="myfname">Full name:</label>
                        <input type="text" name="myfname" id="myfname">
                        <p></p>

                        <label for="myemail">email:</label>
                        <input type="email" name="myemail" id="myemail">
                        <p></p>

                        <label for="mystatus">Who are you?</label>
                        <select size="1" name="mystatus" id="mystatus">
                            <option>Choose</option>
                            <option value="Athlete">Athlete</option>
                            <option value="Volunteer">Volunteer</option>
                            <option value="Spectator">Spectator</option>
                        </select>
                         <P></p>
                        <label for="mycomments">*What is your question or Comment?</label>
                        <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
                        <input id="mysubmit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="two columns">
                <h4>Social Media</h4>

                <div class="fb-comment-embed" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-include-parent="false" data-width="300"></div>

            </div>

</div>
        </div>
    </div>
    
    <!-- footer -->
    <div class="section footer">
        <div class="container">
            <div class="row">
                <?php include '../includes/footer.php';?>

            </div>
        </div>
    </div>
</body>
</html>