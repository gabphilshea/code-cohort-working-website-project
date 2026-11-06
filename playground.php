<?php
$pageTitle = "Playground - Code Cohort";
include 'includes/head.php';
?>

<body>

    <?php include 'includes/header.php';?><br>

    
    <div class="page-container">

        <?php include 'includes/aside.php'; ?>
        
        <div class="compiler-embed">
            <h2 class="fs-5">Compile Here:</h2>
            <div style="display: flex">
                <h4 class="fs-6">Powered by: </h4><img src="images/jdoodle_logo.png" style="height: 30px; width: auto">
            </div>
            
            <br>
            <iframe
                src="https://www.jdoodle.com/embed/v1/a9c5e2b9706fd3e"
                scrolling= "auto"
                allow="clipboard-write">
            </iframe>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>

        <br>
        
        
        

    </div>

    <div class="playground-podcast">
            <iframe 
                data-testid="embed-iframe" 
                style="border-radius:12px" 
                src="https://open.spotify.com/embed/show/6iNuAhJVJHX3adsMRQcySp/video?utm_source=generator&theme=0&t=0&si=bc4560f971f5434a" 
                width="496" 
                height="279" 
                frameBorder="0" 
                allowfullscreen="" 
                allow="autoplay; 
                clipboard-write; 
                encrypted-media; 
                fullscreen; 
                picture-in-picture" 
                loading="lazy">
            </iframe>
        </div>

    

    
</body>
    