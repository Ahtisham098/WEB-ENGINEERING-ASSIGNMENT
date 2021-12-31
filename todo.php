@@ -35,35 +35,10 @@
            <input type="text" class="form-control" name="task" placeholder="Type task...">
            <button class="btn btn-outline-secondary" type="submit" name='addTask' id="button-addon2">Add</button>
        </form>
        <?php if (isset($_SESSION['todo'])) : ?>
            <?php if (count($_SESSION['todo']) > 0) : ?>
                <table class='table'>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['todo'] as $key => $task) : ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td><?= $task ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="text" name="item" value="<?= $key ?>" hidden>
                                        <!-- <input type="text" name="item" value="test" > -->
                                        <button class="btn btn-danger" name='del' type="submit">X</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            <?php endif ?>
        <?php endif ?>

        <?php require_once('components.php');
        getTodoDisplay();
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
