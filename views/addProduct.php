<?php

use app\core\form\Form;

$form = new Form();
?>

<h1>Register</h1>

<?php $form = Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'productName', 'text') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'sku', 'text') ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'price', 'number') ?>
        </div>
        <div class="col form-group">
            <label>Product</label>
            <select class="custom-select" id="productType" name="type" class="form-control" value="1">
                <option value="1">DVD-disc</option>
                <option value="2">Book</option>
                <option value="3">Furniture</option>
            </select>
        </div>
    </div>
    
    <div class="row productTypeDims">
        <div class="col-3">
            <?php echo $form->field($model, 'dim_1', 'number') ?>
        </div>
        <input type="hidden" name="dim_2" value="0.1">
        <input type="hidden" name="dim_3" value="0.1">
    </div>
    <button class="btn btn-success">Submit</button>
<?php Form::end() ?>