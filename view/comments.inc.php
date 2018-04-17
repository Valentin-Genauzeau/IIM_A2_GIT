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
        echo "</p><form class='edit-form' method='POST' action='editcomment.php'>
                    <input type='hidden' name='cid' value='" . $row['uid'] . "'>
                    <input type='hidden' name='uid' value='" . $row['uid'] . "'>
                    <input type='hidden' name='date' value='" . $row['date'] . "'>
                    <input type='hidden' name='message' value='" . $row['message'] . "'>
                    <button class='btn btn-primary'>Éditer</button>
                  </form>
              </div>";
    }
}

function editComments($db)
{
    if (isset($_POST['commentSubmit'])) {
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments(uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $db->query($sql);
    }
}