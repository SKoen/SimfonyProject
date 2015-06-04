<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $forum_category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $forum_category->getName() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $forum_category->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $forum_category->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?id='.$forum_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
