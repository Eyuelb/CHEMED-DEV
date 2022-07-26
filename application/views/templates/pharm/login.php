<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/new/css/login.css') ?>" />
    <div class="container">
    <div class="con_login">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn"> 
                        <form class="myForm text-center" method="POST" action="">
                            <header>Login to your account</header>

                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" placeholder="Email" name="email" type="text" id="email" required> 
                            </div>

                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" name="pass" id="password" placeholder="Password" required> 
                            </div>


                            <input type="submit" name="login" class="butt login loginmodal-submit" value="LOGIN">
                            
                        </form>
                        <div  class="centered col-md-12 col-xs-12 font-14 mt-3" style="color: #969696;">
                        <span>New to CheMed?</span>
                        <a style="margin-left: 7px; color: #745be7;" href="<?= LANG_URL . '/register' ?>">Sign Up Now</a></div>
                        
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="myRightCtn">
                            <div class="box"><header>CHEMED</header>
                            
                            <p>Login to Your account and Track Your order</p>
                            <img width="300" height="150" src="<?= base_url('assets/new/css/banner-tracking.png') ?>" alt="tracking banner" class="width-85 mt-lg mb-lg entered lazyloaded">
                            </div>
                                
                    </div>
                </div>
            </div>
        </div>
</div>
</div>    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 