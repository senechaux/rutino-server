<h1>Userdatas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Information</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($userdatas as $userdata): ?>
    <tr>
      <td><a href="<?php echo url_for('userdata/show?id='.$userdata->getId()) ?>"><?php echo $userdata->getId() ?></a></td>
      <td><?php echo $userdata->getUserId() ?></td>
      <td><?php echo $userdata->getInformation() ?></td>
      <td><?php echo $userdata->getCreatedAt() ?></td>
      <td><?php echo $userdata->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('userdata/new') ?>">New</a>
