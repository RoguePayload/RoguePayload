<div class="row" style="width: 90%; margin: 10px auto;">
    <h2 class="certs_title"> Certifications & Degrees</h2>
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
                    'imgSrc' => 'media/img/doctor.jpeg',
                    'title' => 'Ph.D. Computer Science',
                    'description' => 'Extensive research and collaboration on Quantum Computation & Algorithm Programming.'
                ],
                [
                    'imgSrc' => 'media/img/digital_forensics_essentials.png',
                    'title' => 'Certified Digital Forensics',
                    'description' => 'Discovered methodologies & techniques for data recovery.'
                ],
                [
                    'imgSrc' => 'media/img/ethical_hacking_essentials.png',
                    'title' => 'Certified Ethical Hacking',
                    'description' => 'Obtained new knowledge for more advanced hacking solutions.'
                ],
                [
                    'imgSrc' => 'media/img/network_defense_essentials.png',
                    'title' => 'Certified Network Defense',
                    'description' => 'Harnessed new knowledge for increasing network security.'
                ],
                [
                    'imgSrc' => 'media/img/sql_injection_attacks.png',
                    'title' => 'Certified SQL Injection',
                    'description' => 'Crafted multiple payloads for injecting SQL Attacks.'
                ],
                [
                    'imgSrc' => 'media/img/ceh_aubrey.png',
                    'title' => 'Certified Ethical Hacker (C|EH)',
                    'description' => 'Gained in-depth knowledge of ethical hacking techniques.'
                ],
                [
                    'imgSrc' => 'media/img/oscp_aubrey.png',
                    'title' => 'Offensive Security Certified Professional (OSCP)',
                    'description' => 'Expert level certification in penetration testing.'
                ],
                [
                    'imgSrc' => 'media/img/cissp_aubrey.jpg',
                    'title' => 'Certified Information Systems Security Professional (CISSP)',
                    'description' => 'Advanced knowledge of Ethical Hacking & Penetration Testing.'
                ],
                [
                    'imgSrc' => 'media/img/cyber_security.png',
                    'title' => 'Introduction to CyberSecurity',
                    'description' => 'Introductory experience for Cybersecurity services.'
                ],
                [
                    'imgSrc' => 'media/img/jr_pentester.png',
                    'title' => 'Jr. Penetration Tester',
                    'description' => 'Intermediate courses for introduction to Pentest.'
                ],
                [
                    'imgSrc' => 'media/img/pentest_privilege_escalation.jpeg',
                    'title' => 'Pentest & Privilege Escalation',
                    'description' => 'Advanced knowledge path for Penetration Testing.'
                ],
                [
                    'imgSrc' => 'media/img/html.jpeg',
                    'title' => 'Certified HTML Developer',
                    'description' => 'Completed courses to obtain knowledge on building HTML websites.'
                ],
                [
                    'imgSrc' => 'media/img/css.jpeg',
                    'title' => 'Certified CSS Developer',
                    'description' => 'Completed courses to obtain knowledge on CSS for styling websites.'
                ],
                [
                    'imgSrc' => 'media/img/javascript.jpeg',
                    'title' => 'Certified Javascript Developer',
                    'description' => 'Completed courses to obtain knowledge on advanced JS functions.'
                ],
                [
                    'imgSrc' => 'media/img/php.jpeg',
                    'title' => 'Certified PHP Developer',
                    'description' => 'Completed courses to obtain knowledge on advanced PHP development.'
                ],
                [
                    'imgSrc' => 'media/img/ruby.jpeg',
                    'title' => 'Certified Ruby Developer',
                    'description' => 'Completed courses to obtain knowledge on advanced Ruby development.'
                ],
                [
                    'imgSrc' => 'media/img/sql.jpeg',
                    'title' => 'Certified SQL Admin',
                    'description' => 'Explored multiple databases and operations for proper data handling.'
                ]
            ];

            // Loop through the cards data and generate HTML for each card
            foreach ($cards as $card) {
                generateCard($card['imgSrc'], $card['title'], $card['description']);
            }
        ?>
    </div>
</div>