
    <?php require ('templates/head.php');?>

<br><br><b><hr></b>
<h1>Home Page</h1>
    <!-- <h1>Submit Your Name</h1>

    <form method="POST" action= "/todos">
        <input name="name">
        <button type="submit">Submit</button>
    </form>



<h1>TASKS FOR MYSQL</h1>
        <ul>
            <?php foreach ($tasks as $tasks) : ?>
            <li>
                <?php if ($tasks->completed): ?>

                    <strike><?=$tasks->description?></strike>
                    
                <?php else : ?>

                <?= $tasks->description; ?>

                <?php endif ?>

            </li>
            <?php endforeach; ?>
        </ul> -->


    <?php  ('oldwork/simpletodo.php');?>

    <?php  ('templates/footer.php');?>
