<?php
$con = mysqli_connect("localhost", "root", "", "omdada");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Assume you have a user ID
$userId = 1;

// Fetch the due date and time for the user's book
$sql = "SELECT due_date, due_time FROM borrowed_books WHERE user_id = $userId";
$result = $con->query($sql);

if ($result === false) {
    die("Error in SQL query: " . mysqli_error($con));
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $dueDateTime = strtotime($row['due_date'] . ' ' . $row['due_time']);
    $currentDateTime = strtotime(date('Y-m-d H:i:s'));

    // Check if the book is overdue
    $secondsOverdue = $currentDateTime - $dueDateTime;
    $daysOverdue = floor($secondsOverdue / (60 * 60 * 24));

    if ($daysOverdue > 2) {
        // Apply the penalty
        $penaltyAmount = $daysOverdue * 100;

        // Update the user's penalty amount in the database
        $updateSql = "UPDATE users SET penalty_amount = penalty_amount + $penaltyAmount WHERE id = $userId";
        $con->query($updateSql);

        echo "Penalty applied. Penalty amount: $penaltyAmount";
    } else {
        echo "Book is not overdue for more than 7 days.";
    }
} else {
    echo "User not found or has not borrowed any books.";
}

$con->close();
?>
