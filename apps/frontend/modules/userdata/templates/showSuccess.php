<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $userdata->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $userdata->getUserId() ?></td>
    </tr>
    <tr>
      <th>Information:</th>
      <td><?php echo $userdata->getInformation() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $userdata->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $userdata->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('userdata/edit?id='.$userdata->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('userdata/index') ?>">List</a>
