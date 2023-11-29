<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn More About Kubernetes</title>
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
            <div class="video-grid">
                <div class="video">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/cC46cg5FFAM"></iframe>
                </div>
                <div class="video">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/FmLna7tHDRc"></iframe>
                </div>
                <div class="video">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/PziYflu8cB8"></iframe>
                </div>
                <div class="video">
                    <iframe width="420" height="345" src="https://www.youtube.com/embed/TlHvYWVUZyc"></iframe>
                </div>
            </div>
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

        <section class="community-forums">
            <h2>Community Forums and Discussion Platforms</h2>
            <p>Engaging with the Kubernetes community is a great way to enhance your learning. Here are some popular forums and platforms where you can ask questions, share knowledge, and connect with experts:</p>
            <ul>
                <li><a href="https://discuss.kubernetes.io/">Kubernetes Discussion Forums</a></li>
                <li><a href="https://stackoverflow.com/questions/tagged/kubernetes">Stack Overflow - Kubernetes Tag</a></li>
                <li><a href="https://www.reddit.com/r/kubernetes/">Reddit Kubernetes Community</a></li>
                <li><a href="https://slack.k8s.io/">Kubernetes Slack Channel</a></li>
            </ul>
            <p>These platforms are invaluable for real-world problem-solving and staying updated with the latest trends and best practices in Kubernetes.</p>
        </section>

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
    </div>
</body>
</html>


