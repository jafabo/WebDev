<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Changer</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#changeColorButton").click(function(){
                $.get("color.php", function(data) {
                    $("body").css("background-color", data);
                });
            });
        });
    </script>
</head>
<body>
    <button id="changeColorButton">Change Background Color!</button>
</body>
</html>
