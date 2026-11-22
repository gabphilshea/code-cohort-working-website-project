<?php
$pageTitle = "Learn Python - Code Cohort";
include 'includes/head.php';

require_once 'includes/learn-helpers.php';

?>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="page-container">
        <?php include 'includes/aside.php'; ?>

        <main class="learnpage-content">
            <a href="learn.php"><div class="returnlearnpage-button">&larr;</div></a><br>
            <section id="title">
                <h2>Overview of Python</h2>
                <h4>A readable, beginner-friendly language used for automation, web, data science and AI.</h4>
            </section>
            <br>
            <section id="background">
                <h2 class="fs-5">Short Background</h2>
                <p>Python was created by Guido van Rossum and first released in 1991. Its design stresses readability: blocks are defined by indentation instead of braces. It is dynamically typed and interpreted, and is widely used in scripting, web development (Django, Flask), data analysis, machine learning and cybersecurity tooling.</p>
            </section>

            <section id="basics">
                <h2 class="fs-5">Basics</h2>
                <h3 class="fs-6">Hello, World</h3>
                <?php code('python', <<<'CODE'
                print("Hello, World!")
                CODE); ?>
                <h3>Variables and input</h3>
                <?php code('python', <<<'CODE'
                age = 20
                gpa = 1.75
                enrolled = True
                name = "Gabriel"

                city = input("Where do you live? ")
                print(f"{name} lives in {city}")
                CODE); ?>
                <h3 class="fs-6">Conditions and loops</h3>
                <?php code('python', <<<'CODE'
                if age >= 18:
                    print("Adult")
                elif age >= 13:
                    print("Teen")
                else:
                    print("Child")

                for i in range(1, 6):
                    print(i)

                while age < 25:
                    age += 1
                CODE); ?>
                <h3 class="fs-6">Functions</h3>
                <?php code('python', <<<'CODE'
                def add(a, b=0):
                    return a + b

                print(add(2, 3))  # 5
                CODE); ?>
                <h3 class="fs-6">Lists and dictionaries</h3>
                <?php code('python', <<<'CODE'
                names = ["Ana", "Ben"]
                names.append("Cy")
                for n in names:
                    print(n)

                student = {"name": "Gabriel", "year": 3}
                print(student["name"])
                squares = [x * x for x in range(5)]  # list comprehension
                CODE); ?>
                <h3 class="fs-6">Classes</h3>
                <?php code('python', <<<'CODE'
                class Student:
                    def __init__(self, name):
                        self.name = name

                    def greet(self):
                        print(f"Hi, {self.name}")

                Student("Gabriel").greet()
                CODE); ?>
            </section>

            <section id="materials">
                <h2 class="fs-5">Learning Materials</h2>
                <div class="row g-3">
                    <?php
                    material('video', 'Beginner course');
                    material('video', 'Quick tutorial');
                    material('article', 'Official docs (docs.python.org)');
                    material('article', 'Practice problems');
                    material('compiler', 'Online compiler');
                    material('quiz', 'Quizlet flashcards');
                    ?>
                </div>
            </section>
            <br><br>
            <section id="more">
                <h2 class="fs-5">Other Learning Information</h2>
                <h3 class="fs-6">Setup</h3>
                <p>Install Python from python.org (tick "Add to PATH"), add the Python extension in VS Code, and run with <code>python file.py</code>.</p>
                <h3 class="fs-6">Common mistakes</h3>
                <ul>
                    <li>Inconsistent indentation (do not mix tabs and spaces).</li>
                    <li>Forgetting the colon after <code>if</code>, <code>for</code>, <code>def</code>.</li>
                    <li>Treating <code>input()</code> as a number; wrap it with <code>int()</code>.</li>
                </ul>
                <h3 class="fs-6">Practice projects</h3>
                <ul><li>Number guessing game</li><li>To-do list in the terminal</li><li>Simple password generator</li></ul>
                <h3 class="fs-6">What to learn next</h3>
                <p>File handling, modules and <code>pip</code>, virtual environments, then pick a path: Flask (web), pandas (data) or automation scripts.</p>
            </section>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>