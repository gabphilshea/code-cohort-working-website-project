<?php
$pageTitle = "Playground - Code Cohort";
include 'includes/head.php';
?>

<body>

    <?php include 'includes/header.php';?><br>

    
    <div class="page-container">
        <?php include 'includes/aside.php'; ?>
        
        <div class="playground-container">
            <h2 class="text-white fs-5">Compile Here:</h2>
            <div style="display: flex">
                <h4 class="text-white fs-6">Powered by: </h4><img src="images/jdoodle_logo.png" style="height: 30px; width: auto">
            </div>
            
            <br>
            <iframe
                style="height: 80em"
                src="https://www.jdoodle.com/embed/v1/a9c5e2b9706fd3e"
                scrolling= "auto"
                allow="clipboard-write">
            </iframe>

            <?php
                $videos = [
                    // Syntax: web dev
                    ['id' => '2HuTAqQjohOErTbk1xrwIM', 'title' => 'How to Build a Website: The Show For Beginners', 'show' => 'Syntax'],
                    ['id' => '5X4rk3IYoYPX1iMixVEG8D', 'title' => '816: Why Your CSS Sucks', 'show' => 'Syntax'],
                    ['id' => '0GLPoLGSRfCfivpfJuBzSB', 'title' => '921: AI Coding Roadmap for Newbies (And Skeptics)', 'show' => 'Syntax'],
                    ['id' => '0o5z2ZDMvIZhaZl7qTgRRF', 'title' => '838: Productivity Tools for Web Developers', 'show' => 'Syntax'],
                    ['id' => '2l5HQnPi8D7WG8wBEeLswR', 'title' => '799: Hot New and Under-Utilized Browser APIs', 'show' => 'Syntax'],

                    // freeCodeCamp Podcast: learning and careers
                    ['id' => '296AnkXCc16VbQrueJys3w', 'title' => '#122 From Construction Worker to Teaching Millions of Developers', 'show' => 'The freeCodeCamp Podcast'],
                    ['id' => '5RNFh2UOUN3JsMbc8XAn8i', 'title' => '#164 How to Become a Self-Taught Developer While Supporting a Family', 'show' => 'The freeCodeCamp Podcast'],
                    ['id' => '6Fk5g2rJ3EOQgHjXFlMg55', 'title' => '#192 Evan You (Vue & Vite)', 'show' => 'The freeCodeCamp Podcast'],

                    // CodeNewbie: beginner journeys
                    ['id' => '1zhOKw5o3U6vFl9B7gEcBv', 'title' => 'S22E9: Coding Bootcamps & Coding Journeys', 'show' => 'CodeNewbie'],
                    ['id' => '6woPLmYYmwgIhLGYlBub7P', 'title' => 'S20E1: Where You Can Find Quality Live Coding Instruction Online', 'show' => 'CodeNewbie'],

                    // Darknet Diaries: IT security stories
                    ['id' => '3nqhMb69bh3sv75ni5m7tx', 'title' => '174: Pacific Rim', 'show' => 'Darknet Diaries'],
                    ['id' => '03mFUZH6Q9jtT2Gp846OtJ', 'title' => '68: Triton', 'show' => 'Darknet Diaries'],
                    ['id' => '4vXyFtBk1IarDRAoXIWQFf', 'title' => '98: Zero Day Brokers', 'show' => 'Darknet Diaries'],

                    // The Changelog: software and open source
                    ['id' => '02Fi8qXdx2itqnuPTC8Hgk', 'title' => 'Spec-driven Development with Kiro', 'show' => 'The Changelog'],
                    ['id' => '4A6iO8Y2GO2dtPRNemWdq6', 'title' => 'Python Documentary Companion (Travis Oliphant)', 'show' => 'The Changelog'],
                ];

                $podcast = $videos[array_rand($videos)];
            ?>

            <div class="playground-spotify">
                <h2 class="fs-5">Spotify</h2>
                <h4 class="text-gray fs-6" style="color: gray">Tune in on some exclusive podcasts as you write your code.</h4><br>
                <iframe
                    id="spotify-podcast"
                    src="https://open.spotify.com/embed/episode/<?= htmlspecialchars($podcast['id']) ?>?utm_source=generator&theme=0"
                    width="100%" height="152" frameborder="0" allowfullscreen
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy" title="<?= htmlspecialchars($podcast['title']) ?>">
                </iframe>
                <br>
                <h4 class="text-gray fs-6" style="color: gray">Or listen to some of Spotify's curated playlists!</h4><br>
                <div class="row g-3">
                    <div class="col-12 col-lg-4">
                        <h5>Today's Top Hits</h5>
                        <iframe data-testid="embed-iframe" style="border-radius:12px"
                            src="https://open.spotify.com/embed/playlist/37i9dQZF1DXcBWIGoYBM5M?utm_source=generator"
                            width="100%" height="352" frameBorder="0" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="col-12 col-lg-4">
                        <h5>Chill Hits</h5>
                        <iframe data-testid="embed-iframe" style="border-radius:12px"
                            src="https://open.spotify.com/embed/playlist/37i9dQZF1DX4WYpdgoIcn6?utm_source=generator"
                            width="100%" height="352" frameBorder="0" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>

                    <div class="col-12 col-lg-4">
                        <h5>New Music Friday</h5>
                        <iframe data-testid="embed-iframe" style="border-radius:12px"
                            src="https://open.spotify.com/embed/playlist/37i9dQZF1DX4JAvHpjipBk?utm_source=generator"
                            width="100%" height="352" frameBorder="0" allowfullscreen=""
                            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                            loading="lazy"></iframe>
                    </div>
            </div>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>

        <br>
        
        
        

    </div>

    

    

    
</body>
    