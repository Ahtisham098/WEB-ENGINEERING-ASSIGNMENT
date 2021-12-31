@@ -19,25 +19,8 @@
    <?php include_once('navbar.php') ?>
    <div class="container">

        <?php

        require_once('utilities.php');
        $conn = getConnection();
        // $posts = $conn->query("SELECT * FROM " . TABLE . " ORDER BY id DESC");
        $posts = $conn->query("SELECT * FROM " . TABLE);
        foreach ($posts as $key=>$post) :
        ?>
            <div class="jumbotron jumbotron-fluid bg-light border border-warning m-2">
                <div class="container">
                    <h1 class="display-4">#<?= $key + 1 ?>. <?= $post['title'] ?></h1>
                    <div class="small float-right">Posted By: <?= $post['user'] ?></div>
                    <div class="small float-right">Posted At: <?= $post['createdAt'] ?></div>
                    <hr>
                    <p class="lead"><?= $post['body'] ?></p>
                </div>
            </div>
        <?php
        endforeach
        <?php require_once('components.php');
        getPosts();
        ?>

    </div>
