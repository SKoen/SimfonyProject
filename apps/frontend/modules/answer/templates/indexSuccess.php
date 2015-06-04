<h1>Forum answers List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Text</th>
      <th>Author name</th>
      <th>Question</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($forum_answers as $forum_answer): ?>
    <tr>
      <td><a href="<?php echo url_for('answer/show?id='.$forum_answer->getId()) ?>"><?php echo $forum_answer->getId() ?></a></td>
      <td><?php echo $forum_answer->getText() ?></td>
      <td><?php echo $forum_answer->getAuthorName() ?></td>
      <td><?php echo $forum_answer->getQuestionId() ?></td>
      <td><?php echo $forum_answer->getCreatedAt() ?></td>
      <td><?php echo $forum_answer->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('answer/new') ?>">New</a>
