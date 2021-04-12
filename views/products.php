<?php
if(count($products) == 0)
    echo '<div><h1>No products</h1></div><div class="row mt-3 float-right"><a class="btn btn-success ml-2" href="addProduct" role="button">Add Product</a></div>';
else{
    echo '<div class="row mt-3 float-right"><button type="button" id ="deleteProsucts" class="btn btn-danger">Delete</button><a class="btn btn-success ml-2" href="addProduct" role="button">Add Product</a></div>';
    echo '<div class="row mt-3"></div>';
    echo '<div class="row mt-3"></div>';
    echo '<div class="mt-5 row">';
    for($i = 0; $i < count($products); $i++) {
        echo '<div class="col-md-4 col">
            <div class="card p-3">
                <div class="form-check">
                <input class="form-check-input productsCheck" type="checkbox" value="'.$products[$i]['id'].'" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                </label>
                </div>
                <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                    <div class="d-flex flex-column ml-2"><span>'.$products[$i]['productName'].'</span><span class="text-black-50">'.$products[$i]['sku'].'</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6>'.$products[$i]['price'].'$</h6>
                <div class="d-flex justify-content-between install mt-3"><span>';
        if($products[$i]['type'] == 1)
            echo 'Size :'. $products[$i]['dim_1'].' MB';
        else if($products[$i]['type'] == 2)
            echo 'Weight :'. $products[$i]['dim_1'].' Kg';
        else if($products[$i]['type'] == 3)
            echo 'Dimension :'. $products[$i]['dim_1'].'*'.$products[$i]['dim_2'].'*'.$products[$i]['dim_3'];
        echo    '</span><span class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
            </div>
        </div>';
    }
    echo '</div>';
}
?>