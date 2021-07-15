<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<script>

    function users_table(){

        $.ajax({

            url: "<?= base_url('/users/users_table')?>",

            success:function(data) {

                $('#users_table tbody').html(data);

            }

        })

    }

    function user_modal(id){

        $.ajax({

            url: "<?= base_url('/users/user_modal')?>/"+id,

            success:function(data) {

                $('#myModal .modal-content').html(data);

                $('#myModal').modal();

            }

        })

    }

    function select_user(id, index){

        $("#users_table tbody tr").removeClass('success');

        $("#users_table tbody tr:nth-child("+index+")").addClass('success');

        $.ajax({

            url: "<?= base_url('/users/user_detail')?>/"+id,

            success:function(data) {

                $('#user_detail').html(data);

                if($('#personal_tab').hasClass('active')){

                    $('#contact').removeClass('active');

                    $('#personal').addClass('active');

                }

                if($('#contact_tab').hasClass('active')){

                    $('#personal').removeClass('active');

                    $('#contact').addClass('active');

                }

            }

        })

    }

    function save_user(id){

        first_name = $("#first_name").val();

        last_name = $("#last_name").val();

        user_name = $("#user_name").val();

        if(first_name == ''){

            swal("Please input the first name");

        }else if(last_name == ''){

            swal("Please input the last name");

        }else if(user_name == ''){

            swal("Please input the user name");

        }else{

            if(id==0){

                var scroll = $("#users_table").height();

                $.ajax({

                    url: "<?= base_url('/users/check_user')?>/"+user_name,

                    success:function(data) {

                        if(data==1){

                            swal("User Exists");
                            
                        }else{

                            $.ajax({

                                url: "<?= base_url('/users/save_user/')?>" + id,

                                method: "POST",

                                data: {

                                    first_name: first_name,

                                    last_name: last_name,

                                    user_name: user_name,

                                },

                                success:function(data) {

                                    $("#myModal").modal('hide');

                                    $('#users_table tbody').html(data);
                                    
                                    $("#users_table").scrollTop(scroll);

                                }

                            })

                        }

                    }

                })

            }else{

                var scroll = $("#users_table").scrollTop();

                $.ajax({

                    url: "<?= base_url('/users/save_user/')?>" + id,

                    method: "POST",

                    data: {

                        first_name: first_name,

                        last_name: last_name,

                        user_name: user_name,

                    },

                    success:function(data) {

                        $("#myModal").modal('hide');

                        $('#users_table tbody').html(data);

                        $("#users_table").scrollTop(scroll);

                    }

                })

            }

        }        

    }

    function personal_data(id){

        gender = $("input[name='gender']:checked").val();

        language = $("#language").val();

        dob = $("#dob").val();

        if(language == ''){

            swal("Please select the language");

        }else if(dob == '0000-00-00'){

            swal("Please input the birthday");

        }else{

            $.ajax({

                url: "<?= base_url('/users/personal_data/')?>" + id,

                method: "POST",

                data: {

                    gender: gender,

                    language: language,

                    dob: dob,

                },

                success:function(data) {

                    $('#user_detail').html(data);

                    if($('#personal_tab').hasClass('active')){

                        $('#contact').removeClass('active');

                        $('#personal').addClass('active');

                    }

                    if($('#contact_tab').hasClass('active')){

                        $('#personal').removeClass('active');

                        $('#contact').addClass('active');

                    }

                }

            })

        }

    }

    function contact_data(id){

        email = $("#email").val();

        phone = $("#phone").val();

        allow_email = $("#allow_email").prop('checked');

        allow_phone = $("#allow_phone").prop('checked');

        if(email == ''){

            swal("Please input the email");

        }else if(phone == ''){

            swal("Please input the phone");

        }else{

            $.ajax({

                url: "<?= base_url('/users/contact_data/')?>" + id,

                method: "POST",

                data: {

                    email: email,

                    phone: phone,

                    allow_email: allow_email,

                    allow_phone: allow_phone,

                },

                success:function(data) {

                    $('#user_detail').html(data);

                    if($('#personal_tab').hasClass('active')){

                        $('#contact').removeClass('active');

                        $('#personal').addClass('active');

                    }

                    if($('#contact_tab').hasClass('active')){

                        $('#personal').removeClass('active');

                        $('#contact').addClass('active');

                    }

                }

            })

        }

    }

    function delete_user(id){

        swal({

            title: "Are you sure?",

            text: "This user's data will be deleted and can't be recovered.",

            type: "info",

            showCancelButton: true,

            confirmButtonClass: "btn-danger",

            confirmButtonText: "Delete",

            cancelButtonText: "Cancel",

            closeOnConfirm: true,

            closeOnCancel: true,

        },
        
        function(isConfirm) {

            if (isConfirm) {

                $.ajax({

                    url: "<?= base_url('/users/delete_user/')?>" + id,

                    success:function(data) {

                        $('#users_table tbody').html(data);

                    }

                })

            }

        })

    }

</script>
