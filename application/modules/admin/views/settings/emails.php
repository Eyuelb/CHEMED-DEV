<h1><img src="<?= base_url('assets/imgs/email.png') ?>" class="header-img" style="margin-top:-3px;"> Subscribed</h1>
<p>Here are all subscribed emails of users</p>
<hr>
<div id="users">
<?php if ($this->session->flashdata('emailDeleted')) { ?>
    <hr>
    <div class="alert alert-info"><?= $this->session->flashdata('emailDeleted') ?></div>
    <?php
}
 if (validation_errors()) { ?>
    <hr>
    <div class="alert alert-danger"><?= validation_errors() ?></div>
    <hr>
    <?php
}
if ($this->session->flashdata('result_add')) {
    ?>
    <hr>
    <div class="alert alert-success"><?= $this->session->flashdata('result_add') ?></div>
    <hr>
    <?php
}
if ($this->session->flashdata('result_delete')) {
    ?>
    <hr>
    <div class="alert alert-success"><?= $this->session->flashdata('result_delete') ?></div>
    <hr>
    <?php
}
?>
<a href="javascript:void(0);" data-toggle="modal" data-target="#add_edit_users" class="btn btn-primary btn-xs pull-right" style="margin-bottom:10px;"><b>+</b> Add new user</a>
<div class="clearfix"></div>


<div class="table-responsive">
    <table class="table table-condensed table-bordered table-striped custab">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Browser</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($emails->result()) {
                foreach ($emails->result() as $user) {
                    ?>
                    <tr>
                        <td><?= $user->name ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->phone ?></td>
                        <td><?= $user->created ?></td>
                        <td class="text-center">
                            <div>
                                <a href="?delete=<?= $user->id ?>" class="btn-xs btn-danger confirm-delete">Delete</a>
                                <a href="?edit=<?= $user->id ?>" class="">Edit</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr><td colspan="5">No Users found!</td></tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="modal fade" id="add_edit_users" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Administrator</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="edit" value="<?= isset($_GET['edit']) ? (int)$_GET['edit'] : '0' ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" value="" id="password">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" id="email">
                        </div>
                        <div class="form-group">
                            <label for="notify">Phone</label>
                            <input type="text" name="notify" class="form-control" value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '' ?>" id="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
<?php if (isset($_GET['edit'])) { ?>
        $(document).ready(function () {
            $("#add_edit_users").modal('show');
        });
<?php } ?>
</script>

<?= $links_pagination ?>