<?php

function setComments($db)
{
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments(uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $db->query($sql);
    }
}

function getComments($db)
{
    $sql = "SELECT * FROM comments";
    $result = $db->query($sql);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='comment-box'><p><b>";
        echo $row['uid'] . "<br>";
        echo "</b>";
        echo "<i>";
        echo $row['date'] . "<br><br>";
        echo "</i>";
        echo nl2br($row['message']);
        echo "</p></div>";
    }
}