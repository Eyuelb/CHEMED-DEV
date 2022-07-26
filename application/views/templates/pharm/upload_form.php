<h3>Upload a picture!</h3>
<hr />

<div style="color:red">
    <?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('uploadp/file_data');?>




<div class="wrapper_upload">
<div class="LeftColumn">

  </div>

<div class="MiddleColumn">
  
  <div class="grid-container">

  <div class="grid-item item1">
	<label for="txtName">Full Name</label> 
	<input type="text"  name="pic_title" id="pic_title" value="<?= set_value('pic_title'); ?>" placeholder="Name..">
	
	<label for="txtLocation">Location</label><br>
	<input type="text" name="txtLocation" id="addressInput"  placeholder="Type your address"><br>
	<div style="min-width:250px;" >
	<div id="latlong">
	<input type="text" id="latbox" name="latbox" placeholder="latitude" class="controls" name="lat" readonly>
	<input type="text" id="lngbox" name="lngbox" placeholder="longitude" class="controls" name="lng" readonly>
	</div>
	<div id="map-canvas"></div> </div>
    
	
                      
</div>

 
<div class="grid-item item2">
	<label for="txtPhone">Phone</label>
	<input type="text"  name="pic_desc" id="pic_desc"><?= set_value('pic_desc'); ?> placeholder="Phone..">
	
	
	<label for="image">Upload Prescription</label><br>
	<input type="hidden" name="size" value="1000000">
  	<input type="file" name="pic_file" id="pic_file"><br>
	
	<input type="submit" name="upload" ></input><br>
<img class="image_display" src="<?= base_url('template/imgs/steps.png') ?>" alt="">
</div>


<div class="grid-item item3">

</div>

  
  </div>
    
  </form>
  

</div>





</div>
</body>
</html>