<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubernetes Benefits</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="k8s-overview.php">Kubernetes Overview</a>
            <a href="k8s-evolution.php">K8s Evolution</a>
            <a href="Web-Apps-and-K8s.php">Web Apps & K8s</a>
            <a href="K8s-Benefits.php">K8s Benefits</a>
            <a href="#">Learn More</a>
            <a href="color-changer.php">Color Changer</a>
        </nav>
        <p class="pod-name">
            <?php
                $pod_name = getenv('POD_NAME');
                echo "Served by pod: $pod_name";
            ?>
        </p>
        <h1>Benefits of Using Kubernetes</h1>

        <section>
            <h2>Why Use Kubernetes?</h2>
            <p>
                Kubernetes offers a range of benefits for deploying, scaling, and managing containerized applications. Let's explore some key benefits.
            </p>
        </section>

        <section>
            <h2>Scalability</h2>
            <p>
                Kubernetes can automatically scale your applications based on resource usage or custom metrics.
            </p>
        </section>

        <section>
            <h2>Portability</h2>
            <p>
                With Kubernetes, you can move your workloads across different cloud providers or even to on-premises servers.
            </p>
        </section>

        <section>
            <h2>High Availability</h2>
            <p>
                Kubernetes ensures that your applications are highly available by restarting failed containers, replacing and rescheduling containers, etc.
            </p>
        </section>

        <section>
            <h2>Resource Optimization</h2>
            <p>
                Kubernetes optimizes the use of underlying resources, providing higher utilization rates.
            </p>
        </section>
        
        <section class="cta-section">
            <h2>Ready to Explore More?</h2>
            <p>Check out our <a href="#">Learn More</a> section to deepen your knowledge on Kubernetes!</p>
        </section>
    </div>
</body>
</html>
