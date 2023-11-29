window.onscroll = function() {showVerticalNav()};

function showVerticalNav() {
    var topNavbarHeight = document.querySelector('.navbar').offsetHeight;
    var verticalNavbar = document.getElementById("verticalNavbar");

    if (window.pageYOffset >= topNavbarHeight) {
        verticalNavbar.style.display = "block";
    } else {
        verticalNavbar.style.display = "none";
    }
}
