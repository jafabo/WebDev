window.onscroll = function() {showVerticalNav()};

function showVerticalNav() {
    var topNavbarHeight = document.querySelector('.navbar').offsetHeight;
    var verticalNavbar = document.getElementById("verticalNavbar");

    // Check if the page is scrolled beyond the height of the top navbar
    if (window.pageYOffset > topNavbarHeight) {
        verticalNavbar.style.opacity = "1";
        verticalNavbar.style.visibility = "visible";
    } else {
        // Use a transition end event listener to hide the navbar after the transition
        verticalNavbar.style.opacity = "0";
        verticalNavbar.addEventListener('transitionend', function() {
            if (window.pageYOffset <= topNavbarHeight) {
                verticalNavbar.style.visibility = "hidden";
            }
        }, { once: true }); // Event listener will trigger only once
    }
}
