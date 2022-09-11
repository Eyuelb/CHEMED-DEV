<?php
if (isset($_POST["id"])) {
    $output = '';
    require "php/db_connection_new.php";
    $query  = "SELECT * FROM product WHERE id = '" . $_POST["id"] . "'";
    $result = mysqli_query($con, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-striped">';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">' . $row["p_name"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Short Description</label></td>  
                     <td width="70%">' . $row["p_short_dec"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Description</label></td>  
                     <td width="70%">' . $row["p_description"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Previous Price</label></td>  
                     <td width="70%">' . $row["p_price_b"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Current Price</label></td>  
                     <td width="70%">' . $row["p_price"] . ' </td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Discount</label></td>  
                     <td width="70%">' . $row["p_price_decount"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Unit per</label></td>  
                     <td width="70%">' . $row["p_unit_per"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>max_amount_order</label></td>  
                     <td width="70%">' . $row["p_max_amount_per_order"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>category</label></td>  
                     <td width="70%">' . $row["p_category"] . '</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Brand</label></td>  
                     <td width="70%">' . $row["p_brand"] . ' </td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Manufactuing Country</label></td>  
                     <td width="70%">' . $row["p_m_country"] . ' </td>  
                </tr>  
           ';
    }
    $output .= '  
           </table>  
      </div>  
      ';
    echo $output;
}
?>