<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $product_id
 * @property integer $brand_id
 * @property integer $category_id
 * @property integer $product_price
 * @property string $product_title
 * @property string $product_image
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'category_id', 'product_price', 'product_title', 'product_image'], 'required'],
            [['brand_id', 'category_id', 'product_price'], 'integer'],
            [['product_title', 'product_image'], 'string'],
            [['product_image'],'file','extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'brand_id' => 'Brand ID',
            'category_id' => 'Category ID',
            'product_price' => 'Product Price',
            'product_title' => 'Product Title',
            'product_image' => 'Product Image',
        ];
    }
}
