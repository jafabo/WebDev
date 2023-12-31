<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubernetes Overview</title>
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
            <?php echo "Served by pod: " . getenv('POD_NAME'); ?>
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
        
        <h2>Kubernetes Architecture</h2>
        <p>Understanding the architecture of Kubernetes is crucial for effectively managing containerized applications. At a high level, Kubernetes follows a client-server architecture. The master node is responsible for the global scheduling of workloads and the management of workloads' state to ensure the declared state matches the actual cluster state. Worker nodes are the workhorses that run the applications.</p>
        <p>The control plane's components, such as the kube-api server, scheduler, and controller manager, run on the master node. In contrast, the worker nodes run kubelet and kube-proxy services and any containers assigned to them by the master.</p>
        <p>For a more in-depth look, consider exploring the <a href="k8s-evolution.php">evolution of Kubernetes</a> to see how its architecture has been shaped by community contributions and the shifting needs of its users.</p>  
    </div>
</body>

</html>
