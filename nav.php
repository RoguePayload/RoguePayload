    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" id="nav_title">
                RoguePayload
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('index.php'); ?>" href="index.php" id="nav_link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('about.php'); ?>" href="about.php" id="nav_link">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('articles.php'); ?>" href="articles.php" id="nav_link">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('publications.php'); ?>" href="publications.php" id="nav_link">Publications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('software.php'); ?>" href="software.php" id="nav_link">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActive('contact.php'); ?>" href="contact.php" id="nav_link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>