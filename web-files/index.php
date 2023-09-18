<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubernetes Information Hub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="color-changer.php">Color Changer</a>
        <a href="k8s-overview.php">Kubernetes Overview</a>
        <a href="k8s-evolution.php">K8s Evolution</a>
        <a href="#">Web Apps & K8s</a>
        <a href="#">K8s Benefits</a>
        <a href="#">Learn More</a>
    </nav>

    <div class="container">
        <p class="pod-name">
            <?php
                $pod_name = getenv('POD_NAME');
                echo "Served by pod: $pod_name";
            ?>
        </p>
        <h1>Welcome to Kubernetes Information Hub!</h1>
        <!-- Add other content you'd like for your landing page here -->
    </div>
</body>
</html>
