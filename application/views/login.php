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
                    <div class="float-right text-right">
                        <h4 class="font-18 mt-3 m-b-5">Welcome Back !</h4>
                        <p class="text-muted">Sign in to continue to Cashtrackit.</p>
                    </div><a href="index.html" class="logo-admin"><img src="<?php echo base_url();?>assets/images/logo_dark.png" height="26"
                            alt="logo"></a>
                </div>
                <div class="p-3">
                    <!--<form class="form-horizontal m-t-10" action="https://themesbrand.com/foxia/green-2/index.html">-->
                    <?php echo form_open(''); ?>
                        <div class="form-group"><label for="username">Username</label> <input type="text" class="form-control"
                                id="username" placeholder="Enter username"></div>
                        <div class="form-group"><label for="userpassword">Password</label> <input type="password" class="form-control"
                                id="userpassword" placeholder="Enter password"></div>
                        <div class="form-group row m-t-30">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input"
                                        id="customControlInline"> <label class="custom-control-label" for="customControlInline">Remember
                                        me</label></div>
                            </div>
                            <div class="col-sm-6 text-right"><button class="btn btn-primary w-md waves-effect waves-light"
                                    type="submit">Log In</button></div>
                        </div>
                        <div class="form-group m-t-30 mb-0 row">
                            <div class="col-12 text-center"><a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i>
                                    Forgot your password?</a></div>
                        </div>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center text-white-50">
            <p>Don't have an account ? <a href="pages-register.html" class="font-600 text-white">Signup Now</a></p>
            <p>© 2018 Foxia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
        </div>
    </div><!-- end wrapper-page -->