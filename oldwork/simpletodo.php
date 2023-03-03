
<br><br><br><hr><br><br>

<h2>Tasks for Fun</h2>
    <ul>
            <?php foreach ($fun as $fun) : ?>
                <li>
                    <?php if ($fun->completed): ?>

                    <span><?=$fun->description. ' &#9989' ?></span>

                    <?php else : ?>

                    <?= $fun->description; ?>

                    <?php endif ?>
                </li>
            <?php endforeach ;?>
    </ul>
    
<br><br><hr><br><br><br>

<h1>To Do List</h1>

    <ul>
        <li>
            <strong>Name: </strong><?= $tasktodo['Title'];  ?>
        </li>

        <li>
            <strong>Due Date: </strong><?= $tasktodo['Due Date'];  ?>
        </li>

        <li>
            <strong>Responsible: </strong><?= $tasktodo['Assigned To'];  ?>
        </li>

        <li>
            <strong>Status: </strong>
            
            <?php
                if ($tasktodo['Completed']){
                    echo 'Completed';
                } else {
                    echo 'Incomplete';
                }
            ?>
            <!-- Short Hand for if/else -->
            <!-- <?= $tasktodo['Completed']? 'Complete' : 'Incomplete'; ?> -->
        </li>
        
        <li>
            <strong>Grade: </strong>
            <?php if ($tasktodo['Grade']) : ?>
                <span>&#9989</span>
            <?php else :?>
                <span>FAIL</span>
            <?php endif ;?>
    <!-- Short hand for if/else statement -->
            <!-- <strong>Grade: </strong> <?= $tasktodo['Grade']? 'Pass' : 'Fail'; ?> -->
    
    
        </li>
    <!-- Fast way to list out an array  -->

        <!-- <?php foreach ($tasktodo as $taskinfo => $taskvalue) : ?>
        <li><strong><?= $taskinfo. ': ' ?></strong><?= $taskvalue ?></li>
        <?php endforeach; ?> -->
    </ul> 