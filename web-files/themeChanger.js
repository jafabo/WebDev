function changeTheme(theme) {
    // Remove all other theme classes
    document.body.classList.remove('edgy-theme', 'pastel-theme');  // Add any other theme classes to this list

    // Add the selected theme class
    if (theme !== 'default') {
        document.body.classList.add(`${theme}-theme`);
    }

    // Save theme to localStorage
    localStorage.setItem('selectedTheme', theme);
}

// Apply the saved theme on document load
document.addEventListener('DOMContentLoaded', function() {
    const savedTheme = localStorage.getItem('selectedTheme');
    if (savedTheme) {
        changeTheme(savedTheme);
    }
});
