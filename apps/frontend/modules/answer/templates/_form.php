<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="col-lg-12 answer" id="postanswer" style="display: none">
<form action="<?php echo url_for('answer/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

    <?php echo $form->renderHiddenFields() ?>
    <?php echo $form->renderGlobalErrors() ?>

    <fieldset>
        <legend>Write your answer</legend>
        <div class="form-group">
            <label for="name" class="col-lg-2 control-label" >Name</label>
            <div class="col-lg-10">
                <?php if(isset($_SESSION['username'])){ ?>
                    <input type="text" name="authorName" disabled="" class="form-control" placeholder=<?=$_SESSION['username']?>>
                <?php } else { ?>
                    <input type="text" name="forum_answer[authorName]" class="form-control" placeholder="Name">
                <?php } ?>
            </div>
        </div>
        <div class="form-group">
           <label for="email" class="col-lg-2 control-label">Email</label>
           <div class="col-lg-10">
               <input type="email" name="forum_answer[authorEmail]" class="form-control" placeholder="Email">
               <span class="help-block">Optional*</span>
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
                <textarea class="form-control" name="forum_answer[text]" rows="3" id="textArea"></textarea>

            </div>
        </div>
        <input type="hidden" name="forum_answer[question_Id]" value="<?= $question_id ?>">
        <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Cancel</button>
        </div>
    </fieldset>
</form>
</div>
