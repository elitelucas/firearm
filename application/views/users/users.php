<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="page-container">

    <div class="page-content">

        <div class="page-body">

            <div class="row">

                <div class="col-xs-12 col-md-6">

                    <div class="well with-header">

                        <div class="header">

                            <button type="button" class="btn btn-primary" onclick="user_modal(0)"><i class="fa fa-plus"></i> Add User</button>
                        
                        </div>

                        <div id="users_table">

                            <table class="table table-striped table-bordered table-hover">

                                <thead class="bordered-blue">

                                    <tr>

                                        <th>First Name</th>

                                        <th>Last Name</th>

                                        <th>User Name</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    
                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                <div class="col-xs-12 col-md-6">

                    <div class="tabbable">

                        <ul class="nav nav-tabs">

                            <li class="active" id="personal_tab">

                                <a data-toggle="tab" href="#personal">

                                    Personal Information

                                </a>

                            </li>

                            <li class="tab-red" id="contact_tab">

                                <a data-toggle="tab" href="#contact">

                                    Contact Information

                                </a>

                            </li>

                        </ul>

                        <div class="tab-content radius-bordered" id="user_detail">
                        
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="bootbox modal fade modal-darkorange" id="myModal" role="dialog" data-backdrop="static">
    
            <div class="modal-dialog modal-md ui-draggable">

                <div class="modal-content">                    

                </div>

            </div>
        
        </div>

    </div>

</div>