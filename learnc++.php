<?php
$pageTitle = "Learn C++ - Code Cohort";
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
                    <h2>Overview of C++</h2>
                    <h4>C with classes, templates and a rich standard library: built for speed and control.</h4>
                </div>
                <br>
                <section id="background">
                    <h2 class="fs-5">Short Background</h2>
                    <p>C++ was created by Bjarne Stroustrup at Bell Labs starting in 1979 as "C with Classes" and renamed C++ in 1983. It extends C with object-oriented and generic programming. It is used for game engines, operating systems, browsers, embedded systems and competitive programming.</p>
                </section>

                <section id="basics">
                    <h2 class="fs-5">Basics</h2>
                    <h3 class="fs-6">Hello, World</h3>
                    <?php code('cpp', <<<'CODE'
                    #include <iostream>
                    using namespace std;

                    int main() {
                        cout << "Hello, World!" << endl;
                        return 0;
                    }
                    CODE); ?>
                    <h3 class="fs-6">Variables and input</h3>
                    <?php code('cpp', <<<'CODE'
                    int age = 20;
                    double gpa = 1.75;
                    bool enrolled = true;
                    string name = "Gabriel";   // needs #include <string>

                    int n;
                    cin >> n;
                    cout << name << " is " << age << endl;
                    CODE); ?>
                    <h3 class="fs-6">Conditions and loops</h3>
                    <?php code('cpp', <<<'CODE'
                    if (age >= 18) cout << "Adult\n";
                    else cout << "Minor\n";

                    for (int i = 1; i <= 5; i++) cout << i << "\n";

                    int nums[] = {1, 2, 3};
                    for (int x : nums) cout << x << " ";   // range-based for
                    CODE); ?>
                    <h3 class="fs-6">Functions and references</h3>
                    <?php code('cpp', <<<'CODE'
                    int add(int a, int b) { return a + b; }

                    void addOne(int &x) { x++; }   // & = pass by reference
                    int v = 5;
                    addOne(v);                     // v is now 6
                    CODE); ?>
                    <h3 class="fs-6">Vectors (dynamic arrays)</h3>
                    <?php code('cpp', <<<'CODE'
                    #include <vector>

                    vector<string> names = {"Ana", "Ben"};
                    names.push_back("Cy");
                    for (const string &n : names) cout << n << "\n";
                    cout << names.size();
                    CODE); ?>
                    <h3 class="fs-6">Classes</h3>
                    <?php code('cpp', <<<'CODE'
                    class Student {
                    public:
                        string name;
                        Student(string n) : name(n) {}
                        void greet() { cout << "Hi, " << name << endl; }
                    };

                    Student s("Gabriel");
                    s.greet();
                    CODE); ?>
                </section>

                <section id="materials">
                    <h2 class="fs-6">Learning Materials</h2>
                    <div class="row g-3">
                        <?php
                        material('video', 'Beginner course', 'ZzaPdXTrSb8');
                        material('video', 'Quick tutorial', 'RSDzvlXmQi4');
                        material('article', 'cppreference.com', 'https://en.cppreference.com/w/');
                        material('article', 'Practice problems', 'https://www.w3schools.com/cpp/cpp_exercises.asp');
                        material('quiz', 'Quizlet flashcards', 'https://quizlet.com/35029781/match/embed?i=7es5bi&x=1jj1');
                        ?>
                    </div>
                </section>
                <br><br>
                <section id="more">
                    <h2 class="fs-5">Other Learning Information</h2>
                    <h3 class="fs-6">Setup</h3>
                    <p>Install g++ (MinGW-w64 on Windows) and the C/C++ extension in VS Code. Compile with <code>g++ main.cpp -o main</code> and run <code>./main</code>.</p>
                    <h3 class="fs-6">Common mistakes</h3>
                    <ul>
                        <li>Using <code>=</code> instead of <code>==</code> in conditions.</li>
                        <li>Reading past the end of arrays or vectors.</li>
                        <li>Mixing <code>cin</code> and <code>getline</code> (leftover newline).</li>
                        <li>Using raw <code>new</code> without <code>delete</code>; prefer vectors and smart pointers.</li>
                    </ul>
                    <h3 class="fs-6">Practice projects</h3>
                    <ul><li>Bank account class</li><li>Text-based quiz game</li><li>Library system with vectors</li></ul>
                    <h3 class="fs-6">What to learn next</h3>
                    <p>Inheritance and polymorphism, the STL (map, set, algorithms), templates, smart pointers, file streams.</p>
                </section>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>