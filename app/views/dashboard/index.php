<div class="row">
    <div class="col-8"></div>
    <div class="col-2 d-flex justify-content-center">
    <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
    </div>
    <div class="col-2 d-flex justify-content-center">
    <button class="btn btn-danger"><a href="<?php echo URL ?>login/logout">Logout</a></button>
    <?php
if ($_SESSION['role'] == 'owner') {
    echo '<button class="btn btn-info">
                    <a href="' . URL . 'user/users">Users</a></button>';
}
?>
    </div>
</div>

<div class="row">
    <div class="col-12 d-flex justify-content-center">
    <form id="randomInsert" method="post" action="<?php echo URL; ?>dashboard/xhrInsert">
        <input type="text" name="text" id="">
        <input class="btn btn-primary" type="submit" id="send" value="submit">
    </form>
    </div>
</div>
<div class="row d-flex justify-content-center">
        <div class="" id="list"></div>
        <div class="w-50">
            <table class="table table-hover">
                <thead>
                    <tr class="table-active">
                        <th>id</th>
                        <th>data</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody id="tableList">

                </tbody>
            </table>
        </div>
</div>