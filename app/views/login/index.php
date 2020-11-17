<div class="form" style="display:flex;align-items:center;justify-content:center;height:90vh">
    <form action="<?php echo URL ?>login/auth" method="post" class="form card p-3" style="max-width:400px;display:flex;flex-flow:column nowrap;">
    <div class="form-group d-flex justify-content-center">
    <label for=""><h3>Please, Login</h3></label>
    </div>
    <div class="form-group">
    <label>Username: </label>
    <input type="text" name="username" id="" class="form-control">
    </div>
    <div class="form-group">
    <label>Password: </label>
    <input type="password" name="password" id="" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">login</button>
    </form>
</div>