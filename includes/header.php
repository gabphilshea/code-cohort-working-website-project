<header class="align-items-center">
    <a href="index.php"><h1 class="fs-6 m-0 medium" style="color: #9013FEFF">Code Cohort</h1></a>
    <ul class="d-flex gap-4 list-unstyled m-0 ms-4">
        <a href="index.php"><li class="animated-link">Home</li></a>
        <a href="tutorials.php"><li class="animated-link">Tutorials</li></a>
        <a href="playground.php"><li class="animated-link">Playground</li></a>
        <a href="contact.php"><li class="animated-link">Contact Us</li></a>
    </ul>

    <div class="theme-toggle-wrap ms-auto">
        <button class="theme-btn" id="themeButton" style="border-radius: 180px" onclick="switchTheme()">
          <i class="bi bi-moon-fill" id="themeIcon"></i>
        </button>
    </div>
    

    <script>
        function updateIcon(theme){
            document.getElementById("themeIcon").className = theme === "dark" ? "bi bi-sun-fill" : "bi bi-moon-fill";       
        }

        function switchTheme(){
          const html = document.documentElement;
          const next = html.getAttribute("data-theme") === "dark" ? "light" : "dark";
          html.setAttribute("data-theme", next);
          html.setAttribute("data-bs-theme", next);
          localStorage.setItem("theme", next);
          updateIcon(next);

        }
        
        updateIcon(document.documentElement.getAttribute("data-theme"));
    </script>
</header>