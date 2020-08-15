<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ace In The Hole Multisports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Karma:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="scripts/script.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<!-- top section -->
<div class="section header">
    <div class="container">
        <div class="row">
            <div class="three columns">
                <p class="logo">Ace In The Hole Multisports</p>
            </div>
            <div class="nav nine columns">
                <a class="button button-primary" href="#">Home</a>
                <a class="button" href="#">Events</a>
                <a class="button" href="#">About</a>
                <a class="button" href="#">FAQ</a>
            </div>
        </div>
        <div class="row action">
            <h1>Wy Not you?</h1>
            <h2>Multisports for Everyone</h2>
            <h2><a href="#" class="button button-primary">Register Today!</a></h2>
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
            <div class="three columns">
                <p>Weather</p>

                <div class="weatherBox">
                    <div class="item">
                        <p>Currently displaying the weather in</p>
                        <br>
                        <div class="city"></div>
                        <div class="loader"></div>
                    </div>
                    <div class="item"><p>The weather there is: </p>
                        <div class="weatherIcon"></div>
                        <div class="weather"></div>
                        <div class="loader"></div>
                    </div>
                    <div class="item temp-item"><p>The temperature is: </p>
                        <div class="temp"></div>
                        <button id="tempButton" onclick="changeTemp();">Switch to Fahrenheit</button>
                        <div class="loader"></div>
                    </div>
                    <div class="item search">
                        <form id="form" onsubmit="return false;">
                            <p>Search any city in the world:</p>
                            <input type="text" id="userInput" />
                            <br>
                            <button type="submit" onclick="changeCity();">Search</button>
                        </form>
                    </div>
                </div>
                <div class="author">by Wesley</div>
            </div>

            <div class="seven columns">
                <p>Mei te possit instructior, idque delenit qui et, dicit ludus commune vix ad. Ea modo dicam cetero mel, case disputationi at est. Ad nam adipisci dignissim posidonium, eius reque temporibus ne mea. Vero antiopam ea vim. Ei timeam electram vix. Eam at tollit erroribus, ea eum idque legere epicuri. Sed quot legere minimum cu, ex mei fastidii mandamus intellegam, error consul ut per.</p>
                <p><a href="#" class="button button-primary">More info</a></p>
            </div>
            <div class="two columns">
                <p>Social Media</p>
                <p><a href="#" class="button button-primary">More Info</a></p>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="section footer">
        <div class="container">
            <div class="row">
                <?php include 'includes/footer.php';?>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>