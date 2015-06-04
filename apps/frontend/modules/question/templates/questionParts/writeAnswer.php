<div class="col-lg-12 answer" id="postanswer" style="display: none">
    <form class="form-horizontal" method="post" action="/answers/createAnswer">
        <fieldset>
            <legend>Write your answer</legend>
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label" >Name</label>
                <div class="col-lg-10">
                    <?php if(isset($_SESSION['username'])){ ?>
                        <input type="text" name="name" disabled="" class="form-control" placeholder=<?=$_SESSION['username']?>>
                    <?php } else { ?>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    <?php } ?>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="help-block">Optional*</span>
                </div>
            </div>
            <div class="form-group">
                <label for="text" class="col-lg-2 control-label">Textarea</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="text" rows="3" id="textArea"></textarea>

                </div>
            </div>
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Cancel</button>
            </div>
        </fieldset>
    </form>
</div>