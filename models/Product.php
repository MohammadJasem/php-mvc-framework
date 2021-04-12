<?php

namespace app\models;

use app\core\db\DbModel;

class Product extends DbModel
{
    public int $id = 0;
    public string $productName = '';
    public string $sku = '';
    public float $price = 0;
    public int $type = 0;
    public float $dim_1 = 0;
    public float $dim_2 = 0;
    public float $dim_3 = 0;

    public static function tableName(): string
    {
        return 'products';
    }

    public function attributes(): array
    {
        return ['productName', 'sku', 'price', 'type', 'dim_1', 'dim_2', 'dim_3'];
    }

    public function labels(): array
    {
        return [
            'productName' => 'Product Name',
            'sku' => 'SKU Num',
            'price' => 'Price',
            'type' => 'Type',
            'dim_1' => 'Size (MB)',
            'dim_2' => 'Width (CM)',
            'dim_3' => 'Length (CM)'
        ];
    }

    public function rules()
    {
        return [
            'productName' => [self::RULE_REQUIRED],
            'sku' => [self::RULE_REQUIRED, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'price' => [self::RULE_REQUIRED],
            'type' => [self::RULE_REQUIRED],
            'dim_1' => [self::RULE_REQUIRED],
            'dim_2' => [self::RULE_REQUIRED],
            'dim_3' => [self::RULE_REQUIRED],
        ];
    }

    public function save()
    {
        return parent::save();
    }

    public function getAllProducts()
    {
        return parent::findAll();
    }
}