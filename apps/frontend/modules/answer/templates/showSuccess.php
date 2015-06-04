<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $forum_answer->getId() ?></td>
    </tr>
    <tr>
      <th>Text:</th>
      <td><?php echo $forum_answer->getText() ?></td>
    </tr>
    <tr>
      <th>Author name:</th>
      <td><?php echo $forum_answer->getAuthorName() ?></td>
    </tr>
    <tr>
      <th>Question:</th>
      <td><?php echo $forum_answer->getQuestionId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $forum_answer->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $forum_answer->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('answer/edit?id='.$forum_answer->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('answer/index') ?>">List</a>
