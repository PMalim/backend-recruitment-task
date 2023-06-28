<?php
$users = $models["users"];
/**
 * @var \app\models\User[] $users
 */
?>
<div class="container">
    <h1>
        Backend/Full-stack recruitment task
    </h1>
    <hr>
    <h2>Users</h2>
    <a style="margin:10px 0;" class="button" href="<?=BASE_URL?>/user/create">Add User</a>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Website</td>
                <td>Company</td>
                <td>#</td>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($users as $user) {
                echo '<tr>';
                echo '<td>'.$user->name.'</td>';
                echo '<td>'.$user->username.'</td>';
                echo '<td><a href="'.$user->email.'">'.$user->email.'</a></td>';
                echo '<td>'.$user->address["street"].', '.$user->address["zipcode"].'<br>'.$user->address["city"].'</td>';
                echo '<td>'.$user->phone.'</td>';
                echo '<td>'.$user->website.'</td>';
                echo '<td>'.$user->company["name"].'</td>';
                echo '<td><a class="button" href="user/remove?id='.$user->id.'">Remove</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</div>
