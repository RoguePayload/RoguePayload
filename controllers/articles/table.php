<div class="row">
            <div class="col-12">
                <table class="table table-bordered table-responsive-md article-table" style="width: 90%; float: center; margin: 5px auto;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            function generateTableRow($imgSrc, $title, $description, $link) {
                                echo '
                                <tr>
                                    <td><img src="' . htmlspecialchars($imgSrc) . '" alt="' . htmlspecialchars($title) . '" style="width: 150px; height: 150px"></td>
                                    <td class="table_article_title">' . htmlspecialchars($title) . '</td>
                                    <td class="table_article_desc">' . htmlspecialchars($description) . '</td>
                                    <td><a href="' . htmlspecialchars($link) . '" target="_blank" class="btn btn-outline-primary" style="cursor: crosshair;">Read Now!</a></td>
                                </tr>';
                            }

                            // Array of articles data
                            $articles = [
                                [
                                    'imgSrc' => 'https://miro.medium.com/v2/resize:fit:720/format:webp/1*kmZ359qIV7X6zpGwPA5mRA.png',
                                    'title' => 'Unveiling the Future: AI, Machine Learning, and Quantum Computing',
                                    'description' => 'The convergence of Artificial Intelligence (AI), Machine Learning (ML), and Quantum Computing represents a pivotal frontier with profound implications for the future.',
                                    'link' => 'https://medium.com/@roguepayload/unveiling-the-future-ai-machine-learning-and-quantum-computing-8d0014107a9c'
                                ],
                                [
                                    'imgSrc' => 'https://miro.medium.com/v2/resize:fit:720/format:webp/1*owb359_7wAzhQxCX8lpjuQ.jpeg',
                                    'title' => 'Hacking Android Apps: A Comprehensive Guide',
                                    'description' => 'This guide will walk you through extracting and analyzing APK files to find vulnerabilities and exploit them.',
                                    'link' => 'https://medium.com/@roguepayload/hacking-android-apps-a-comprehensive-guide-9905c075021f'
                                ],
                                [
                                    'imgSrc' => 'https://miro.medium.com/v2/resize:fit:720/format:webp/1*_Nz_6GRlsww-b4ZmE-_RqA.jpeg',
                                    'title' => 'The Ultimate Guide to Cybersecurity Certifications: CEH, OSCP, and CISSP',
                                    'description' => 'Three of the most sought-after certifications in this field are Certified Ethical Hacker (CEH), Offensive Security Certified Professional (OSCP), and Certified Information Systems Security Professional (CISSP).',
                                    'link' => 'https://medium.com/@roguepayload/the-ultimate-guide-to-cybersecurity-certifications-ceh-oscp-and-cissp-9c3e3e527d4c'
                                ],
                                [
                                    'imgSrc' => 'https://miro.medium.com/v2/resize:fit:720/format:webp/1*jNl4C2xiSj6LuV0I57dEiQ.png',
                                    'title' => 'AI in Cybersecurity: Revolutionizing Threat Detection and Mitigation with ChatGPT',
                                    'description' => 'In this article, we will explore how tools like ChatGPT can assist in ethical hacking.',
                                    'link' => 'https://medium.com/@roguepayload/ai-in-cybersecurity-revolutionizing-threat-detection-and-mitigation-with-chatgpt-e5c3287b0205'
                                ],
                                [
                                    'imgSrc' => 'https://miro.medium.com/v2/resize:fit:720/format:webp/1*OnApuDXVqz5_33sMbkYEIQ.png',
                                    'title' => 'Ethical Hacking 101: A Comprehensive Guide',
                                    'description' => 'This guide aims to provide a thorough understanding of ethical hacking, its history, tips for staying safe online.',
                                    'link' => 'https://medium.com/@roguepayload/ethical-hacking-101-a-comprehensive-guide-3eab607c4ef3'
                                ],
                            ];

                            // Loop through the articles data and generate HTML for each row
                            foreach ($articles as $article) {
                                generateTableRow($article['imgSrc'], $article['title'], $article['description'], $article['link']);
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>