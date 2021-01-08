<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_unset();
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Email Verification</title>
        <?php $this->load->view('common_head'); ?>
        <style>
            .ErrorField {
                border-color: #D00;
                color: #D00;
                background: #FFFFFE;
                font-size:13px;
            }
            span.ValidationErrors {
                display: inline-block;
                font-size: 12px;
                color: #D00;
                font-style: italic;
            }
            .form-control:focus{
                border-color:#66afe9;
                box-shadow:0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6);
                outline: 0 none;
            }
            .form-control{
                border-color:#7a7d81;
            }
            a:hover {
                cursor:pointer;
            }
            .body_background{
                background-color: #EF9630;
                background-repeat: repeat-x;
            }
            .taas{
                font-family: "Eras Demi ITC";
                font-size: 26px;
                font-weight: bold;
                color: rgb(231, 76, 37);
                text-align:center;
                margin-top: 6px;
                margin-bottom: 6px;
            }
            .bk-image{
                background-image: url("<?php echo base_url(); ?>images/bk-image.jpg");
                height: 35px;
                border-bottom-right-radius: 6px;
                border-top-right-radius: 6px;
            }
            .blue4{
                background-image: url("<?php echo base_url(); ?>images/blue-4.png");
                width: 22px;
                height: 20px;
            }
            .input_box{
                border: 1px solid #aeaeae;
            }
            .logi{
                background-image: url("<?php echo base_url(); ?>images/logi.jpg");
                background-repeat: no-repeat;
                width: 96px;
                height: 32px;
                border:0px;
                margin-top:3%;
            }
            .submit{
                background-image: url("<?php echo base_url(); ?>images/submit.jpg");
                background-repeat: no-repeat;
                width: 96px;
                height: 32px;
                border:0px;
                margin-top:3%;
            }
            .gradient_class{
                background: rgba(119,192,223,1);
                background: -moz-linear-gradient(left, rgba(119,192,223,1) 0%, rgba(22,101,192,1) 55%, rgba(33,92,175,1) 74%, rgba(44,83,158,1) 92%, rgba(44,83,158,1) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(119,192,223,1)), color-stop(55%, rgba(22,101,192,1)), color-stop(74%, rgba(33,92,175,1)), color-stop(92%, rgba(44,83,158,1)), color-stop(100%, rgba(44,83,158,1)));
                background: -webkit-linear-gradient(left, rgba(119,192,223,1) 0%, rgba(22,101,192,1) 55%, rgba(33,92,175,1) 74%, rgba(44,83,158,1) 92%, rgba(44,83,158,1) 100%);
                background: -o-linear-gradient(left, rgba(119,192,223,1) 0%, rgba(22,101,192,1) 55%, rgba(33,92,175,1) 74%, rgba(44,83,158,1) 92%, rgba(44,83,158,1) 100%);
                background: -ms-linear-gradient(left, rgba(119,192,223,1) 0%, rgba(22,101,192,1) 55%, rgba(33,92,175,1) 74%, rgba(44,83,158,1) 92%, rgba(44,83,158,1) 100%);
                background: linear-gradient(to right, rgba(119,192,223,1) 0%, rgba(22,101,192,1) 55%, rgba(33,92,175,1) 74%, rgba(44,83,158,1) 92%, rgba(44,83,158,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#77c0df', endColorstr='#2c539e', GradientType=1 );
                margin-left:5px;
                margin-right:5px;
            }
            .subtitleclass{
                font-size: 13px;
                color:#317EC9;
                margin-left:3px;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper body_background" style="margin-left:0px; ">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <section class="content col-md-6 col-md-push-3" style="margin-top: 135px;">
                    <div class="box" style="height:240px; border-top: 0px; border-radius: 16px;">
                        <div style="">
                            <div class="box-body col-md-12">
                                <fieldset>
                                    <div class="row" id="login">
                                        <?php echo validation_errors(); ?>
                                        <?php
                                        $attributes = array('class' => 'form-horizontal', 'id' => 'frm_Login');
                                        echo form_open('Email/email_verification', $attributes);
                                        ?>
                                        <div class="form-group">
                                            <p class="taas"></p>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12" style="">
                                                <div class="gradient_class">
                                                    <center> <p style="color: #fff; font-size: 22px;"><b> <p class="taas">Email Verification</p></b></p> </center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin:1%;">
                                            <label class="col-xs-3 control-label" style="margin-left:3%;"></label>
                                            <div class="form-group has-feedback col-xs-7" style="margin-bottom: 10px;">
                                                <?php
                                                $data = array(
                                                    'name' => 'username',
                                                    'id' => 'username',
                                                    'placeholder' => 'Enter Email',
                                                    'class' => 'form-control input-sm input_box'
                                                );
                                                echo form_input($data);
                                                ?>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" style="">
                                            <div class="col-xs-12">
                                                <center><a style="" id="singlebutton" name="singlebutton"  type="submit" class="btn btn-primary btn-lg logi"></a> </center>
                                            </div>
                                            <div class="col-md-12" id="frm_Login_error" style="margin-top:10px;"></div>
                                        </div>
                                        
                                        <?php echo form_close(); ?>
                                    </div><!--./End row-->	
                                </fieldset>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
        </div><!-- ./wrapper -->
        <script>
            $(document).ready(function () {
                $(document).on('click', '#singlebutton', function () {
                    $('#frm_Login_error').html('');
                    $('#username').removeClass('ErrorField');
                    if ($("#frm_Login").valid() || $("#username").val() != '') {
						var form_action = $('#frm_Login').attr('action');//get form action
                        var dataString = $('#frm_Login').serialize();
                        $.ajax({
                            type: "POST",
                            url: form_action,
                            data: dataString,
                            success: function (data) {
                                try {
                                    if (data != '' && isNaN(data)) {
										$('#frm_Login_error').html(data);
										setTimeout(function () {
											$('#frm_Login_error').html('');
											$("#username").val('');
										}, 2000);
                                    } 
                                } catch (e) {
                                    alert('Exception while request..');
                                }
                            },
                            error: function () {
                                alert('Error while request..');
                            }
                        });
                        return false;  //stop the actual form post !important!
                    } else {
                    }
                });
                //For validation
                $("#frm_Login").validate({
                    errorClass: "ErrorField",
                    validClass: "valid",
                    errorElement: "span",
                    rules: {
                        username: "required",
                        password: "required"
                    },
                    errorPlacement: function (error, element) {
                        return true;
                    }
                });
                //End validation
               
            });
        </script>
    </body>
</html>