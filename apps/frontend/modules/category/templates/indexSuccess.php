<h1>Forum categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($forum_categorys as $forum_category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?id='.$forum_category->getId()) ?>"><?php echo $forum_category->getId() ?></a></td>
      <td><?php echo $forum_category->getName() ?></td>
      <td><?php echo $forum_category->getCreatedAt() ?></td>
      <td><?php echo $forum_category->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
