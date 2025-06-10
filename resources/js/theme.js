// Check for saved user preference, if any, on load and set the theme
const toggleTheme = document.getElementById('theme-toggle');

// Function to set the theme
function setTheme(theme) {
    if (theme === 'dark') {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
}

// Function to toggle between light and dark theme
function toggleDarkMode() {
    if (document.documentElement.classList.contains('dark')) {
        setTheme('light');
    } else {
        setTheme('dark');
    }
}

// Check for saved theme preference or use system preference
if (localStorage.getItem('theme') === 'dark' || 
    (!localStorage.getItem('theme') && 
     window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    setTheme('dark');
} else {
    setTheme('light');
}

// Add event listener to theme toggle button
if (toggleTheme) {
    toggleTheme.addEventListener('click', toggleDarkMode);
}

// Update the theme when the system preference changes
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    if (!localStorage.getItem('theme')) {
        setTheme(e.matches ? 'dark' : 'light');
    }
});
