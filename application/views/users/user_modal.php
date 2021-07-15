<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="modal-header">

    <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>

    <h4 class="modal-title"><?= empty($user)?'Add User':'Edit User'?></h4>

</div>

<div class="modal-body">

    <div class="bootbox-body">

        <div class="row">

            <div class="col-md-12">

                <div class="form-group">

                    <label class="control-label">First Name</label>

                    <input type="text" id="first_name" class="form-control" placeholder="First Name" value="<?= !empty($user)?$user->first_name:''?>">

                </div>

                <div class="form-group">

                    <label class="control-label">Last Name</label>

                    <input type="text" id="last_name" class="form-control" placeholder="Last Name" value="<?= !empty($user)?$user->last_name:''?>">

                </div>

                <div class="form-group">

                    <label class="control-label">User Name</label>

                    <input type="text" id="user_name" class="form-control" placeholder="User Name" value="<?= !empty($user)?$user->user_name:''?>">

                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal-footer">

    <button type="button" class="btn btn-blue" onclick="save_user(<?= $user->id?>)">Save</button>

    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

</div>