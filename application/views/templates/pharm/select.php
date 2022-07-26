<?php
 $conn = mysqli_connect("localhost", "chemedsorg_chemedsorg", "gfki-W}bB@3v", "chemedsorg_shop");
 $msg = "";
 if (isset($_POST['insert'])) {
     $image = $_FILES['image']['name'];
     $txtName = mysqli_real_escape_string($conn, $_POST['txtName']);
     $txtLocation = mysqli_real_escape_string($conn, $_POST['txtLocation']);
     $txtPhone = mysqli_real_escape_string($conn, $_POST['txtPhone']);
     $target = 'attachments/shop_images/' .basename($image);
     $sql = "INSERT INTO `orders_clients_by_p`(`id`, `full_name`, `phone`, `address`, `image`, `status`, `sub_time`) VALUES ('','$txtName','$txtPhone','$txtLocation','$image','','')"; 
          
$result = mysqli_query($conn, $sql);


     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
         $msg = "Image uploaded successfully";
     }
   else{
         $msg = "Failed to upload image";
     }
 
if($result){

    $output .= '  
      <div class="table-responsive">  
      <div class="card-body">
      <div class="wrapper text-center">
        <h4 class="card-title">Alerts Popups</h4>
        <p class="card-description">A success message!</p>
      </div>
    </div>
      </div>  
      ';
    echo $output;
}
}
?>