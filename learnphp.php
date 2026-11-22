<?php
$pageTitle = "Learn PHP - Code Cohort";
include 'includes/head.php';
require_once 'includes/learn-helpers.php';
?>

<body>
    <?php include 'includes/header.php'; ?>

    <div class="page-container">
        <?php include 'includes/aside.php'; ?>
        <main class="learnpage-content">
                <a href="learn.php"><div class="returnlearnpage-button">&larr;</div></a><br>
                <div id="title">
                    <h2>Overview of PHP</h2>
                    <h4>The server-side language that powers dynamic websites, forms and database-driven pages.</h4>
                </div>
                <br>
                <section id="background">
                    <h2 class="fs-5">Short Background</h2>
                    <p>PHP was created by Rasmus Lerdorf in 1994 as "Personal Home Page" tools. It runs on the server and sends plain HTML to the browser, so visitors never see the PHP code. It powers WordPress, Facebook's early versions and a large share of the web, and it pairs naturally with MySQL.</p>
                </section>

                <section id="basics">
                    <h2 class="fs-5">Basics</h2>
                    <h3 class="fs-6">Hello, World</h3>
                    <?php code('php', <<<'CODE'
                    <?php
                    echo "Hello, World!";
                    ?>
                    CODE); ?>
                    <h3 class="fs-6">Variables</h3>
                    <?php code('php', <<<'CODE'
                    <?php
                    $name = "Gabriel";
                    $age = 20;
                    $gpa = 1.75;
                    $enrolled = true;
                    echo "Name: $name, Age: $age";
                    echo "Joined: " . $name . "<br>";   // . joins strings
                    ?>
                    CODE); ?>
                    <h3 class="fs-6">Conditions and loops</h3>
                    <?php code('php', <<<'CODE'
                    <?php
                    if ($age >= 18) { echo "Adult"; } else { echo "Minor"; }

                    for ($i = 1; $i <= 5; $i++) { echo $i; }

                    $videos = ["id1", "id2", "id3"];
                    foreach ($videos as $v) { echo $v; }
                    ?>
                    CODE); ?>
                    <h3 class="fs-6">Functions and arrays</h3>
                    <?php code('php', <<<'CODE'
                    <?php
                    function add($a, $b) { return $a + $b; }

                    $student = ["name" => "Gabriel", "year" => 3];   // associative array
                    echo $student["name"];
                    echo $videos[array_rand($videos)];               // random item
                    ?>
                    CODE); ?>
                    <h3 class="fs-6">Reading form data and reusing files</h3>
                    <?php code('php', <<<'CODE'
                    <form method="post">
                    <input type="text" name="username">
                    <button type="submit">Send</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                        $user = htmlspecialchars($_POST["username"]);   // always escape output
                        echo "Hello, $user";
                    }
                    include 'includes/header.php';                      // reuse page parts
                    ?>
                    CODE); ?>
                    <h3 class="fs-6">Connecting to MySQL (PDO)</h3>
                    <?php code('php', <<<'CODE'
                    <?php
                    $pdo = new PDO("mysql:host=localhost;dbname=code_cohort;charset=utf8mb4", "root", "");
                    $stmt = $pdo->prepare("SELECT * FROM tutorials WHERE language = ?");
                    $stmt->execute(["PHP"]);
                    foreach ($stmt as $row) {
                        echo htmlspecialchars($row["title"]) . "<br>";
                    }
                    ?>
                    CODE); ?>
                </section>

                <section id="materials">
                    <h2 class="fs-5">Learning Materials</h2>
                    <div class="row g-3">
                        <?php
                        material('video', 'Beginner course', 'zZ6vybT1HQs');
                        material('video', 'PHP + MySQL tutorial', '-1DTYAQ25bY');
                        material('article', 'Official docs (php.net)', 'https://php.net/manual/en/getting-started.php');
                        material('article', 'Practice problems', 'https://www.w3schools.com/php/php_exercises.asp');
                        material('quiz', 'Quizlet flashcards', 'https://quizlet.com/5306714/match/embed?i=7es5bi&x=1jj1');
                        ?>
                    </div>
                </section>
                <br><br>
                <section id="more">
                    <h2 class="fs-5">Other Learning Information</h2>
                    <h3 class="fs-6">Setup</h3>
                    <p>Install XAMPP, start Apache and MySQL, put files in <code>C:\xampp\htdocs\your_project</code>, and open <code>http://localhost/your_project/</code>. PHP files must be opened through localhost, not by double-clicking.</p>
                    <h3 class="fs-6">Common mistakes</h3>
                    <ul>
                        <li>Forgetting the <code>$</code> on variable names or the <code>;</code> at the end of a line.</li>
                        <li>Echoing user input without <code>htmlspecialchars()</code> (XSS risk).</li>
                        <li>Building SQL by joining strings; use prepared statements to prevent SQL injection.</li>
                        <li>Output before <code>header()</code> or <code>session_start()</code>.</li>
                    </ul>
                    <h3 class="fs-6">Practice projects</h3>
                    <ul><li>Contact form that saves to MySQL</li><li>Login and registration with <code>password_hash()</code></li><li>Simple blog with create, read, update, delete (CRUD)</li></ul>
                    <h3 class="fs-6">What to learn next</h3>
                    <p>Sessions and cookies, file uploads, OOP in PHP, and a framework such as Laravel.</p>
                </section>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>