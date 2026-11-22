<?php
    $pageTitle = "Learn C - Code Cohort";
    include 'includes/head.php';
    require_once 'includes/learn-helpers.php';
   
?>

<body>
    <?php include 'includes/header.php';?>

    <div class="page-container">
            <?php include 'includes/aside.php';?>
            <main class="learnpage-content">
                <a href="learn.php"><div class="returnlearnpage-button">&larr;</div></a><br>
                <section id="title">
                    <h2>Overview of C</h2>
                    <h4>A fast, low-level language that teaches how programs really work with memory.</h4>
                </section>
                <br>
                <section id="background">
                    <h2 class="fs-5">Short Background</h2>
                    <p>C was developed by Dennis Ritchie at Bell Labs around 1972 to build the Unix operating system. 
                        It gives direct control over memory through pointers, which makes it extremely fast and the base of operating systems, embedded devices and many other languages (C++, C#, Java and PHP borrow its syntax).
                    </p>
                </section>

                <section id="basics">
                    <h2 class="fs-5">Basics</h2>
                    <h3 class="fs-6">Hello, World</h3>
                        <?php code('c', <<<'CODE'
                            #include <stdio.h>

                            int main(void) {c
                                printf("Hello, World!\n");
                                return 0;
                            }
                        CODE); ?>
                    <h3 class="fs-6">Variables and input</h3>
                            <?php code('c', <<<'CODE'
                            int age = 20;
                            float gpa = 1.75f;
                            char grade = 'A';
                            char name[20] = "Gabriel";

                            int n;
                            scanf("%d", &n);          // note the & for numbers
                            printf("Age %d, GPA %.2f\n", age, gpa);
                            CODE); ?>
                    <p class="small">Format specifiers: <code>%d</code> int, <code>%f</code> float/double, <code>%c</code> char, <code>%s</code> string.</p>
                    <h3 class="fs-6">Conditions and loops</h3>
                        <?php code('c', <<<'CODE'
                            if (age >= 18) {
                                printf("Adult\n");
                            } else {
                                printf("Minor\n");
                            }

                            for (int i = 1; i <= 5; i++) {
                                printf("%d\n", i);
                            }
                        CODE); ?>
                    <h3 class="fs-6">Functions</h3>
                    <?php code('c', <<<'CODE'
                    int add(int a, int b) {
                        return a + b;
                    }
                    // printf("%d", add(2, 3));
                    CODE); ?>
                    <h3 class="fs-6">Arrays and pointers</h3>
                    <?php code('c', <<<'CODE'
                    int nums[3] = {1, 2, 3};
                    int x = 10;
                    int *p = &x;      // p stores the address of x
                    *p = 20;          // x is now 20
                    CODE); ?>
                    <h3 class="fs-6">Structs</h3>
                    <?php code('c', <<<'CODE'
                    struct Student {
                        char name[20];
                        int year;
                    };

                    struct Student s = {"Gabriel", 3};
                    printf("%s\n", s.name);
                    CODE); ?>
                </section>

                <section id="materials">
                    <h2 class="fs-5">Learning Materials</h2>
                    <div class="row g-3">
                        <?php
                        material('video', 'Beginner course');
                        material('video', 'Pointers explained');
                        material('article', 'Reference (cppreference C section)');
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
                    <p>Install GCC (MinGW-w64 on Windows) and the C/C++ extension in VS Code. Compile with <code>gcc main.c -o main</code> and run <code>./main</code> (<code>main.exe</code> on Windows).</p>
                    <h3 class="fs-6">Common mistakes</h3>
                    <ul>
                        <li>Forgetting <code>&amp;</code> in <code>scanf</code> for numbers.</li>
                        <li>Using uninitialized variables.</li>
                        <li>Going past the end of an array (C does not check bounds).</li>
                        <li>Forgetting <code>free()</code> after <code>malloc()</code>.</li>
                    </ul>
                    <h3>Practice projects</h3>
                    <ul><li>Calculator</li><li>Student records with structs</li><li>Tic-tac-toe in the console</li></ul>
                    <h3 class="fs-6">What to learn next</h3>
                    <p>Strings, dynamic memory (<code>malloc</code>/<code>free</code>), file I/O, linked lists, then move on to C++.</p>
                </section>
            </main>
    </div>
        <?php learn_close(); include 'includes/footer.php'; ?>
    
</body>