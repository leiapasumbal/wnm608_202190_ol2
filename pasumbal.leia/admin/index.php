<?php include 'connections.php'; ?>

<nav>
    <div class="container">
        <h2>Users</h2>
        <a href="add.php">Add User</a>
    </div>
</nav>

<div class="container">
    <ul>
        <?php
        $users = readUsers();
        foreach ($users as $user) {
            echo '<li><a href="details.php?name=' . urlencode($user['name']) . '">' . $user['name'] . '</a></li>';
        }
        ?>
    </ul>
</div>
