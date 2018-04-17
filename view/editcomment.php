<body>
<?php
include '_topbar.php';
include 'comments.inc.php';
date_default_timezone_set('Europe/Paris');
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="musicfeed">
                <h1><i class="fa fa-clock-o"></i> Sound Feed</h1>
                <?php
                $cid = $_POST['cid'];
                $uid = $_POST['uid'];
                $date = $_POST['date'];
                $message = $_POST['message'];

                echo "<form class='comments' method='POST' action='" . editComments($db) . "'>
                        <input type='hidden' name='uid' value='" . $uid . "'>
                        <input type='hidden' name='date' value='" . $date . "'>
                        <textarea name='message'>" . $message . "</textarea><br>
                        <button type='submit' name='commentSubmit' class='btn btn-success'>Ajouter un commentaire</button>
                      </form>";
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>


