<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More About Kubernetes</title>
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
        <h1>Learn More About Kubernetes</h1>

        <section>
            <h2>Books</h2>
            <ul>
                <li><strong>"Kubernetes Up & Running"</strong> by Kelsey Hightower</li>
                <li><strong>"Kubernetes: The Complete Guide"</strong> by Stephen August</li>
            </ul>
        </section>

        <section>
            <h2>Youtube Videos</h2>
            <ul>
                <li><strong>"What is Kubernetes?"</strong> 
                    <div style="display: flex; justify-content: left;">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/cC46cg5FFAM"></iframe>
                    </div>
                </li>
            <br>
                <li><strong>"Kubernetes Explained in 100 Seconds"</strong> 
                    <div style="display: flex; justify-content: left;">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/PziYflu8cB8"></iframe>
                    </div>
                </li>
            </ul>
        </section>

        <section>
            <h2>Online Courses</h2>
            <ul>
                <li><strong>Udemy:</strong> "Learn Kubernetes from A to Z"</li>
                <li><strong>Coursera:</strong> "Kubernetes for Cloud Architects"</li>
            </ul>
        </section>

        <section>
            <h2>Websites and Blogs</h2>
            <ul>
                <li><strong>Kubernetes.io</strong> - Official Documentation</li>
                <li><strong>Medium:</strong> Various articles and tutorials</li>
            </ul>
        </section>
        
        <section class="cta-section">
            <h2>Ready for Deep Dive?</h2>
            <p>If you're looking to deepen your knowledge, these resources are a great starting point. Happy learning!</p>
        </section>
    </div>
</body>
</html>

<section class="more-resources">
    <h2>Further Resources and Learning</h2>
    <p>As Kubernetes continues to evolve, a myriad of resources are available to help you stay at the cutting edge. Here are some avenues for further learning:</p>
    <ul>
        <li><a href="https://kubernetes.io/docs/home/">Official Kubernetes Documentation</a></li>
        <li><a href="https://www.cncf.io/">Cloud Native Computing Foundation (CNCF)</a></li>
        <li><a href="https://github.com/kubernetes/kubernetes">Kubernetes on GitHub</a></li>
        <li><a href="https://www.edx.org/learn/kubernetes">Kubernetes Courses on edX</a></li>
    </ul>
    <p>These resources provide a wealth of knowledge for both beginners and advanced users, covering everything from basic tutorials to in-depth discussions on Kubernetes internals and community contributions.</p>
</section>
