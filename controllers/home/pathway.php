<!-- Timeline Section -->
<div class="container my-5">
    <h2 class="text-center">My Journey</h2>
    
    <?php
        // Function to fetch timeline data
        function getTimelineData() {
            return [
                ["date" => "May 1, 2007", "event" => "Graduated High-School (N. Hills Private School)", "side" => "left"],
                ["date" => "May 25, 2007", "event" => "Started College (Weatherford College) for {Video Game Design & Development}", "side" => "right"],
                ["date" => "April 13, 2008", "event" => "Left College (Weatherford College) for another Institution.", "side" => "left"],
                ["date" => "July 20, 2008", "event" => "Started My First Company (White Hallway Productions) * Game Design & Development", "side" => "right"],
                ["date" => "January 1, 2009", "event" => "Became an underground hacker for various hacktivist groups.", "side" => "left"],
                ["date" => "October 25, 2009", "event" => "Crafted multiple malicious tools and programs to be undected by antivirus programs", "side" => "right"],
                ["date" => "March 1, 2010", "event" => "Specially invited to a prestigious hacktivist group in order to further enhance my skills.", "side" => "left"],
                ["date" => "March 14, 2010", "event" => "Took on a new position as a published author for an activist underground group (AnonHQ).", "side" => "right"],
                ["date" => "March 14, 2010", "event" => "Started College (ITT Tech) for {Computer Science}", "side" =>"left"],
                ["date" => "December 22, 2011", "event" => "Started College (Ashley University) for {Computer Science}", "side" => "right"],
                ["date" => "May 14, 2014", "event" => "Graduated College (Ashley University) with {Ph.D. Computer Science}", "side" => "left"],
                ["date" => "March 1, 2015", "event" => "Started FutureTeks company for Computer Repairs & Website Development", "side" => "right"],
                ["date" => "June 18, 2016", "event" => "Closed FutureTeks for as partnership disagreement", "side" => "left"],
                ["date" => "December 12, 2016", "event" => "Started New Position (Ruby on Rails Engineer) for {Hobson AC}", "side" => "right"],
                ["date" => "August 26, 2017", "event" => "Ended my position at (Hobson AC).", "side" => "left"],
                ["date" => "October 12, 2017", "event" => "Went Back to school (EC-Council, SoloLearn, IBM Skills Build) for {Quantum Computer Programming, Web App Programming, Ethical Hacking}", "side" => "right"],
                ["date" => "June 1-14, 2018", "event" => "Obtained multiple certifications of completion for (Website Development, Quantum Computer Programming, Ethical Hacking)", "side" => "left"],
                ["date" => "September 12, 2018", "event" => "Forged a new corporation (Echo Point Solutions) for {Web & Mobile App Development, Server Hosting Solutions, Ethical Hacking Services, and Bug Bounty Hunting.", "side" => "right"],
                ["date" => "November 22, 2019", "event" => "Left all of my underground practices and forged a new entity in order to start handling ethical hacking services operating on several organizations.", "side" => "left"],
                ["date" => "Febuary 12, 2020", "event" => "Started to self-study Astrophysics and dive deep into my childhood dream of becoming an astronomer. Completely amazed at my research, I began following in the steps of the late Stephen Hawking.", "side" => "right"],
                ["date" => "December 26, 2023", "event" => "Published my first scientific research paper on ResearchGate on (General Speed of Time (GST) Theory: Integrating Realitivity into Time Dilation Analysis).", "side" => "left"],
                ["date" => "January 3, 2024", "event" => "Published my second scientific research paper on ResearchGate on (Quantum Warping: The Enigma of Parallel Universes through Synthesis of Dark Matter and Hawking Radiation)", "side" => "right"],
                ["date" => "January 17, 2024", "event" => "Published a rough-draft of my first science fiction novella on WattPad entitled (Jump Point: The First Frontiers).", "side" => "left"],
                ["date" => "May 13, 2024", "event" => "Co-Founded (DarkMatrix Cyber Solutions) as the C.T.O. where I am able to write advanced programms utilizing AI & ML algorithms and enhancing the companies reputation and profitability", "side" => "right"],
                ["date" => "June 27, 2024", "event" => "Published my third scientific research paper on ResearchGate for (Investigating the Stellar Origins of Dark Matter, Dark Energy, and Quantum Gravity).", "side" => "left"],
                ["date" => "June 28, 2024", "event" => "Started research and the application process to multiple schools and universities to go back to college in order to pursure advanced degrees in the field of astronomy.", "side" => "right"],
                ["date" => "June 29, 2024", "event" => "Self published myself as {Rogue Payload} to include updating social media profiles, updating my profiles on my publication sites, and even publishing my own website.", "side" => "left"],
                // Add more events here
            ];
        }
    ?>
    
    <!-- Timeline Container -->
    <div class="timeline">
        <?php
            // Fetch timeline data
            $timelineData = getTimelineData();
            
            // Generate timeline events
            foreach ($timelineData as $event) {
                echo '
                <div class="timeline-event ' . htmlspecialchars($event['side']) . '">
                    <div class="timeline-content">
                        <h5>' . htmlspecialchars($event['date']) . '</h5>
                        <p>' . htmlspecialchars($event['event']) . '</p>
                    </div>
                </div>';
            }
        ?>
    </div>
</div>