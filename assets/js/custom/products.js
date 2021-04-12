$( ".productsCheck" ).change(function() {
  var attr = $(this).attr('checked');
  if (typeof attr !== 'undefined' && attr !== false)
    $(this).removeAttr('checked');
  else
    $(this).attr('checked', 'checked');
});

$("#deleteProsucts").click(function(){
  var productIds = [];
  $('.productsCheck').each(function(){
    var attr = $(this).attr('checked');
    if (typeof attr !== 'undefined' && attr !== false)
      productIds.push($(this).val());
  });
  if(productIds.length == 0)
    alert('no selected products to delete');
  else
  $.ajax({
    type: "POST",
    data: {productIds:productIds},
    url: "deleteProducts",
    success: function(){
      location.reload();
    }
 });
})