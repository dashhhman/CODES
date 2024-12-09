<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo" width="50">
            </div>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#add-dictionary">Add to Dictionary</a></li>
                    <li><a href="#fun-quiz">Fun Quiz</a></li>
                    <li><a href="#translator">Translator</a></li>
                </ul>
            </div>
            <!-- Hamburger Icon -->
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main>
        <!-- Main content goes here -->
    </main>

    <script >

        // JavaScript to toggle the navigation links
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
    // Toggle the display of the nav links when the hamburger is clicked
    navLinks.classList.toggle('active');
});

// Add this style directly in JS when toggling the active class
const style = document.createElement('style');
style.innerHTML = `
    .nav-links.active {
        display: block; /* Show nav links when 'active' class is added */
    }
`;
document.head.appendChild(style);

    </script>
</body>
</html>
