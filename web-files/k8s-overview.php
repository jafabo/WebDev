<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubernetes Overview</title>
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
        <h1>Welcome to Kubernetes</h1>
        <img src="kubernetes-logo.png" alt="Kubernetes Logo" class="k8s-logo">
        <h2>What is Kubernetes?</h2>
        <p>Kubernetes, often abbreviated as K8s, is an open-source platform designed to automate deploying, scaling, and operating application containers. Think of it like a conductor in an orchestra, ensuring every instrument (or application) performs in harmony.</p>
        <h2>History</h2>
        <p>Originating from Google in 2014, Kubernetes is now maintained by the Cloud Native Computing Foundation (CNCF). Born from Google's need to manage billions of container workloads, Kubernetes was gifted to the open-source community, where it has become the de-facto standard for container orchestration.</p>
        <img src="k8s-architecture.png" alt="Kubernetes Architecture Diagram" class="k8s-diagram">
        <h2>How Does it Work?</h2>
        <p>At a high level, Kubernetes works with 'nodes', which are individual machines, VMs, or cloud instances. These nodes host 'pods', which are sets of containers. The magic of Kubernetes is in how it manages these pods - it can automatically replace, replicate, and scale them based on the configurations you provide.</p>
        <p>A master node controls worker nodes, and the master's job is to manage the Kubernetes cluster. This includes tasks like scheduling applications, maintaining applications' desired state, scaling applications, and rolling out new updates.</p>
    </div>
</body>
</html>
