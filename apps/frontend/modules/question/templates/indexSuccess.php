<h1>All Questions</h1>

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Question Title</th>
        <th>Author</th>
        <th>Category</th>
        <th>Date</th>
        <th></th>
    </tr>
    </thead>
  <tbody>
    <?php foreach ($forum_questionss as $forum_questions): ?>
    <tr>
      <td><?php echo $forum_questions->getTitle() ?></td>
      <td><?php echo $forum_questions->getAuthorName() ?></td>
      <td><?php echo $forum_questions->getCategoryName() ?></td>
      <td><?php echo $forum_questions->getCreatedAt() ?></td>
        <td>
            <a href="<?php echo url_for('question/'.$forum_questions->getId()) ?>">READ</a>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('question/new') ?>">New</a>
