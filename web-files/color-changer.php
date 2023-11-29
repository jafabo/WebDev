<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Changer</title>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link id="themeStylesheet" rel="stylesheet" href="styles.css">
    <script src="themeChanger.js"></script>
    <script src="vertNav.js"></script>
    <script>
        // Document Ready function ensures code runs after the DOM is fully loaded
        $(document).ready(function(){
            // Retrieve saved background color
            var savedColor = localStorage.getItem("bgColor");
            if (savedColor) {
                $("body").css("background-color", savedColor);
            }
            
            // Add a fade-in effect for the button over 1 second
            $('#changeColorButton').fadeIn(1000);

            // Listen for a button click to change the background color
            $("#changeColorButton").click(function(){
                // Perform a GET request to the PHP file
                $.get("color.php", function(data) {
                    // Change the background color
                    $("body").css("background-color", data);
                    // Save the new background color in localStorage
                    localStorage.setItem("bgColor", data);
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="k8s-overview.php">Kubernetes Overview</a>
            <a href="k8s-evolution.php">K8s Evolution</a>
            <a href="Web-Apps-and-K8s.php">Web Apps & K8s</a>
            <a href="K8s-Benefits.php">K8s Benefits</a>
            <a href="Learn-More.php">Learn More</a>
            <a href="color-changer.php">Color Changer</a>
        </nav>
        <nav id="verticalNavbar" class="vertical-navbar">
            <a href="index.php">Home</a>
            <a href="k8s-overview.php">Kubernetes Overview</a>
            <a href="k8s-evolution.php">K8s Evolution</a>
            <a href="Web-Apps-and-K8s.php">Web Apps & K8s</a>
            <a href="K8s-Benefits.php">K8s Benefits</a>
            <a href="Learn-More.php">Learn More</a>
            <a href="color-changer.php">Color Changer</a>
        </nav>
        
        <p class="pod-name">
        <?php
            $pod_name = getenv('POD_NAME');
            echo "Served by pod: $pod_name";
        ?>
        </p>

        <button id="changeColorButton" style="display:none;">Change Background Color</button>
        <button onclick="changeTheme('pastel')">Pastel Theme</button>
        <button onclick="changeTheme('edgy')">Cursed Theme</button>
        <button onclick="changeTheme('default')">Default Theme</button>


    </div>
</body>
</html>
