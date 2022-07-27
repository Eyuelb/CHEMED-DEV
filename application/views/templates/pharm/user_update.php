<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/new/css/user.css') ?>" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover" style="background-color:#1b1b8c"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar">
                    <i class="fa fa-user" style="font-size: 75px;"></i>
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?= $userInfo['name'] ?></h5>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush active">
                <a class="list-group-item " href="<?= LANG_URL . '/myaccount' ?>"><i class="fe-icon-shopping-bag mr-1 text-muted"></i>Orders List</a>
                <a class="list-group-item active" href="<?= LANG_URL . '/myaccount_update' ?>"><i class="fe-icon-user text-muted"></i>Profile Settings</a>
                 </nav>
            </div>
        </div>
        <!-- order-->
        <div class="col-lg-8 pb-5">
            <form class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $userInfo['name'] ?>" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">E-mail Address</label>
                        <input type="text" class="form-control" name="email"  value="<?= $userInfo['email'] ?>" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="<?= $userInfo['phone'] ?>" placeholder="Phone" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">Password</label>
                        <input type="password" class="form-control" name="pass" placeholder="Password (leave blank if no change)"> 
                    </div>
                </div>
                    
                    <input type="submit" name="update" class="login loginmodal-submit" value="<?= lang('update') ?>">
                    <a href="<?= LANG_URL . '/logout' ?>" class="login loginmodal-submit text-center"><?= lang('logout') ?></a>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                </div>
            </form>
        </div>
   </div>
</div>
