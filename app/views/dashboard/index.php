<div class="div-background">
    <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
    <button class="btn btn-secondary"><a href="<?php echo URL ?>login/logout">Logout</a></button>
    <?php var_dump($_SESSION); ?>
</div>
