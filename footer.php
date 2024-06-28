<!-- footer.php -->

<footer class="footer">
    <div class="container">
<!-- Add this in the appropriate section -->
<div class="col-md-4">
    <h5 class="section-title">Current Time</h5>
    <p id="currentTime" class="section-content"></p>
</div>


<!-- Include this script in the footer -->
<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        // Pad single digit minutes and seconds with a leading zero
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        var timeString = hours + ':' + minutes + ':' + seconds;
        document.getElementById('currentTime').innerText = timeString;
    }
    setInterval(updateClock, 1000); // Update the clock every second
    updateClock(); // Initial call to display clock immediately
</script>        
        <div class="row">
            <!-- Section 1: Pages -->
            <div class="col-md-4">
                <h5 class="section-title">Pages</h5>
                <ul class="list-unstyled section-content">
                    <li><a href="index.php" id="footer_link"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="about.php" id="footer_link"><i class="fa fa-user"></i> About</a></li>
                    <li><a href="articles.php" id="footer_link"><i class="fa fa-newspaper"></i> Articles</a></li>
                    <li><a href="publications.php" id="footer_link"><i class="fa fa-book"></i> Publications</a></li>
                    <li><a href="software.php" id="footer_link"><i class="fa fa-code"></i> Software</a></li>
                    <li><a href="contact.php" id="footer_link"><i class="fa fa-envelope"></i> Contact</a></li>
                </ul>
            </div>
            <!-- Section 2: External Resources -->
            <div class="col-md-4">
                <h5 class="section-title">External Resources</h5>
                <ul class="list-unstyled section-content">
                    <li><a href="https://www.researchgate.net/profile/Aubrey-Love-Ii" target="_blank" id="footer_link"><i class="fa-brands fa-researchgate"></i> Research Gate</a></li>
                    <li><a href="https://medium.com/@roguepayload" target="_blank" id="footer_link"><i class="fa-brands fa-medium"></i> Medium</a></li>
                    <li><a href="https://www.wattpad.com/user/RoguePayload" target="_blank" id="footer_link"><i class="fa-solid fa-book"></i> Wattpad</a></li>
                    <li><a href="https://github.com/RoguePayload" target="_blank" id="footer_link"><i class="fa-brands fa-github"></i> Github</a></li>
                </ul>
            </div>
            <!-- Section 3: Contact Information -->
            <div class="col-md-4">
                <h5 class="section-title">Contact Information</h5>
                <ul class="list-unstyled section-content">
                    <li><a href="https://www.twitter.com/Rogue_Payload" target="_blank" id="footer_link"><i class="fa-brands fa-twitter"></i> Twitter</a>
                    <li><a href="https://www.facebook.com/AubreyWLoveII" target="_blank" id="footer_link"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.linkedin.com/in/aubreywloveii" target="_blank" id="footer_link"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li>
                    <li><a href="mailto:info@roguepayload.space"><i class="fa-solid fa-envelope"></i> Email</a></li>
                </ul>
            </div>
            <!-- Section 4: Live Articles --> 
             <div class="col-md-4">
                <h5 class="section-title">Latest Publications</h5>
                <ul class="list-unstyled section-content" id="publication_links">
                    <?php foreach (getRecentArticles() as $article): ?>
                        <li><a href="<?php echo $article['url']; ?>" target="_blank"><i class="fa fa-newspaper"></i> <?php echo $article['title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <h4 id="footer_copy_text">
                © <?php echo date("Y"); ?> Copyright RoguePayload
            </h4>
        </div>
</footer>

<!-- Include Font Awesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<?php
function getRecentArticles() {
    // Example static data, replace with database query or API call
    return [
        ["title" => "Investigating the Stellar Origins of Dark Matter, Dark Energy, and Quantum Gravity", "url" => "https://www.researchgate.net/publication/381771365_Investigating_the_Stellar_Origins_of_Dark_Matter_Dark_Energy_and_Quantum_Gravity"],
        ["title" => "Unveiling the Future: AI, Machine Learning, and Quantum Computing.", "url" => "https://medium.com/@roguepayload/unveiling-the-future-ai-machine-learning-and-quantum-computing-8d0014107a9c"],
        ["title" => "Quantum Warping: The Enigma of Parallel Universes through Synthesis of Dark Matter and Hawking Radiation", "url" => "https://www.researchgate.net/publication/377111755_Quantum_Warping_The_Enigma_of_Parallel_Universes_through_Synthesis_of_Dark_Matter_and_Hawking_Radiation"],
        ["title" => "Hacking Android Apps: A Comprehensive Guide", "url" => "https://medium.com/@roguepayload/hacking-android-apps-a-comprehensive-guide-9905c075021f"],
        ["title" => "Jump Point: The First Frontiers", "url" => "https://www.wattpad.com/1412382978-jump-point-the-first-frontiers-part-1-harbinger-of"],
    ];
}
?>