$( "#productType" ).change(function() {
    var htmlContent = '';
    if($(this).val() == 1)
        htmlContent = '<div class="col-3">'+
                        '<div class="form-group">'+
                            '<label>Size (MB)</label>'+
                            '<input type="number" class="form-control" name="dim_1" value="0" step="0.01">'+
                        '</div>'+
                    '</div>'+
                    '<input type="hidden" name="dim_2" value="0.1">'+
                    '<input type="hidden" name="dim_3" value="0.1">';
    else if($(this).val() == 2)
        htmlContent = '<div class="col-3">'+
                        '<div class="form-group">'+
                            '<label>Weight (Kg)</label>'+
                            '<input type="number" class="form-control" name="dim_1" value="0" step="0.01">'+
                        '</div>'+
                    '</div>'+
                    '<input type="hidden" name="dim_2" value="0.1">'+
                    '<input type="hidden" name="dim_3" value="0.1">';
    else if($(this).val() == 3)
        htmlContent = '<div class="col-3">'+
                    '<div class="form-group">'+
                        '<label>Height (CM)</label>'+
                        '<input type="number" class="form-control" name="dim_1" value="0" step="0.01">'+
                    '</div>'+
                '</div>'+
                '<div class="col-3">'+
                    '<div class="form-group">'+
                        '<label>Width (CM)</label>'+
                        '<input type="number" class="form-control" name="dim_2" value="0" step="0.01">'+
                    '</div>'+
                '</div>'+
                '<div class="col-3">'+
                    '<div class="form-group">'+
                        '<label>Length (CM)</label>'+
                        '<input type="number" class="form-control" name="dim_3" value="0" step="0.01">'+
                    '</div>'+
                '</div>';
    $('.productTypeDims').html(htmlContent);
    
})