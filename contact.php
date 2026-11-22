<?php
include 'includes/db.php';
$pageTitle = "Contact Us - Code Cohort";
include 'includes/head.php';
?>

<body>
    <?php include 'includes/header.php';?><br>
    <div class="page-container">
        <div class='addmessage-form'>
            <h2>Add a New Message</h2>

            <form method="post" action="">
                Name:  &nbsp;&nbsp;<input type="text" name="name" class="name-field" required><br><br>
                Message:<br><br>
                <textarea name="message" rows="4" cols="50" class="message-field" required></textarea><br><br>
                <input type="submit" name="submit" id="postmsg-button" value="Post Message">
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $message = $_POST['message'];

                $stmt = mysqli_prepare($conn, "INSERT INTO messages (name, message) VALUES (?. ?)");
                mysqli_stmt_bind_param($stmt, "ss", $name, $messsage);

                if (mysqli_stmt_execute($stmt)) {
                    echo "<p>Message posted successfully!</p>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                mysqli_stmt_close($stmt);
            }
            ?>


            <section class='posted-messages'>
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
    </section>
        </div>
    </div>
    <?php include 'includes/footer.php';?>

</body>