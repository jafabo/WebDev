<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubernetes Information Hub</title>
    <link id="themeStylesheet" rel="stylesheet" href="styles.css">
    <script src="themeChanger.js"></script>
    <script src="vertNav.js"></script>

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
        <h1 class="welcome-message">Welcome to Kubernetes Information Hub!</h1>

        <!-- Introduction Section -->
        <section class="intro-section">
            <h2>About This Site</h2>
            <p>
                Welcome to the Kubernetes Information Hub, a one-stop-shop for understanding and exploring the world of Kubernetes. My aim is to simplify complex Kubernetes concepts and provide practical insights for users ranging from beginners to advanced professionals.
            </p>
        </section>

        <!-- Features/Contents Section -->
        <section class="contents-section">
            <h2>What's Inside?</h2>
            <ul>
                <li><strong>Kubernetes Overview:</strong> Dive deep into what Kubernetes is and its role in today's tech ecosystem.</li>
                <li><strong>K8s Evolution:</strong> Understand the journey of Kubernetes from its inception to its present-day significance.</li>
                <li><strong>Color Changer:</strong> A fun interactive tool showcasing the power of Kubernetes pods.</li>
                <li><strong>Web Apps & K8s:</strong> Learn how web applications leverage Kubernetes for scalability and reliability.</li>
                <li><strong>K8s Benefits:</strong> Explore the advantages Kubernetes brings to the table.</li>
                <li><strong>Learn More:</strong> Curated resources and links for those looking to deepen their knowledge.</li>
            </ul>
        </section>

        <!-- Explanation about "Served by pod" -->
        <section class="pod-explanation-section">
            <h2>About "Served by pod:"</h2>
            <p>
                You might notice a unique message at the top of every page stating "Served by pod: POD_NAME". This showcases the power and flexibility of Kubernetes. Every time you load a page, it might be served by a different pod in the Kubernetes cluster. Pods are the smallest deployable units in a Kubernetes cluster and can be thought of as individual instances of your application. This dynamic pod serving is a testament to Kubernetes' load-balancing and self-healing capabilities.
            </p>
        </section>

        <!-- Optional: Call-to-action or Next Steps -->
        <section class="cta-section">
            <h2>Ready to Dive In?</h2>
            <p>Start with our <a href="k8s-overview.php">Kubernetes Overview</a> or explore any of the sections from the navigation bar to begin your Kubernetes journey!</p>
        </section>

        <section class="intro">
            <h2>Why Kubernetes?</h2>
            <p>Kubernetes is an open-source platform designed to automate deploying, scaling, and operating application containers. With it, you can cluster together groups of hosts running Linux® containers, and Kubernetes helps you easily and efficiently manage those clusters.</p>
        </section>
        <section class="benefits">
            <h2>Benefits of Kubernetes</h2>
            <p>Kubernetes provides the building blocks for building developer platforms, but preserves user choice and flexibility where it is important. It has a large, rapidly growing ecosystem. Kubernetes' services, support, and tools are widely available.</p>
        </section>
        <section class="get-started">
            <h2>Getting Started with Kubernetes</h2>
            <p>Whether you are new to Kubernetes or an existing user, it's easy to get started. Explore our resources to learn more about how Kubernetes can help you scale your applications, reduce downtime, and manage your containerized services with ease.</p>
            <p><a href="Learn-More.php">Learn more about Kubernetes</a></p>
        </section>
    </div>
</body>
</html>


