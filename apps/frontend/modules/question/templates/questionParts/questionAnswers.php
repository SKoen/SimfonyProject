<div class="form-group" id="answers">
    <legend>Answers</legend>
    <?php foreach($forum_answers as $answer): ?>
        <legend class="control-label">
            <div class="col-lg-3 text-primary middleText">Name: <?= $answer->getAuthorName() ?></div>
            <div class="col-lg-3 text-primary middleText">Email: <?= $answer->getAuthorEmail() ?></div>
        </legend>

        <div class="col-lg-12">
            <textarea class="form-control" rows="5" id="textArea" disabled=""><?= $answer->getText() ?></textarea>
            <div class="help-block text-success"><?= $answer->getCreatedAt() ?></div>
        </div>
    <?php endforeach ?>
</div>