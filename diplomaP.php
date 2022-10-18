<!DOCTYPE html>
<?php require "libP.php" ?> 
<?php session_start() ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
     <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <?php if(userRole()==1): ?>
            <th>Update</th>
            <th>Delete</th>
            <?php endif; ?> 
        </tr>
        <?php $data = Alldata() ?>
        <?php foreach($data as $user): ?>
         <tr>
            <td><?= $user['ID']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <!-- <?php if(userRole()==1): ?> -->
            <td><a href="updateuserP.php?ID=<?= $user['ID']?>" >Update</a></td>
            <td><a href="deleteuserP.php?ID=<?= $user['ID']?>" >Delete</a></td>
            <!-- <?php endif; ?> -->
        </tr>
        <?php endforeach; ?>
        <!-- <?php echo "user role " . $_SESSION['user']['user_role']; ?> -->
    </table>
    </form>
  </body>
</html>

