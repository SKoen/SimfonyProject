<h1>Forum userss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Password</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($forum_userss as $forum_users): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id='.$forum_users->getId()) ?>"><?php echo $forum_users->getId() ?></a></td>
      <td><?php echo $forum_users->getUsername() ?></td>
      <td><?php echo $forum_users->getPassword() ?></td>
      <td><?php echo $forum_users->getCreatedAt() ?></td>
      <td><?php echo $forum_users->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
