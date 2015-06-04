<form class="form-horizontal" method="post" action="/accounts/register">
    <fieldset>
        <legend>Register</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">UserName :</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Full Name :</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" name="name" placeholder="Full Name">
            </div>
        </div>
    </fieldset>
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Cancel</button>
        </div>
    </div>
</form>