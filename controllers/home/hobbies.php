<!-- Hobbies & Interests Section -->
<div class="container my-5">
    <?php
        // Function to fetch the introductory paragraph dynamically
        function getIntroParagraph() {
            // In a real application, this could fetch content from a database
            // For this example, we're using a static text
            return "Explore my diverse range of interests that fuel my passion for science, technology, and innovation. From delving into the realms of science fiction and space exploration to mastering advanced hacking techniques and programming skills, these are the areas that excite and inspire me.";
        }
    ?>
    
    <!-- Introductory Paragraph -->
    <p class="lead">
        <?php echo getIntroParagraph(); ?>
    </p>

    <div class="row">
        <!-- Function to generate card content dynamically -->
        <?php
            function generateCard($imgSrc, $title, $description) {
                // Output the card HTML with provided data
                echo '
                <div class="col-md-4">
                    <div class="card bg-dark text-white mb-3" style="box-shadow: 5px 5px 7px #C0C0C0; margin: 5px auto; padding: 3px;">
                        <img src="' . htmlspecialchars($imgSrc) . '" class="card-img-top" alt="' . htmlspecialchars($title) . '" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">' . htmlspecialchars($title) . '</h5>
                            <p class="card-text">' . htmlspecialchars($description) . '</p>
                        </div>
                    </div>
                </div>';
            }

            // Array of cards data
            $cards = [
                [
                    'imgSrc' => 'media/gif/science_fiction.gif',
                    'title' => 'Science Fiction',
                    'description' => 'Dive into a fascinating world where hypothesis collaborates alongside with pure imagination. Emmerse yourselve into new worlds as we journey through the unknown and let our imaginations run wild.'
                ],
                [
                    'imgSrc' => 'media/gif/space_exploration.gif',
                    'title' => 'Space Exploration',
                    'description' => 'Exploring the vast cosmos and enduring the abilities to study and research the complexities upon this infinitely scalled universe in order to help provide a firm grasp and understanding of the unknown.'
                ],
                [
                    'imgSrc' => 'media/gif/hacking.gif',
                    'title' => 'Hacking & Programming',
                    'description' => 'I have a particular set of skills that makes most envious. From advanced programming utilizing multiple languages and frameworks, to handling penetration testing and operations.'
                ]
            ];

            // Loop through the cards data and generate HTML for each card
            foreach ($cards as $card) {
                generateCard($card['imgSrc'], $card['title'], $card['description']);
            }
        ?>
    </div>
</div>