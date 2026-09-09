<?php 
// includes/navbar.php
?>
<nav id="navbar" class="navbar">
    <div class="nav-container container">
        <a href="#home" class="nav-logo">
            <span class="logo-text">Januar Putra Pamungkas<span class="text-accent">.</span></span>
        </a>

        <div class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#webdev" class="nav-link">Web</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>

        <div class="nav-actions">
            <button id="theme-toggle" class="theme-btn" aria-label="Toggle Dark Mode">
                <i data-lucide="moon" class="icon-moon"></i>
                <i data-lucide="sun" class="icon-sun"></i>
            </button>
            
            <button id="hamburger" class="hamburger-btn" aria-label="Menu">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </div>
</nav>
