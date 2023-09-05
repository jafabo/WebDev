<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Changer</title>
    <!-- Import jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Document Ready function ensures code runs after the DOM is fully loaded
        $(document).ready(function(){
            
            // Retrieve the saved background color from localStorage if available
            var savedColor = localStorage.getItem("bgColor");
            if (savedColor) {
                $("body").css("background-color", savedColor);
            }
            
            // Listen for a button click to change the background color
            $("#changeColorButton").click(function(){
                
                // Perform a GET request to the PHP file, which will return a new color
                $.get("color.php", function(data) {
                    
                    // Change the background color to the new color
                    $("body").css("background-color", data);
                    
                    // Save the new background color in localStorage
                    localStorage.setItem("bgColor", data);
                });
            });
        });
    </script>
</head>
<body>
    <!-- Button that will trigger the background color change -->
    <button id="changeColorButton">Change Background Color</button>
</body>
</html>
