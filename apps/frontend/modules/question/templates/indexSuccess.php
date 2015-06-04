<h1>Forum questionss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Text</th>
      <th>Author</th>
      <th>Category</th>
      <th>Title</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($forum_questionss as $forum_questions): ?>
    <tr>
      <td><a href="<?php echo url_for('question/'.$forum_questions->getId()) ?>"><?php echo $forum_questions->getId() ?></a></td>
      <td><?php echo $forum_questions->getText() ?></td>
      <td><?php echo $forum_questions->getAuthorId() ?></td>
      <td><?php echo $forum_questions->getCategoryId() ?></td>
      <td><?php echo $forum_questions->getTitle() ?></td>
      <td><?php echo $forum_questions->getCreatedAt() ?></td>
      <td><?php echo $forum_questions->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('question/new') ?>">New</a>
