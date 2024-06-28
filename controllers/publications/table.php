<div class="row">
            <div class="col-12">
                <table class="table table-bordered table-responsive-md article-table" style="width: 90%; float: center; margin: 5px auto;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            function generateTableRow($title, $description, $link) {
                                echo '
                                <tr>
                                    <td class="publication_title">' . htmlspecialchars($title) . '</td>
                                    <td class="publication_desc">' . htmlspecialchars($description) . '</td>
                                    <td><a href="' . htmlspecialchars($link) . '" target="_blank" class="btn btn-outline-primary" style="cursor: crosshair;">Read Now!</a></td>
                                </tr>';
                            }

                            // Array of articles data
                            $articles = [
                                [
                                    'title' => 'Investigating the Stellar Origins of Dark Matter, Dark Energy, and Quantum Gravity',
                                    'description' => 'This paper explores the hypothesis that dark matter, dark energy, and quantum gravity originate from the processes involved in the life cycle and death of stars, specifically supernovae.',
                                    'link' => 'https://www.researchgate.net/publication/381771365_Investigating_the_Stellar_Origins_of_Dark_Matter_Dark_Energy_and_Quantum_Gravity'
                                ],
                                [
                                    'title' => 'Quantum Warping: The Enigma of Parallel Universes through Synthesis of Dark Matter and Hawking Radiation',
                                    'description' => 'This paper aims to delve into a new enigmatic convergence between those of the Hawking Radiation of Black Holes, Dark Matter and Dark Energy, Parallel Universes, and Wormholes in order to further enhance our concept of Deja Vu moments.',
                                    'link' => 'https://www.researchgate.net/publication/377111755_Quantum_Warping_The_Enigma_of_Parallel_Universes_through_Synthesis_of_Dark_Matter_and_Hawking_Radiation'
                                ],
                                [
                                    'title' => 'General Speed of Time (GST) Theory: Integrating Relativity into Time Dilation Analysis',
                                    'description' => 'This paper presents the innovative "General Speed of Time (GST)" theory, a transformative framework set to revolutionize our comprehension of time dilation within theoretical physics.',
                                    'link' => 'https://www.researchgate.net/publication/376885819_General_Speed_of_Time_GST_Theory_Integrating_Relativity_into_Time_Dilation_Analysis'
                                ],
                            ];

                            // Loop through the articles data and generate HTML for each row
                            foreach ($articles as $article) {
                                generateTableRow($article['title'], $article['description'], $article['link']);
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>