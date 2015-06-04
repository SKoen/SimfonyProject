<div class="col-lg-12">
    <h2><?= $forum_questions->getTitle(); ?></h2>
    <div class="col-md-2"><?= $forum_questions->getAuthorName() ?></div>
    <div class="col-md-10"><?= $forum_questions->getCreatedAt() ?></div>
    <div class="form-group">
        <label for="textArea" class="col-lg-2 control-label"></label>
        <div class="col-lg-10">
            <textarea class="form-control"  id="disabledInput" rows="3" disabled=""><?= $forum_questions->getText() ?></textarea>
        </div>
        <br>
    </div>
    <div class="col-lg-10" >SEEN <span class="badge"><?= $forum_questions->getNumViews()  ?></span></div>
    <div onclick="showhideanswers()" class="col-lg-1 btn-xs btn-primary" id="showhidebutton" >Write Answer</div>
</div>

