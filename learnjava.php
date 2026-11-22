<?php
$pageTitle = "Learn Java - Code Cohort";
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
                <h2>Overview of Java</h2>
                <h4>A statically typed, object-oriented language that runs anywhere there is a JVM.</h4>
            </div>
            <br>
            <section id="background">
                <h2 class="fs-5">Short Background</h2>
                <p>Java was created by James Gosling at Sun Microsystems and released in 1995 (now maintained by Oracle). Code is compiled to bytecode that runs on the Java Virtual Machine, hence "write once, run anywhere". It powers Android apps, enterprise back-ends, banking systems, and games like Minecraft: Java Edition.</p>
            </section>

            <section id="basics">
                <h2 class="fs-5">Basics</h2>
                <h3 class="fs-6">Hello, World</h3>
                <?php code('java', <<<'CODE'
                public class Main {
                    public static void main(String[] args) {
                        System.out.println("Hello, World!");
                    }
                }
                CODE); ?>
                <h3 class="fs-6">Variables, types and input</h3>
                <?php code('java', <<<'CODE'
                import java.util.Scanner;

                int age = 20;
                double gpa = 1.75;
                boolean enrolled = true;
                char grade = 'A';
                String name = "Gabriel";

                Scanner sc = new Scanner(System.in);
                String city = sc.nextLine();
                CODE); ?>
                <h3 class="fs-6">Conditions and loops</h3>
                <?php code('java', <<<'CODE'
                if (age >= 18) {
                    System.out.println("Adult");
                } else {
                    System.out.println("Minor");
                }

                for (int i = 1; i <= 5; i++) {
                    System.out.println(i);
                }

                while (age < 25) { age++; }
                CODE); ?>
                <h3 class="fs-6">Methods</h3>
                <?php code('java', <<<'CODE'
                static int add(int a, int b) {
                    return a + b;
                }
                System.out.println(add(2, 3)); // 5
                CODE); ?>
                <h3 class="fs-6">Arrays and ArrayList</h3>
                <?php code('java', <<<'CODE'
                int[] nums = {1, 2, 3};
                System.out.println(nums[0]);

                ArrayList<String> names = new ArrayList<>();
                names.add("Ana");
                names.add("Ben");
                for (String n : names) System.out.println(n);
                CODE); ?>
                <h3 class="fs-6">Classes and objects</h3>
                <?php code('java', <<<'CODE'
                class Student {
                    String name;
                    Student(String name) { this.name = name; }
                    void greet() { System.out.println("Hi, " + name); }
                }

                Student s = new Student("Gabriel");
                s.greet();
                CODE); ?>
            </section>

            <section id="materials">
                <h2 class="fs-5">Learning Materials</h2>
                <div class="row g-3">
                    <?php
                    material('video', 'Beginner course');
                    material('video', 'Quick tutorial');
                    material('article', 'Official docs (dev.java)');
                    material('article', 'Practice problems');
                    material('compiler', 'Online compiler');
                    material('quiz', 'Quizlet flashcards');
                    ?>
                </div>
            </section>
            <br><br>
            <section id="more">
                <h2  class="fs-5">Other Learning Information</h2>
                <h3 class="fs-6">Setup</h3>
                <p>Install a JDK (e.g. Temurin or Oracle JDK) and the "Extension Pack for Java" in VS Code. Compile and run with <code>javac Main.java</code> then <code>java Main</code>.</p>
                <h3 class="fs-6">Common mistakes</h3>
                <ul>
                    <li>The public class name must match the file name.</li>
                    <li>Compare strings with <code>.equals()</code>, not <code>==</code>.</li>
                    <li>Java is case-sensitive: <code>String</code> is not <code>string</code>.</li>
                    <li>Missing semicolons and unbalanced braces.</li>
                </ul>
                <h3 class="fs-6">Practice projects</h3>
                <ul><li>Grade calculator</li><li>ATM simulator</li><li>Student record system using ArrayList</li></ul>
                <h3 class="fs-6">What to learn next</h3>
                <p>Inheritance and interfaces, exceptions, collections (HashMap), file I/O, then JDBC to connect Java to MySQL.</p>
            </section>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>