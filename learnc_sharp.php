<?php
$pageTitle = "Learn C# - Code Cohort";
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
                <h2>Overview of C#</h2>
                <h4>A modern, object-oriented language for Windows apps, web back-ends and Unity games.</h4>
            </section>
            <br>
            <section id="background">
                <h2 class="fs-5">Short Background</h2>
                <p>C# (pronounced "C sharp") was designed by Anders Hejlsberg at Microsoft and released in 2000 as part of the .NET platform. It is now open source and cross-platform. It is used for ASP.NET web apps, desktop software, and game development with Unity.</p>
            </section>

            <section id="basics">
                <h2 class="fs-5">Basics</h2>
                <h3 class="fs-6">Hello, World</h3>
                <?php code('csharp', <<<'CODE'
                Console.WriteLine("Hello, World!");
                CODE); ?>
                <p class="small">Modern .NET allows this "top-level statements" form; older tutorials wrap it in <code>class Program { static void Main() { ... } }</code>.</p>
                <h3>Variables and input</h3>
                <?php code('csharp', <<<'CODE'
                int age = 20;
                double gpa = 1.75;
                bool enrolled = true;
                string name = "Gabriel";
                var city = "Naga";                 // type inferred

                Console.Write("Enter a number: ");
                int n = int.Parse(Console.ReadLine());
                Console.WriteLine($"{name} is {age}");
                CODE); ?>
                <h3 class="fs-6">Conditions and loops</h3>
                <?php code('csharp', <<<'CODE'
                if (age >= 18) Console.WriteLine("Adult");
                else Console.WriteLine("Minor");

                for (int i = 1; i <= 5; i++) Console.WriteLine(i);

                foreach (char c in name) Console.Write(c);
                CODE); ?>
                <h3 class="fs-6">Methods</h3>
                <?php code('csharp', <<<'CODE'
                static int Add(int a, int b) => a + b;
                Console.WriteLine(Add(2, 3));   // 5
                CODE); ?>
                <h3 class="fs-6">Arrays and List</h3>
                <?php code('csharp', <<<'CODE'
                int[] nums = { 1, 2, 3 };
                List<string> names = new List<string>();
                names.Add("Ana");
                names.Add("Ben");
                foreach (var n in names) Console.WriteLine(n);
                CODE); ?>
                <h3>Classes and properties</h3>
                <?php code('csharp', <<<'CODE'
                class Student {
                    public string Name { get; set; }
                    public Student(string name) { Name = name; }
                    public void Greet() => Console.WriteLine($"Hi, {Name}");
                }

                new Student("Gabriel").Greet();
                CODE); ?>
            </section>

            <section id="materials">
                <h2 class="fs-5">Learning Materials</h2>
                <div class="row g-3">
                    <?php
                    material('video', 'Beginner course');
                    material('video', 'Quick tutorial');
                    material('article', 'Microsoft Learn: C# docs');
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
                <p>Install the .NET SDK and the "C# Dev Kit" extension in VS Code. Create and run a project with <code>dotnet new console -n MyApp</code> then <code>dotnet run</code>.</p>
                <h3 class="fs-6">Common mistakes</h3>
                <ul>
                    <li>Using <code>int.Parse</code> on text that is not a number (use <code>int.TryParse</code>).</li>
                    <li>Forgetting <code>using System;</code> in older project templates.</li>
                    <li>Method and class names are conventionally PascalCase.</li>
                </ul>
                <h3 class="fs-6">Practice projects</h3>
                <ul><li>Console calculator</li><li>Inventory manager with List&lt;T&gt;</li><li>Simple Unity game later on</li></ul>
                <h3 class="fs-6">What to learn next</h3>
                <p>Inheritance and interfaces, LINQ, exceptions, async/await, then ASP.NET Core or Unity.</p>
            </section>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>