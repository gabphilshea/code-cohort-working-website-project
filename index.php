<?php
$pageTitle = "Home - Code Cohort";
include 'includes/head.php';
?>

<body>

    <?php include 'includes/header.php';?><br>


    <div class="page-container">
        
    <?php include 'includes/aside.php';?>

        <section>
            <div id="featureCarousel" class="carousel slide my-4" data-bs-ride="carousel" >
                <div style="border-radius: 16px" class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="p-5 text-center" style="background-color: black">
                            <i class="bi bi-bar-chart-fill fs-5"></i>
                            <h4>Code Cohort</h4>
                            <h5>Efficiency</h5>
                            <p>Make your coding learning journey seamless.</p>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-color: black">
                        <div class="p-5 text-white text-center">
                            <i class="bi bi-lock-fill fs-4"></i>
                            <h4>Code Cohort</h4>
                            <h5>Convenience</h5>
                            <p>One-stop access to learning materials.</p>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-color: black">
                        <div class="p-5 text-center">
                            <i class="bi bi-envelope-fill fs-4"></i>
                            <h4>Code Cohort</h4>
                            <h5>Explore</h5>
                            <p>Execute your first program.</p>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#featureCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#featureCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
            </div>
            <br><br>
            <h2 class="fs-5">Getting Started</h2>
            
                <?php
                    $videos = [
                        ['id' => '5C_HPTJg5ek', 'title' => 'Rust in 100 Seconds'],
                        ['id' => '446E-r0rXHI', 'title' => 'Go in 100 Seconds'],
                        ['id' => '_uQrJ0TkZlc', 'title' => 'Python Tutorial - Python Full Course for Beginners'],
                        ['id' => 'kqtD5dpn9C8', 'title' => 'Python for Beginners - Learn Python in 1 Hour'],
                        ['id' => '2eebptXfEvw', 'title' => 'PHP For Absolute Beginners | 6.5 Hour Course'],
                        ['id' => 'p3qvj9hO_Bo', 'title' => 'Learn SQL In 60 Minutes'],
                        ['id' => 'wX75Z-4MEoM', 'title' => 'you need to learn Virtual Machines RIGHT NOW!! (Kali Linux VM, Ubuntu, Windows)'],
                        ['id' => '8mAITcNt710', 'title' => 'Harvard CS50 – Full Computer Science University Course'],
                        ['id' => 'SpfIwlAYaKk', 'title' => 'PostgreSQL Course for Beginners'],
                        ['id' => 'A74TOX803D0', 'title' => 'Learn Java Programming (version 17)'],
                        ['id' => 'ix9cRaBkVe0', 'title' => 'Python Full Course for free 🐍'],
                        ['id' => 'oshQg1uSRvg', 'title' => 'How To Learn To Code In 2026'],
                        ['id' => 'uerEG_yigco', 'title' => 'Every Programming Language Explained in 16 Minutes'],
                        ['id' => 'PkZNo7MFNFg', 'title' => 'Learn JavaScript - Full Course for Beginners'],
                        ['id' => 'rfscVS0vtbw', 'title' => 'Learn Python - Full Course for Beginners'],
                        ['id' => 'HXV3zeQKqGY', 'title' => 'SQL Tutorial - Full Database Course for Beginners'],
                        ['id' => 'RGOj5yH7evk', 'title' => 'Git and GitHub for Beginners - Crash Course'],
                        ['id' => 'hdI2bqOjy3c', 'title' => 'JavaScript Crash Course For Beginners'],
                        ['id' => 'vLnPwxZdW4Y', 'title' => 'C++ Tutorial for Beginners - Full Course'],
                        ['id' => 'KJgsSFOSQv0', 'title' => 'C Programming Tutorial for Beginners'],
                        ['id' => 'ROjZy1WbCIA', 'title' => 'Linux Operating System - Crash Course'],
                        ['id' => 'gh2_PhgZGsM', 'title' => 'Claude Code for Beginners'],

                    ];

                    shuffle($videos);
                    $starters = array_slice($videos, 0, 6);
                    
                ?>
           
            
            <div class="videoembed-grid-wrapper">
                <div class="videoembed-grid" id="videoembedGrid">
                    <?php foreach ($starters as $video): ?>

                        <div class="videoembed-card">
                            <iframe 
                                width="100%" 
                                height="100%"
                                src="https://www.youtube.com/embed/<?= htmlspecialchars($video['id']) ?>" 
                                title="<?= htmlspecialchars($video['title']) ?>" 
                                frameborder="0" 
                                allow="accelerometer; 
                                autoplay; 
                                clipboard-write; 
                                encrypted-media; 
                                gyroscope; 
                                picture-in-picture; 
                                web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                            </iframe>
                        </div>
                  
                    <?php endforeach; ?>
                    
                </div>
            </div>

           
        </section>
        

    </div>
    <br><br><br>
    
    <?php include 'includes/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

