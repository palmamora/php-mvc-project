<div class="row d-flex justify-content-center">
    <h3>Users</h3>
</div>
<div class="row">
    <div class="col-4">
        <div class="container" style="display: flex;justify-content:center;">
            <form class="bg-light p-4" style="display:flex;flex-flow:column nowrap;width:75%" action="<?=URL?>user/create" method="post">
            <h3>Create User</h3>
                <label for="username">Username:</label>
                <input type="text" name="username" id="">
                <label for="email">Email:</label>
                <input type="email" name="email" id="">
                <label for="role">Role:</label>
                <select name="role" id="">
                    <option value="default">default</option>
                    <option value="admin">admin</option>
                    <option value="owner">owner</option>
                </select>
                <label for="password">Password:</label>
                <input type="text" name="password" id="">
                <br>
                <input type="submit" value="Create" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="col-8">
        <div class="container">
            <table class="table table-hover bg-light">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">username</th>
                        <th scope="col">email</th>
                        <th scope="col">role</th>
                        <th scope="col" colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($e = $this->users->fetch_assoc()) {
                        echo '<tr class="table-active">';
                        echo '<td>' . $e['id'] . '</td>';
                        echo '<td>' . $e['username'] . '</td>';
                        echo '<td>' . $e['email'] . '</td>';
                        echo '<td>' . $e['role'] . '</td>';

                        echo '<td><button class="btn btn-success"><a href="' . URL . 'user/edit/' . $e['id'] . '">Editar</a></button></td>';
                        echo '<td><button class="btn btn-danger"><a href="' . URL . 'user/delete/' . $e['id'] . '">Eliminar</a></button></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>