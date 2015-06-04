<nav class="navbar navbar-default col-md-12">

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/question">Questions</a></li>
        </ul>
        <?php //if($this->getAttribute($this->getUser()->IsAuthenticated())): ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo url_for('user/login')?>">Login</a></li>
                <li><a href="<?php echo url_for('user/register')?>">Register</a></li>
            </ul>
        <?php// endif; ?>

<!--        --><?php // if($this->isLoggedIn): ?>
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li><a href="/questions/user/--><?//=$_SESSION['username']?><!--">My Questions</a></li>-->
<!--                <li><a >Welcome, --><?php //echo $_SESSION['username'] ?><!--</a></li>-->
<!--                <li><a href="/accounts/logout">Logout</a></li>-->
<!--            </ul>-->
<!--        --><?php // endif; ?>

    </div>

</nav>
<row>
    <div class="col-md-1"></div>
    <div class="col-md-10">