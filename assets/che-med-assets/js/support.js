function createTableByForLoop(data)
{
var eTable="<table><thead><tr><th colspan='3'>Created by for loop</th></tr><tr><th>Name</th><th>Title</th><th>Salary</th</tr></thead><tbody>"
for(var i=0; i<data.length;i++)
{
  eTable += "<tr>";
  eTable += "<td>"+data[i]['id']+"</td>";
  eTable += "<td>"+data[i]['title']+"</td>";
  eTable += "<td>"+data[i]['url']+"</td>";
  eTable += "</tr>";
}
eTable +="</tbody></table>";
$('#forTable').html(eTable);
}

function createTableByJqueryEach(data)
{
var eTable="<table><thead><tr><th colspan='3'>Created by Jquery each</th></tr><tr><th>Name</th><th>Title</th><th>Salary</th</tr></thead><tbody>"
$.each(data,function(index, row){
  eTable += "<tr>";
  eTable += "<td>"+value['id']+"</td>";
  eTable += "<td>"+value['title']+"</td>";
  eTable += "<td>"+value['url']+"</td>";
  eTable += "</tr>";

  eTable += "<tr>";
  $.each(row,function(key,value){
    eTable += "<td>"+value+"</td>";
  });
  eTable += "</tr>";
});
eTable +="</tbody></table>";
$('#eachTable').html(eTable);
}
/*
$('.pagination-list li :first').addClass('active');  
$('.pagination-list li ').bind('click', function(e) {  
$('.pagination-list li :first').removeClass('active');
$('.pagination-list li ').removeClass('active');  
$(this).addClass('active');  
var currPage = $(this).attr('rel'); 
search_all_with_pagnition(currPage);
e.preventDefault();
});  



$(".pagination-list li").click(function() {
    var currPage = $(this).attr('rel'); 
    search_all_with_pagnition(currPage);
   });

   $(".list-group-item").click(function() {
              
            // Select all list items
            var listItems = $(".list-group-item");
              
            // Remove 'active' tag for all list items
            for (let i = 0; i < listItems.length; i++) {
                listItems[i].classList.remove("active");
            }
              
            // Add 'active' tag for currently selected item
            this.classList.add("active");
        });

        /** */



        $( window ).on( "load", function() {
          // search_all(0);
           //getPagnition();
           get_categories_list();
       });
       $(function () {
         
         //find();
         $("#slider-range2").on('slidechange', function () {
           search_all(0);
           getPagnition();
           //alert('pass slide');
         })
         $("#search_product").keyup(function(){
           search_all(0);
           getPagnition();
          // alert('pass key');
         });
       });
       
       function search_all(val){
         var url = document.location.href;
         var route = "product_search/"+val;
         var searchValue = $("#search_product").val();
         var sliderValue_from = $("#range_amount_from").val();
         var sliderValue_upto = $("#range_amount_upto").val();
         $.ajax({
         type: "POST",
         url: url+route,
         data:{
           search_in_title:searchValue,
           price_from:sliderValue_from,
           price_to:sliderValue_upto
         },
         dataType: "json",
         cache: false,
       }).done(function (data) {
         create_Product_list_for_product_page(data,'');
       })
       
       }
       function getPagnition(val=''){
         var url = document.location.href;
         var route = "product_categories_pagination";
        $.ajax({
         type: "POST",
         url: url+route,
         data:{url_pass:val
         },
         cache: false,
       }).done(function (data) {
         $('#pagination_list').html(data);
       })
       
       }
       function openPage(val,el){
         search_all(val);
         getPagnition(val);
       
       }
       
       function setactive(el){
         $( ".pagination-list li a " ).removeClass('active'); 
         $(el).addClass('active');
       search_all(function(output){
         create_Product_list_for_product_page(output,el.rel);
       });
         
       }
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       function search_all_with_pagnition(limit){
         var url = document.location.href;
         var route = "product_search";
         var searchValue = $("#search_product").val();
         var sliderValue_from = $("#range_amount_from").val();
         var sliderValue_upto = $("#range_amount_upto").val();
       $.ajax({
         type: "POST",
         url: url+route,
         data:{
           search_in_title:searchValue,
           search_in_price_from:sliderValue_from,
           search_in_price_upto:sliderValue_upto
         },
         dataType: "json",
         cache: false,
       }).done(function (data) {
       //alert(limit);
       //create_Product_list_for_home_page(data);
       create_Product_list_for_product_page(data,limit);
       })
       
       }
       
       
       
       
       
       
       function get_categories_list(){
         var url = document.location.href;
         var route = "product_categories";
       $.ajax({
         type: "POST",
         url: url+route,
         data:{get_category:"category"
         },
         dataType: "json",
         cache: false,
       }).done(function (data) {
       //alert(data);
       create_categories_list_for_product_page(data);
       })
       
       }
       
       
       
       
       
       
       
       
       
       
       function create_categories_list_for_product_page(data){
         var display="";
         
         for(var i=0; i<data.length;i++)
         {
         display +="<li><a>"+data[i]['name']+"</a></li>";
         }
         $('#categories_list').html(display);
       }
       
       
       
       
       
       
       function open_description_fun(clicked_id) {
         //document.getElementById("bigger-search").submit()
        
         var image = $("#"+clicked_id).data('image');
         var title = $("#"+clicked_id).data('title');
         var price = $("#"+clicked_id).data('price');
         var description = $("#"+clicked_id).data('description');
         $("#description_image").attr("src", image);
         $("#description_title").text(title);
         $("#description_price").text(price);
         $("#description_description").text(description);
         $('#description_model').modal('show');
         
         alert(title);
       
       }
       
       
       
       function create_Product_list_for_home_page(data)
       {
       var url = document.location.href+ "attachments/shop_images/";
       var buy_now_url = document.location.href+"checkout";
       var def_image = "";
       var display="";
       var image = "";
       
       for(var i=0; i<data.length;i++)
       {
       var o="'";
       var on_click_open_description_model = 'onclick="open_description_fun(this.id);"';
       var on_click_buy_now='onclick="buy_now_fun(this.id);"';
       image = url+data[i]['image'];
       def_image = url+'no_image8.jpg';
       display +="<div class='col-xl-3 col-lg-4 col-md-4 col-12'><div class='single-product'><div class='product-img'>";
       display +="<a href='product-details.html'>";
       display +="<img class='default-img' src='"+image+"' alt='"+data[i]['title']+"'"+'onerror="this.onerror=null; this.src='+o+def_image+o+'">';
       display +="</a><div class='button-head'><div class='product-action'>";
       display +="<a id='open_decription"+i+"' title='Quick View' data-id='"+data[i]['id']+"'  data-image='"+image+"' data-title='"+data[i]['title']+"' data-price='ETB"+data[i]['price']+"' data-description='"+data[i]['description']+"' "+on_click_open_description_model+"><i class=' ti-eye' ></i><span>Quick Shop</span></a>";
       display +="<a title='Wishlist'><i class=' ti-heart '></i><span>Add to Wishlist</span></a>";
       display +="<a id='buy_now_btn"+i+"' title='Buy Now' data-goto='"+buy_now_url+"' data-id='"+data[i]['id']+"'"+on_click_buy_now+"><i class='ti-bar-chart-alt'></i><span>Buy now</span></a></div><div class='product-action-2'>";
       display +="<a title='Add to cart' href='#'>Add to cart</a></div></div></div><div class='product-content'>";
       display +="<div class='product-title'><h3><a href='product-details.html'>"+data[i]['title']+"</a></h3></div><div class='product-price'>";
       display +="<span>ETB"+data[i]['price']+"</span></div></div></div></div>";
       }
       $('#product_list').html(display);
       }
       
       
       
       
       
       
       
       
       function create_Product_list_for_product_page(data,limit)
       {
       var url = document.location.href+ "attachments/shop_images/";
       var buy_now_url = document.location.href+"checkout";
       var def_image = "";
       var display="";
       var display_error="";
       var image = "";
       var i = 0;
       for(i;i<data.length;i++)
       {
       
       var o="'";
       var on_click_open_description_model = 'onclick="open_description_fun(this.id);"';
       var on_click_buy_now='onclick="buy_now_fun(this.id);"';
       image = url+data[i]['image'];
       def_image = url+'no_image8.jpg';
       display +="<div class='col-xl-3 col-lg-4 col-md-4 col-12'><div class='single-product'><div class='product-img'>";
       display +="<a href='product-details.html'>";
       display +="<img class='default-img' src='"+image+"' alt='"+data[i]['title']+"'"+'onerror="this.onerror=null; this.src='+o+def_image+o+'">';
       display +="</a><div class='button-head'><div class='product-action'>";
       display +="<a id='open_decription"+i+"' title='Quick View' data-id='"+data[i]['id']+"'  data-image='"+image+"' data-title='"+data[i]['title']+"' data-price='ETB"+data[i]['price']+"' data-description='"+data[i]['description']+"' "+on_click_open_description_model+"><i class=' ti-eye' ></i><span>Quick Shop</span></a>";
       display +="<a title='Wishlist'><i class=' ti-heart '></i><span>Add to Wishlist</span></a>";
       display +="<a id='buy_now_btn"+i+"' title='Buy Now' data-goto='"+buy_now_url+"' data-id='"+data[i]['id']+"'"+on_click_buy_now+"><i class='ti-bar-chart-alt'></i><span>Buy now</span></a></div><div class='product-action-2'>";
       display +="<a title='Add to cart' href='#'>Add to cart</a></div></div></div><div class='product-content'>";
       display +="<div class='product-title'><h3><a href='product-details.html'>"+data[i]['title']+"</a></h3></div><div class='product-price'>";
       display +="<span>ETB"+data[i]['price']+"</span></div></div></div></div>";
       
       }
       
       if(data != ''){
         $('#product_list').html(display);
       }
       else{
         display_error +="<div class='alert alert-warning' role='alert'>No Product!</div>";
         $('#product_list').html(display_error);
       }
       
       
       }
       
       function create_pagination_list_for_product_page(rowsTotal){
         var rowsShown = 20;  
         var numPages = rowsTotal/rowsShown;  
         var display="";
         for (i = 0;i <= numPages;i++) {  
           var pageNum = i + 1;  
           display +="<li ><a rel='"+rowsShown+"'"+'onclick="setactive(this);"'+">"+pageNum+"</a></li>"; 
           rowsShown = rowsShown + 20;
         }  
         $('#pagination_list').html(display);
         $( ".pagination-list li a:first " ).addClass('active');
       }
       
       
       
       function setactive(el){
         $( ".pagination-list li a " ).removeClass('active'); 
         $(el).addClass('active');
       search_all(function(output){
         create_Product_list_for_product_page(output,el.rel);
       });
         
       }
       
       
       
       
       function find(){
        // search_all();
         search_all(function(output){
           create_Product_list_for_product_page(output,'');
           //create_pagination_list_for_product_page(output.length);
           //alert(output.length)
         });
       
       }
       

       function getProductGrid(){
        var url = document.location.href;
        var route = "product_grid_get";
        var searchValue = $("#search_product").val();
        var sliderValue_from = $("#range_amount_from").val();
        var sliderValue_upto = $("#range_amount_upto").val();
      $.ajax({
        type: "GET",
        url: url+route,
        data:{
          search_in_title:searchValue,
        },
        cache: false,
      }).done(function (data) {
       // $('#product_list').html(data);
        alert(data);
      })
      
      }
      $(function () {
        getProductGrid();
      });