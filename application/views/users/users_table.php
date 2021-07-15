<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php foreach($users as $key=>$user){?>

    <tr <?= $id==$user->id?'class="success"':''?> onclick="select_user('<?= $user->id?>', '<?= $key+1?>')" style="cursor:pointer;word-break:break-all">
        
        <td><?= $user->first_name?></td>

        <td><?= $user->last_name?></td>

        <td><?= $user->user_name?></td>

        <td>

            <button class="btn btn-default btn-xs purple margin-right-5 margin-bottom-5" onclick="user_modal(<?= $user->id?>)"><i class="fa fa-edit"></i> Edit</a>

            <button class="btn btn-default btn-xs black margin-bottom-5" onclick="delete_user(<?= $user->id?>)"><i class="fa fa-trash-o"></i> Delete</a>

        </td>

    </tr>

<?php }?>

<script>

    $("tr.success").click();

</script>