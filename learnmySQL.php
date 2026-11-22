<?php
$pageTitle = "Learn MySQL - Code Cohort";
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
                <h2>Overview of MySQL</h2>
                <h4>The relational database that stores, organizes and retrieves your website data using SQL.</h4>
            </div>
            <br>
            <section id="background">
                <h2 class="fs-5">Short Background</h2>
                <p>MySQL was created by Michael "Monty" Widenius and David Axmark and first released in 1995 (named after Monty's daughter, My). It is now owned by Oracle and remains open source. Data lives in tables of rows and columns, and you talk to it with SQL (Structured Query Language). It is the "M" in the XAMPP and LAMP stacks and powers WordPress.</p>
            </section>

            <section id="basics">
                <h2 class="fs-5">Basics</h2>
                <h3 class="fs-6">Create a database and table</h3>
                <?php code('sql', <<<'CODE'
                CREATE DATABASE code_cohort;
                USE code_cohort;

                CREATE TABLE tutorials (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(100) NOT NULL,
                language VARCHAR(30),
                views INT DEFAULT 0,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                );
                CODE); ?>
                <h3 class="fs-6">Insert (Create)</h3>
                <?php code('sql', <<<'CODE'
                INSERT INTO tutorials (title, language)
                VALUES ('Java Basics', 'Java'), ('PHP Forms', 'PHP');
                CODE); ?>
                <h3 class="fs-6">Select (Read)</h3>
                <?php code('sql', <<<'CODE'
                SELECT * FROM tutorials;
                SELECT title FROM tutorials WHERE language = 'PHP';
                SELECT * FROM tutorials ORDER BY views DESC LIMIT 5;
                SELECT * FROM tutorials WHERE title LIKE '%Java%';
                CODE); ?>
                <h3 class="fs-6">Update and Delete</h3>
                <?php code('sql', <<<'CODE'
                UPDATE tutorials SET views = views + 1 WHERE id = 1;
                DELETE FROM tutorials WHERE id = 2;
                CODE); ?>
                <h3 class="fs-6">Aggregates and grouping</h3>
                <?php code('sql', <<<'CODE'
                SELECT language, COUNT(*) AS total, SUM(views) AS all_views
                FROM tutorials
                GROUP BY language
                HAVING total > 1;
                CODE); ?>
                <h3 class="fs-6">Relationships and JOIN</h3>
                <?php code('sql', <<<'CODE'
                CREATE TABLE comments (
                id INT AUTO_INCREMENT PRIMARY KEY,
                tutorial_id INT,
                body TEXT,
                FOREIGN KEY (tutorial_id) REFERENCES tutorials(id)
                );

                SELECT t.title, c.body
                FROM tutorials t
                JOIN comments c ON c.tutorial_id = t.id;
                CODE); ?>
            </section>

            <section id="materials">
                <h2 class="fs-5">Learning Materials</h2>
                <div class="row g-3">
                    <?php
                    material('video', 'Beginner course');
                    material('video', 'SQL JOINs explained');
                    material('article', 'Official docs (dev.mysql.com)');
                    material('article', 'Practice problems (e.g. SQL exercises)');
                    material('compiler', 'Online SQL playground');
                    material('quiz', 'Quizlet flashcards');
                    ?>
                </div>
            </section>
            <br><br>
            <section id="more">
                <h2 class="fs-5">Other Learning Information</h2>
                <h3 class="fs-6">Setup</h3>
                <p>With XAMPP, start MySQL and open <code>http://localhost/phpmyadmin</code> to create databases and run SQL visually. The default user is <code>root</code> with an empty password (change this on any real server).</p>
                <h3 class="fs-6">Key terms</h3>
                <ul>
                    <li><strong>Primary key:</strong> uniquely identifies each row.</li>
                    <li><strong>Foreign key:</strong> links a row to a row in another table.</li>
                    <li><strong>CRUD:</strong> Create (INSERT), Read (SELECT), Update, Delete.</li>
                    <li><strong>Normalization:</strong> splitting data into tables to avoid repetition.</li>
                </ul>
                <h3 class="fs-6">Common mistakes</h3>
                <ul>
                    <li>Running <code>UPDATE</code> or <code>DELETE</code> without <code>WHERE</code>, which changes every row.</li>
                    <li>Using <code>= NULL</code> instead of <code>IS NULL</code>.</li>
                    <li>Building queries from raw user input; use prepared statements from PHP.</li>
                </ul>
                <h3 class="fs-6">Practice projects</h3>
                <ul><li>Student enrollment database</li><li>Library borrowing system</li><li>Blog with users, posts and comments</li></ul>
                <h3 class="fs-6">What to learn next</h3>
                <p>Indexes, subqueries, transactions, backups with <code>mysqldump</code>, and connecting from PHP with PDO.</p>
            </section>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>