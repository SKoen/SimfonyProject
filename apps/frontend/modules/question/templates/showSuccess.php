<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $forum_questions->getId() ?></td>
    </tr>
    <tr>
      <th>Text:</th>
      <td><?php echo $forum_questions->getText() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $forum_questions->getAuthorId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $forum_questions->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $forum_questions->getTitle() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $forum_questions->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $forum_questions->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('question/edit?id='.$forum_questions->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('question/index') ?>">List</a>
