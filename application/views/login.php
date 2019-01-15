<body class="fixed-left">
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div><!-- Begin page -->
    <div class="accountbg"></div>
    <div class="home-btn d-none d-sm-block"><a href="index.html" class="text-white"><i class="mdi mdi-home h1"></i></a></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <div class="p-3">
                    <div class="">
                        <h4 class="font-18 mt-3 m-b-5">Welcome Back !</h4>
                        <p class="text-muted">Sign in to continue to Cashtrackit.</p>
                    </div>
                    <!--<a href="index.html" class="logo-admin"><img src="assets/images/logo_dark.png" height="26"
                            alt="logo"></a>-->
                </div>
                <div class="p-3">
                    <?php echo form_open(''); ?>
                        <div class="form-group">
                            <label for="log_user">Username</label> 
                            <input type="text" class="form-control <?php echo (form_error('log_user') ? 'is-invalid' : '');?>" name="log_user" value="<?php echo set_value('log_user');?>" placeholder="Enter username">
                            <div class="invalid-feedback">
                                <?php echo form_error('log_user'); ?>
                            </div>        
                        </div>
                        <div class="form-group">
                            <label for="log_pwd">Password</label> 
                            <input type="password" class="form-control <?php echo (form_error('log_pwd') ? 'is-invalid' : '');?>" name="log_pwd" placeholder="Enter password">
                            <div class="invalid-feedback">
                                <?php echo form_error('log_pwd'); ?>
                            </div>   
                        
                        </div>
                        <div class="form-group row m-t-30">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline"> 
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" name="log_submit" type="submit">Log In</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center text-white-50">
            <p>Don't have an account ? <a href="<?php echo base_url();?>register" class="font-600 text-white">Signup Now</a></p>
        </div>
    </div><!-- end wrapper-page -->