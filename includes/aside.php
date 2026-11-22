<aside class="col-md-2 sidebar">
    <?php
        $tips = [
            //Fun facts
            ['type' => 'Fun Fact', 'text' => 'The first computer "bug" was a real moth found stuck in a relay of the Harvard Mark II in 1947. Grace Hopper\'s team taped it into the logbook.'],
            ['type' => 'Fun Fact', 'text' => 'Python is named after the comedy group Monty Python, not the snake.'],
            ['type' => 'Fun Fact', 'text' => 'Java was originally called Oak, after a tree outside its creator\'s office window.'],
            ['type' => 'Fun Fact', 'text' => 'PHP originally stood for "Personal Home Page" before it became "PHP: Hypertext Preprocessor".'],
            ['type' => 'Fun Fact', 'text' => 'MySQL is named after My, the daughter of co-founder Michael "Monty" Widenius.'],
            ['type' => 'Fun Fact', 'text' => 'Brendan Eich created the first version of JavaScript in about 10 days in 1995.'],
            ['type' => 'Fun Fact', 'text' => 'Ada Lovelace wrote what is considered the first computer program in 1843, for a machine that was never built.'],
            ['type' => 'Fun Fact', 'text' => 'Unix time counts the seconds since January 1, 1970 (the "Unix epoch"). Most systems still keep time this way.'],
            ['type' => 'Fun Fact', 'text' => 'Ray Tomlinson sent the first network email in 1971 and chose the @ symbol to separate user from machine.'],
            ['type' => 'Fun Fact', 'text' => 'The first website, info.cern.ch, went live in 1991 and is still online today.'],

            //Advice
            ['type' => 'Advice', 'text' => 'Always use prepared statements for SQL queries. It is the simplest way to block SQL injection.'],
            ['type' => 'Advice', 'text' => 'Commit early and often. Small commits make bugs easier to find and undo.'],
            ['type' => 'Advice', 'text' => 'Read the error message carefully. It usually tells you the file, the line, and the problem.'],
            ['type' => 'Advice', 'text' => 'Use meaningful names. $totalPrice beats $x every time.'],
            ['type' => 'Advice', 'text' => 'Stuck on a bug? Explain it out loud to a rubber duck. Putting it into words often reveals the answer.'],
            ['type' => 'Advice', 'text' => 'Test small pieces as you go instead of writing 200 lines and hoping they all work.'],
            ['type' => 'Advice', 'text' => 'Take breaks. Many bugs are solved right after you step away from the screen.'],
            ['type' => 'Advice', 'text' => 'Back up your files and database before making big changes.'],
            ['type' => 'Advice', 'text' => 'Comment on why your code does something, not what it does. The code already shows the what.'],
            ['type' => 'Advice', 'text' => 'Never paste code you do not understand. Learn what it does first, then use it.'],
            ['type' => 'Advice', 'text' => 'Never trust user input. Validate and sanitize everything before using it.'],

            //Quotes
            ['type' => 'Quote', 'text' => 'Any fool can write code that a computer can understand. Good programmers write code that humans can understand.', 'author' => 'Martin Fowler'],
            ['type' => 'Quote', 'text' => 'Talk is cheap. Show me the code.', 'author' => 'Linus Torvalds'],
            ['type' => 'Quote', 'text' => 'Premature optimization is the root of all evil.', 'author' => 'Donald Knuth'],
            ['type' => 'Quote', 'text' => 'Simplicity is prerequisite for reliability.', 'author' => 'Edsger W. Dijkstra'],
            ['type' => 'Quote', 'text' => 'Debugging is twice as hard as writing the code in the first place.', 'author' => 'Brian Kernighan'],
            ['type' => 'Quote', 'text' => 'First, solve the problem. Then, write the code.', 'author' => 'John Johnson'],
            ['type' => 'Quote', 'text' => 'The best way to predict the future is to invent it.', 'author' => 'Alan Kay'],
            ['type' => 'Quote', 'text' => 'Everybody should learn to program a computer, because it teaches you how to think.', 'author' => 'Steve Jobs'],
            ['type' => 'Quote', 'text' => 'The most dangerous phrase in the language is "We\'ve always done it this way."', 'author' => 'Grace Hopper'],
        ];

        $tip = $tips[intdiv(time(), 60) % count($tips)];
    ?>
    <hr>
    
    <h2 style="color: #9013FEFF" class="fs-5">Hi, Cohort!</h2>
    <div class="totd-box">
        <h4 class="h6"><?= htmlspecialchars($tip['type']) ?></h4>
        <p>"<?= htmlspecialchars($tip['text']) ?>"</p>
    </div><br>
    
    <h2 style="color: #9013FEFF" class="fs-5">Docs</h2>
    <ul>
        <a href="https://dev.java/learn/"><h4 class="animated-link h6">Java Docs</h4></a>
        <a href="https://docs.python.org/3/"><h4 class="animated-link h6">Python Docs</h4></a>
        <a href="https://en.cppreference.com/w/c"><h4 class="animated-link h6">C Reference</h4></a>
        <a href="https://learn.microsoft.com/en-us/dotnet/csharp/"><h4 class="animated-link h6">C# Docs</h4></a>
        <a href="https://en.cppreference.com/w/cpp"><h4 class="animated-link h6">C++ Reference</h4></a>
        <a href="https://www.php.net/manual/en/"><h4 class="animated-link h6">PHP Manual</h4></a>
        <a href="https://dev.mysql.com/doc/"><h4 class="animated-link h6">MySQL Docs</h4></a>
    </ul>
    <br>
    <h2 style="color: #9013FEFF" class="fs-5">References</h2>
    <ul>
        <a href="https://www.freecodecamp.org/"><h4 class="animated-link h6">freeCodeCamp</h4></a>
        <a href="https://www.php.net/"><h4 class="animated-link h6">PHP.net</h4></a>
        <a href="https://developer.mozilla.org/"><h4 class="animated-link h6">MDN Web Docs</h4></a>
        <a href="https://www.w3schools.com/"><h4 class="animated-link h6">W3Schools</h4></a>
        <a href="https://www.geeksforgeeks.org/"><h4 class="animated-link h6">GeeksForGeeks</h4></a>
        <a href="https://stackoverflow.com/"><h4 class="animated-link h6">Stack Overflow</h4></a>
        <a href="https://devdocs.io/"><h4 class="animated-link h6">DevDocs</h4></a>
        <a href="https://roadmap.sh/"><h4 class="animated-link h6">roadmap.sh</h4></a>
        <a href="https://getbootstrap.com/docs/"><h4 class="animated-link h6">Bootstrap Docs</h4></a>
    </ul>
    <hr>
    
</aside>