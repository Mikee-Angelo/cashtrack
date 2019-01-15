<body>
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
                    <h4 class="font-18 mt-3 m-b-5">Free Register</h4>
                    <p class="text-muted">Get your free Cashtrack account now.</p>
                    <?php 
                        echo $this->session->flashdata('regtrue');
                    ?>
                </div>
                <div class="p-3">
                    <?php echo form_open('register'); ?>
                        <div class="form-group">
                            <label for="regname">Name</label> 
                            <input type="text" class="form-control <?php echo (form_error('regname') ? 'is-invalid' : '');?>" name="regname" value="<?php echo set_value('regname');?>" placeholder="Enter Name">
                            <div class="invalid-feedback">
                                <?php echo form_error('regname'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reguser">Username</label> 
                            <input type="text" class="form-control <?php echo (form_error('reguser') ? 'is-invalid' : '');?>" name="reguser" value="<?php echo set_value('reguser');?>" placeholder="Enter Username">
                            <div class="invalid-feedback">
                                <?php echo form_error('reguser'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="regpwd">Password</label> 
                            <input type="password" class="form-control <?php echo (form_error('regpwd') ? 'is-invalid' : '');?>" name="regpwd" placeholder="Enter Password">
                            <div class="invalid-feedback">
                                <?php echo form_error('regpwd'); ?>
                            </div>                       
                        </div>
                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" name="regsubmit" type="submit">Register</button>
                            </div>
                        </div>
                        <div class="form-group m-t-30 mb-0 row">
                            <div class="col-12">
                                <p class="font-14 text-center text-muted mb-0">By registering you agree to the Cashtrackit <a href="<?php echo base_url();?>" class="text-primary">Terms of Use</a></p>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center text-white-50">
            <p>Already have an account ? <a href="<?php echo base_url();?>" class="font-600 text-white">Login</a></p>
        </div>
    </div><!-- jQuery  -->