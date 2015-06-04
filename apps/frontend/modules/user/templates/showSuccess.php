<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $forum_users->getId() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $forum_users->getUsername() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $forum_users->getPassword() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $forum_users->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $forum_users->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id='.$forum_users->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
