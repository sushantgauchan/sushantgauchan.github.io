<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 7/29/2018
 * Time: 7:59 AM
 */
include 'header.php' ?>

<div id="login-page">
    <section class="login-section">
        <div class="custom-container">
            <div class="form-container">
                <div class="form-inner">
                    <div class="login-content">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="log-in">
                                <div class="common-login">
                                    <div class="title">
                                        <h2>Login</h2>
                                    </div>
                                    <div class="fields">
                                        <div class="form-group">
                                            <span><i class="fa fa-user"></i> </span>
                                            <input type="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa fa-lock"></i> </span>
                                            <input type="password" placeholder="Password" required="">
                                        </div>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <div class="form-action">
                                        <input type="submit" value="login" class="pr-btn square-border">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sign-up">
                                <div class="common-login">
                                    <div class="title">
                                        <h2>Sign Up</h2>
                                    </div>
                                    <div class="fields">
                                        <div class="form-group">
                                            <span><i class="fa fa-user"></i> </span>
                                            <input type="text" placeholder="Full Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa fa-user"></i> </span>
                                            <input type="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa fa-lock"></i> </span>
                                            <input type="password" placeholder="Password" required="">
                                        </div>
                                        <div class="form-group">
                                            <span><i class="fa fa-user"></i> </span>
                                            <input type="tel" placeholder="Contact Number" required="">
                                        </div>
                                    </div>
                                    <div class="form-action">
                                        <input type="submit" value="login" class="pr-btn square-border">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="login-nav">
                        <ul class="nav nav-tabs common-remove-tab-style" role="tablist">
                            <li class="active">
                                <span>Have an account?</span>
                                <span><a href="#log-in" role="tab" data-toggle="tab">Sign In</a></span>
                            </li>
                            <li>
                                <span>Don't Have an account?</span>
                                <span><a href="#sign-up" role="tab" data-toggle="tab">Sign Up</a></span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function () {
        $('body').addClass('login-page');
    })
</script>
<?php include 'footer.php'?>
