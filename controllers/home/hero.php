<!-- Hero Section -->
<div class="container-bg hero" style="background-image: url('media/gif/hero_space.gif'); background-attachment: fixed; background-size: cover; background-position: center;">
    <!-- Main Title with dynamic content using PHP -->

    
    <!-- Subheading with dynamic content using PHP -->
    <p class="subheading">

    </p>
        <!-- Description with PHP function to fetch dynamic content -->
        <div class="hero-description">
        <h1>
        <?php
            // PHP function to dynamically fetch and display a catchy title
            function getHeroTitle() {
                // Here you can fetch the title from a database or an API
                // For this example, we'll use a static title
                return "Welcome to RoguePayload";
            }
            echo getHeroTitle();
        ?>
    </h1>            
        <?php
            // PHP function to dynamically fetch and display a catchy subheading
            function getHeroSubheading() {
                // Here you can fetch the subheading from a database or an API
                // For this example, we'll use a static subheading
                return "Exploring the world of Science Fiction, Space Exploration, Hacking, Programming, and Technology.";
            }
            echo getHeroSubheading();
        ?>            
        <br/>
        <br/>
        <?php
            // PHP function to fetch and display a description for the site
            function getHeroDescription() {
                // Here you can fetch the description from a database or an API
                // For this example, we'll use a static description
                return "At RoguePayload, we delve into the intriguing realms of science fiction and space exploration. Join us as we navigate through the latest in hacking techniques, advanced programming, and cutting-edge technology. Stay tuned for exciting content, insightful articles, and groundbreaking discoveries.";
            }
            echo getHeroDescription();
        ?>
    </div>
</div>
