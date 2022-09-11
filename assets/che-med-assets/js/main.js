

function open_description_fun(clicked_id) {
  //document.getElementById("bigger-search").submit()

  var image = $("#" + clicked_id).data('image');
  var title = $("#" + clicked_id).data('title');
  var price = $("#" + clicked_id).data('price');
  var description = $("#" + clicked_id).data('description');
  $("#description_image").attr("src", image);
  $("#description_title").text(title);
  $("#description_price").text(price);
  $("#description_description").text(description);
  $('#description_model').modal('show');

}
function checkout_s_popup(){
  $('#checkout_model').modal('show');
};

function checkout_form_submit(){
  $('#checkout_form').submit();
};


function category_go(el){
  var category = $(el).data('categorie-id');
  $('[name="category"]').val(category);
  $('#category-search').submit();
};
function search_go(el){
  var id = $(el).data('id');
  var val = $('#search_in_title'+id).val();
  $('[name="search_in_title"]').val(val);
  $('#search_box').submit();
};


function buy_now(el){
  var reload = false;
  var article_id = $(el).data('id');
  var goto_site = $(el).data('goto');
  if ($(el).hasClass('refresh-me')) {
      reload = true;
  } else if (goto_site != null) {
      reload = goto_site;
  }
  manageShoppingCart('add', article_id, reload);
}




function add_to_cart(el){
  var reload = false;
  var article_id = $(el).data('id');
  var goto_site = $(el).data('goto');
  if ($(el).hasClass('refresh-me')) {
      reload = true;
  } else if (goto_site != null) {
      reload = goto_site;
  }
  manageShoppingCart('add', article_id, reload);
}

function buy_now_fun(clicked_id) {
  var reload = false;
  var article_id = $("#"+clicked_id).data('id');
  var goto_site = $("#"+clicked_id).data('goto');
  if ($("#"+clicked_id).hasClass('refresh-me')) {
      reload = true;
  } else if (goto_site != null) {
      reload = goto_site;
  }
  
  manageShoppingCart('add', article_id, reload);

}

//DatePicker
if (typeof datepicker !== 'undefined') {
  $('.input-group.date').datepicker({
      format: "dd/mm/yy"
  });
}

//Filters Technique
$('.go-category').click(function () {
  var category = $(this).data('categorie-id');
  $('[name="category"]').val(category);
  submitForm();
});
$('.in-stock').click(function () {
  var in_stock = $(this).data('in-stock');
  $('[name="in_stock"]').val(in_stock);
  submitForm()
});
$(".order").change(function () {
  var order_type = $(this).val();
  var order_to = $(this).data('order-to');
  $('[name="' + order_to + '"]').val(order_type);
  submitForm();
});
$('.brand').click(function () {
  var brand_id = $(this).data('brand-id');
  $('[name="brand_id"]').val(brand_id);
  submitForm()
});
$("#search_in_title").keyup(function () {
  $('[name="search_in_title"]').val($(this).val());
});


$('.clear-filter').click(function () { //clear filter in right col
  var type_clear = $(this).data('type-clear');
  $('[name="' + type_clear + '"]').val('');
  submitForm();
});
/*
* Submit search form in home page
*/
function submitForm() {
  $('#bigger-search').submit();
}
/*
* Discount code checker
*/
var is_discounted = false;
function checkDiscountCode() {
  var enteredCode = $('[name="discountCode"]').val();
  $.ajax({
      type: "POST",
      url: variable.discountCodeChecker,
      data: {enteredCode: enteredCode}
  }).done(function (data) {
      if (data == 0) {
          ShowNotificator('alert-danger', );
      } else {
          if (is_discounted == false) {
              var obj = jQuery.parseJSON(data);
              var final_amount_before = parseFloat($('.final-amount').text());
              var discountAmoun;
              if (obj.type == 'percent') {
                  var substract_num = (obj.amount / 100) * final_amount_before;
                  var final_amount = final_amount_before - substract_num;
                  discountAmoun = substract_num;
              }
              if (obj.type == 'float') {
                  var final_amount = final_amount_before - obj.amount;
                  discountAmoun = obj.amount;
              }
              $('.final-amount').text(final_amount.toFixed(2));
              $('.final-amount').val(final_amount.toFixed(2));
              $('[name="discountAmount"]').val(discountAmoun);
              is_discounted = true;
          }
      }
  });
}

function removeProduct(id, reload) {
  manageShoppingCart('remove', id, reload);
}
function manageShoppingCart(action, article_id, reload) {
 

  if (action == 'add') {
      $('.add-to-cart a[data-id="' + article_id + '"] span').hide();
      $('.add-to-cart a[data-id="' + article_id + '"] img').show();

  }
  if (action == 'remove') {

  }
  $.ajax({
      type: "POST",
      url: variable.manageShoppingCartUrl,
      data: {article_id: article_id, action: action}
  }).done(function (data) {
      $(".dropdown-cart").empty();
      $(".dropdown-cart").append(data);
      var sum_items = parseInt($('.sumOfItems').text());
      if (action == 'add') {
          $('.sumOfItems').text(sum_items + 1);
      }
      if (action == 'remove') {
          $('.sumOfItems').text(sum_items - 1);
      }
      if (reload == true) {
          location.reload(false);
          return;
      } else if (typeof reload == 'string') {
          location.href = reload;
          return;
      }
      ShowNotificator('alert-info', 'success');
  }).fail(function (err) {
      ShowNotificator('alert-danger', 'failed');
  }).always(function () {
      if (action == 'add') {
          $('.add-to-cart a[data-id="' + article_id + '"] span').show();
          $('.add-to-cart a[data-id="' + article_id + '"] img').hide();
      }
  });
}

function clearCart() {
  $.ajax({type: "POST", url: variable.clearShoppingCartUrl});
  $('ul.dropdown-cart').empty();
  $('ul.dropdown-cart').append('<li class="text-center">' + "no_products" + '</li>');
  $('.sumOfItems').text(0);
  ShowNotificator('alert-info', "cleared_cart");
}

//Email Subscribe
function checkEmailField() {
  if ($('[name="subscribeEmail"]').val() == '') {
      ShowNotificator('alert-danger', );
      return;
  }
  document.getElementById("subscribeForm").submit();
}

//Email Subscribe
function checkEmailField() {
  if ($('[name="subscribeEmail"]').val() == '') {
      ShowNotificator('alert-danger', );
      return;
  }
  document.getElementById("subscribeForm").submit();
}

// Top Notificator
function ShowNotificator(add_class, the_text) {
  $('div#notificator').text(the_text).addClass(add_class).slideDown('slow').delay(3000).slideUp('slow', function () {
      $(this).removeClass(add_class).empty();
  });
}

function getProductGrid(){
  var url = document.location.href;
  var route = "product_title_list";
$.ajax({
  type: "GET",
  url: url+route,
  data:{
    term:'2',
  },
  cache: false,
}).done(function (data) {
  //alert(data);
})

}


console.log(fetchDataAsync(url+"product_title_list"));

         $(function() {
            var url = document.location.href;
            $( "#search_in_title2" ).autocomplete({
              source: url+"product_title_list",
              minLength: 2,
              autoFocus:true,
            });
            $( "#search_in_title1" ).autocomplete({
              source: availableTutorials,
              minLength: 2,
              autoFocus:true
           });
         });


   
