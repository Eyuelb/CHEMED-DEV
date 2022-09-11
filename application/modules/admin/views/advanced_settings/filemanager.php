<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/js/jquery-ui.css').'?'.date('l jS \of F Y h:i:s A'); ?>">
<script src="<?= base_url('assets/admin/js/jquery-ui.min.js').'?'.date('l jS \of F Y h:i:s A'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/elFinder-2.1.38/css/elfinder.min.css').'?'.date('l jS \of F Y h:i:s A'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/elFinder-2.1.38/css/theme.css').'?'.date('l jS \of F Y h:i:s A'); ?>">
<script src="<?= base_url('assets/admin/elFinder-2.1.38/js/elfinder.min.js').'?'.date('l jS \of F Y h:i:s A') ?>"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#elfinder').elfinder({
            url: '<?= base_url('assets/admin/elFinder-2.1.38/php/connector.minimal.php'); ?>'
        });
    });
</script>
<h1><img src="<?= base_url('assets/admin/imgs/filemanager.png') ?>" class="header-img"> File Manager</h1>
<p>Here you can list all site files</p>
<hr>
<div class="alert alert-danger">Danger zone! Do not touch if you're not sure!</div>
<div id="elfinder"></div>