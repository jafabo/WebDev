document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('scroll', function() {
        var logo = document.getElementById('k8s-logo2');
        if (logo) {
            var degree = window.pageYOffset / 5; // Adjust the divisor to control the speed
            logo.style.transform = 'rotate(' + degree + 'deg)';
        }
    });
});
