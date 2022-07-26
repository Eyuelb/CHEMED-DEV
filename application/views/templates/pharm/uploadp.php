

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<link rel="stylesheet" href="<?= base_url('assets/new/css/style.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/new/css/custom_upload.css') ?>" />


<div>  <?php echo validation_errors(); if(isset($error)){?>
<div class="container-fluid text-center">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <div class="new-message-box">
                    <div class="new-message-box-danger">
                        <div class="info-tab tip-icon-danger" title="error"><i></i></div>
                        <div class="tip-box-danger">
                            <!--<p><strong>Tip:</strong> If you want to enable the fading transition effect while closing the alert boxes, apply the classes <code>.fade</code> and <code>.in</code> to them along with the contextual class.</p>-->
                            <p><?php print $error;?> </p> 
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
<?php } ?> </div>


<div>  <?php  if(isset($msg)){?>
<div class="container-fluid text-center">
<div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <div class="new-message-box">
                    <div class="new-message-box-success">
                        <div class="info-tab tip-icon-success" title="success"><i></i></div>
                        <div class="tip-box-success">
                            <!--<p><strong>Tip:</strong> If you want to enable the fading transition effect while closing the alert boxes, apply the classes <code>.fade</code> and <code>.in</code> to them along with the contextual class.</p>-->
							<p><?php print $msg;?> </p>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
<?php } ?> </div>

<?php ?>
<?php echo form_open_multipart('uploadp/file_data');?>


<div class="container d-flex justify-content-center" style="margin-bottom: 566px;">
	<div class="card mx-5 my-5">
		<div class="card-body px-2">
			<h2 class="card-heading px-3">Upload Your Prescription</h2>
			<h5 class="card-subheading px-3 pb-3">It's quick and easy.</h5>
			<form>
			<div class="row rone">
				<div class="form-group col-md-5 fone">
                <label for="txtName">Full Name<span style="color: #a94442;" ><?= lang('requires') ?></label> 
                <input class="form-control" type="text"  name="full_name" id="full_name" value="<?= set_value('full_name'); ?>" placeholder="Full Name"required>
                
				</div>
				<div class="form-group col-md-5 ftwo">
                <label for="txtPhone">Phone<span style="color: #a94442;" ><?= lang('requires') ?></label>
                <input class="form-control ml-3 " type="text"  name="phone" id="phone" value="<?= set_value('phone'); ?>" placeholder="Phone.." required>
                
				</div>
			</div>
			<div class="row rtwo">
				<div class="form-group col-md-12 fthree">
                <label for="txtLocation">Location</label><br>
                <input type="text" class="form-control " name="address" id="address" value="<?= set_value('address'); ?>"  placeholder="Type your address" >
				<small class="text-muted"><p class="para1 pt-2 pl-1">Try to spacify you location.</p></small>
                <div style="min-width:250px;" >
	<div id="latlong">
	<input type="text" id="latbox" name="latbox" placeholder="latitude" class="controls" name="lat" readonly>
	<input type="text" id="lngbox" name="lngbox" placeholder="longitude" class="controls" name="lng" readonly>
	</div>
	<div id="map-canvas"></div> </div>
				</div>
			</div>
			<div class="row rthree">
				<div class="form-group col-md-5 ffour">
				<label for="image">Upload Prescription<span style="color: #a94442;" ><?= lang('requires') ?></label><br>
	            <input type="hidden" name="size" value="1000000">
             	<input type="file" name="pic_file" id="pic_file"><br>
				</div>
				<div class="form-group col-md-5 ffive">
					
				</div>

			</div>
			<div class="row rfour">
				<div class="col-md-4 ml-3">
                <input type="submit" name="upload" class="btn btn-primary mt-3"></input><br>
	
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
