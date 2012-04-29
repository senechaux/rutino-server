<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Password</th>
      <th>Hash</th>
      <th>Email</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id='.$user->getId()) ?>"><?php echo $user->getId() ?></a></td>
      <td><?php echo $user->getUser() ?></td>
      <td><?php echo $user->getPassword() ?></td>
      <td><?php echo $user->getHash() ?></td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getCreatedAt() ?></td>
      <td><?php echo $user->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
