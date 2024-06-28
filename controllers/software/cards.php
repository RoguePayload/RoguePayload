    <!-- Software Cards -->
    <div class="container">
        <div class="row">
            <?php
                // Array of software data
                $softwareProjects = [
                    [
                        'name' => 'CosmoCalc',
                        'description' => 'CosmoCalc is a Python app for simulating celestial parameters like planetary data and gravitational forces. With AI and ML models, it delivers real-world results, making it essential for astronomers.',
                        'github' => 'https://github.com/RoguePayload/CosmoCalc',
                        'download' => '#',
                        'image' => 'media/img/cosmocalc.jpg'
                    ],
                    [
                        'name' => 'XenomorphRecon',
                        'description' => 'An advanced reconnaissance tool designed for cybersecurity professionals, ethical hackers, and enthusiasts.',
                        'github' => 'https://github.com/RoguePayload/XenomorphRecon',
                        'download' => 'https://github.com/RoguePayload/XenomorphRecon/archive/refs/heads/master.zip',
                        'image' => 'media/img/xenomorphrecon.jpg'
                    ],
                    [
                        'name' => 'ChainInspect',
                        'description' => 'ChainInspect is a comprehensive smart contract auditing tool designed with a user-friendly graphical interface.',
                        'github' => 'https://github.com/RoguePayload/ChainInspect',
                        'download' => 'https://github.com/RoguePayload/ChainInspect/archive/refs/heads/master.zip',
                        'image' => 'media/img/chaininspect.jpg'
                    ],
                    [
                        'name' => 'DNS-Cache-Poisoning',
                        'description' => 'A simple Python script to test for DNS Cache Poisoning.',
                        'github' => 'https://github.com/RoguePayload/DNS-Cache-Poisoning',
                        'download' => 'https://github.com/RoguePayload/DNS-Cache-Poisoning/archive/refs/heads/master.zip',
                        'image' => 'media/img/dns-cache-poisoning.jpg'
                    ],
                    [
                        'name' => 'VulnHawk',
                        'description' => 'Welcome to VulnHawk, the cutting-edge tool designed to revolutionize your bug bounty hunting experience!',
                        'github' => 'https://github.com/RoguePayload/VulnHawk',
                        'download' => 'https://github.com/RoguePayload/VulnHawk/archive/refs/heads/master.zip',
                        'image' => 'media/img/vulnhawk.jpg'
                    ],
                    [
                        'name' => 'EZ-Rater-Pro',
                        'description' => 'A simple Ruby on Rails platform that will allow companies to register and pull commercial quotes from various insurance companies.',
                        'github' => 'https://github.com/RoguePayload/EZ-Rater-Pro',
                        'download' => 'https://github.com/RoguePayload/EZ-Rater-Pro/archive/refs/heads/master.zip',
                        'image' => 'media/img/ez-rater-pro.jpg'
                    ],
                    [
                        'name' => 'CyberSentry',
                        'description' => 'A powerful and efficient automated tool designed for security professionals and ethical hackers to identify vulnerabilities in web applications.',
                        'github' => 'https://github.com/RoguePayload/CyberSentry',
                        'download' => 'https://github.com/RoguePayload/CyberSentry/archive/refs/heads/master.zip',
                        'image' => 'media/img/cybersentry.jpg'
                    ],
                    [
                        'name' => 'QuantumTrader',
                        'description' => 'A new AI-based bot that provides amazing strategies to properly execute the best times to buy/sell cryptocurrencies.',
                        'github' => 'https://github.com/RoguePayload/QuantumTrader',
                        'download' => 'https://github.com/RoguePayload/QuantumTrader/archive/refs/heads/master.zip',
                        'image' => 'media/img/quantumtrader.jpg'
                    ]
                ];

                // Loop through the software data and generate HTML for each card
                foreach ($softwareProjects as $project) {
                    echo '
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <!--<img class="card-img-top" src="' . htmlspecialchars($project['image']) . '" alt="' . htmlspecialchars($project['name']) . '">-->
                            <div class="card-body">
                                <h5 class="card-title crd_tle">' . htmlspecialchars($project['name']) . '</h5>
                                <p class="card-text crd_des">' . htmlspecialchars($project['description']) . '</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="' . htmlspecialchars($project['github']) . '" class="btn btn-sm btn-outline-secondary button_text" target="_blank">GitHub</a>
                                        <a href="' . htmlspecialchars($project['download']) . '" class="btn btn-sm btn-outline-secondary button_download">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>