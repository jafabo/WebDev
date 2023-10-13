<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Apps & K8s</title>
    <link id="themeStylesheet" rel="stylesheet" href="styles.css">
    <script src="themeChanger.js"></script>
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
        <p class="pod-name">
            <?php
                $pod_name = getenv('POD_NAME');
                echo "Served by pod: $pod_name";
            ?>
        </p>
        <h1>Web Apps & Kubernetes</h1>
        
        <section class="intro">
            <p>
              Kubernetes is becoming the go-to infrastructure layer for deploying web applications. It provides a powerful platform for deploying applications, scaling them as necessary, and managing changes to existing containerized applications.
            </p>
        </section>
        
        <section class="why-k8s">
            <h2>Why Use Kubernetes for Web Apps?</h2>
            <p>
                Using Kubernetes brings in the benefits of container orchestration, automatic scaling, and efficient resource utilization. It handles the deployment and scaling of applications and also provides important features like self-healing.
            </p>
        </section>

        <section class="common-use-cases">
            <h2>Common Use-Cases</h2>
            <table>
                <thead>
                    <tr>
                        <th>Use-Case</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>E-commerce</td>
                        <td>For online stores, Kubernetes helps in balancing the load during peak traffic times like Black Friday, ensuring smooth customer experience.</td>
                    </tr>
                    <tr>
                        <td>Streaming Services</td>
                        <td>Kubernetes is capable of automatically scaling the infrastructure as more users start streaming, ensuring that the service remains smooth.</td>
                    </tr>
                    <tr>
                        <td>SaaS Applications</td>
                        <td>Kubernetes allows for efficient multi-tenancy, where each tenant or customer has isolated, secure access to a single instance of the application.</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
