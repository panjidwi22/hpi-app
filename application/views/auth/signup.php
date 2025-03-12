<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="../assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Sign Up</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" method="post" action="<?= base_url('auth/signup'); ?>">
                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="first_name" name="first_name" type="text" placeholder="First Name">
                                        <?= form_error('first_name', '<label for="first_name" class="form-label text-danger mt-2">', '</label>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="last_name" name="last_name" type="text" placeholder="Last Name">
                                        <?= form_error('last_name', '<label for="lasts_name" class="form-label text-danger mt-2">', '</label>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Username">
                                        <?= form_error('username', '<label for="username" class="form-label text-danger mt-2">', '</label>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Email">
                                        <?= form_error('email', '<label for="email" class="form-label text-danger mt-2">', '</label>'); ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                                        <?= form_error('password', '<label for="password" class="form-label text-danger mt-2">', '</label>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 ">
                                        <input class="form-control form-control-lg" id="confirm_password" name="confirm_password" type="password" required=" " placeholder="Confirm Password">
                                    </div>
                                    <?= form_error('confirm_password', '<label for="confirm_password" class="form-label text-danger mt-2">', '</label>'); ?>
                                </div>

                                <div class="form-group text-center ">
                                    <div class="col-xs-12 p-b-20 ">
                                        <button class="btn btn-block btn-lg btn-info " type="submit ">SIGN UP</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0 m-t-10 ">
                                    <div class="col-sm-12 text-center ">
                                        Already have an account? <a href="<?= base_url(); ?>" class="text-info m-l-5 "><b>Sign In</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>