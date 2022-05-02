<tr>
    <td><?php echo $user['FullName'];?></td>
    <td><?php echo $user['UserName'];?></td>
    <td><?php echo $user['Email'];?></td>
    <td><?php echo $user['role'];?></td>
    <td><a class="btn btn-primary" href="edit-user.php?id=<?php echo $user['id'];?>">ویرایش</a></td>
    <td><a class="btn btn-primary" href="delete-user.php?id=<?php echo $user['id'];?>">حذف</a></td>
</tr>