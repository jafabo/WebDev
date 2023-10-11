<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubernetes Evolution</title>
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
            <a href="Learn-More.php">Learn More</a>
            <a href="color-changer.php">Color Changer</a>
        </nav>
        <p class="pod-name">
        <?php
            $pod_name = getenv('POD_NAME');
            echo "Served by pod: $pod_name";
        ?>
        </p>
        
        <h1>The Evolution of Kubernetes</h1>
        
        <h2>Early Days: Pre-Kubernetes Era</h2>
        <p>
            Before Kubernetes, managing containerized applications at scale was a challenge. Tools like Docker popularized containerization, but orchestrating them was still manual and complex.
            <img src="path-to-image/pre-kubernetes-era.jpg" alt="Diagram illustrating challenges before Kubernetes" class="k8s-diagram">
        </p>

        <h2>2014: The Birth of Kubernetes</h2>
        <p>
            Kubernetes, also known as K8s, was released as an open-source project by Google in 2014. It was built upon Google's decade-plus years of experience in running massive-scale workloads using a system called Borg.
            <img src="path-to-image/birth-of-kubernetes.jpg" alt="Kubernetes initial logo and contributors" class="k8s-diagram">
        </p>

        <h2>Gaining Traction: Rise of Cloud Native</h2>
        <p>
            By 2016, Kubernetes gained significant traction and became the de facto standard for container orchestration. The Cloud Native Computing Foundation (CNCF) adopted Kubernetes as its first project. 
            <a href="https://landscape.cncf.io/">More information on the CNCF can be found here!</a>
            <img src="cloud-native-era.jpg" alt="Diagram of Cloud Native technologies" class="k8s-diagram">
        </p>

        <h2>Today: The Leading Orchestration Platform</h2>
        <p>
            Today, Kubernetes is supported by an enormous community and has become the backbone of many modern infrastructures. It supports multi-cloud deployments, ensuring scalability, and high availability.
            <img src="weave_kubernetes_platform_updated.webp" alt="Modern Kubernetes architecture and deployments" class="k8s-diagram">
        </p>

        <footer>
            <p>Learn more about Kubernetes and its profound impact on the software industry as you navigate through this site.</p>
        </footer>
    </div>
</body>
</html>
