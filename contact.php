<?php
include 'includes/db.php';

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $message = trim($_POST['message']);

    if ($name !== '' && $message !== '') {
        $stmt = mysqli_prepare($conn, "INSERT INTO messages (name, message) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $name, $message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    header("Location: contact.php?posted=1");
    exit;
}

$pageTitle = "Contact Us - Code Cohort";
include 'includes/head.php';
?>

<body>
    <?php include 'includes/header.php';?><br>
    <div class="page-container">
        <div class='addmessage-form'>
            <h2>Leave your feedbacks here!</h2><br>

            <form method="post" action="">
                Name:  &nbsp;&nbsp;<input type="text" name="name" class="name-field" required><br><br>
                Message:<br><br>
                <textarea name="message" rows="4" cols="50" class="message-field" required></textarea><br><br>
                <input type="submit" name="submit" id="postmsg-button" value="Post Message">
            </form>

            <div class='posted-messages'>
                <?php
                $sql = "SELECT * FROM messages ORDER BY date_posted DESC";
                $result = mysqli_query($conn, $sql);

                
                    if (mysqli_num_rows($result) > 0) {
                        echo "<ul>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            $time = strtotime($row["date_posted"]);

                        if (date("Y-m-d", $time) == date("Y-m-d")){
                            $formatted = "Today at " . date("h:i A", $time);
                        } else {
                        $formatted = date("M d, Y", $time) . " at " . date("h:i A", $time);  
                        }
                            echo "<li><strong>" . htmlspecialchars($row["name"]) . "</strong> <em>(" . $formatted . ")</em><br>" .  nl2br(htmlspecialchars($row["message"])) . "</li>";
                        
                        }
                        echo "</ul>";
                    } else {
                        echo "<p>No messages yet. Be the first to post!</p>";
                    }
                    ?>
            </div>
        </div>

        <section class="contact-container">
            <h4>Reach out to us!</h4>
            <ul>
                <li>Email: contact@codecohort.com</li>
                <li>Phone: +63 900 000 0000</Li>
                <li>Address: 123 Rizal St., Legazpi City, Albay, Philippines 4500</li>
            </ul>
        </section>
    </div>
    <?php include 'includes/footer.php';?>

</body>