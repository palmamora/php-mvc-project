<div class="div-background">
    <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
    <button class="btn btn-secondary"><a href="<?php echo URL ?>login/logout">Logout</a></button>
    <?php
        if ($_SESSION['role']=='owner') {
            echo '<button class="btn btn-secondary">
            <a href="' . URL . 'user/users">Users</a></button>';
        }
    ?>
</div>

<div class="div-background">
    <form id="randomInsert" method="post" action="<?php echo URL; ?>dashboard/xhrInsert">
        <input type="text" name="text" id="">
        <input class="btn btn-primary" type="submit" id="send" value="submit">
    </form>
</div>

<div class="div-background" id="list">

</div>

<div class="div-background">
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>data</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody id="tableList">

    </tbody>
</table>
</div>