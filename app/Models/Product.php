<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; //TODO: add in a factory with fake data later
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Product extends Model
{
/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2023-12-19 19:29:45
 * @Last Modified by:   Someone
 * @Last Modified time: 2023-12-21 12:29:26
 * @Description: file:///Users/aj/sandbox/just-another-online-store/app/Models/Product.php
 *
 * PRODUCT ATTRICUTES
 * $this->attributes['id'] - int - contains the product primary key (id)
 * $this->attributes['name'] - string - contains the product name
 * $this->attributes['description'] - string - contains the product description
 * $this->attributes['image'] - string - contains the product image
 * $this->attributes['price'] - int - contains the product price
 * $this->attributes['created_at'] - timestamp - contains the product creation date
 * $this->attributes['updated_at'] - timestamp - contains the product updated date
 * $this->items - Item[] - contains the associated items
 */

    // factory

    use HasFactory;


    
 public function getid()
 {
    return $this->attributes['id'];
 }

 public function setid($id)
 {
    $this->attributes['id'] = $id;
 }

 public function getName() {

    //2023-12-19 20:37:26 - reformatted name
    return strtoupper($this->attributes['name']);
 }

 public function setName($name) {

    $this->attributes['name'] = $name;
 }

 public function getDescription() {

    return $this->attributes['description'];
 }

 public function setDescription($description) {

    $this->attributes['description'] = $description;
 }


 public function getImage() {

    return $this->attributes['image'];
 }

 public function setImage($image) {

    $this->attributes['image'] = $image;

}
 public function getPrice() {

    return $this->attributes['price'];
 }

 public function setPrice($price) {

    $this->attributes['price'] = $price;

}



 public function getCreatedAt() {

    return $this->attributes['created_at'];
 }

 public function setCreatedAt($createdAt) {

    $this->attributes['created_at'] = $createdAt;

}
 public function getUpdatedAt() {

    return $this->attributes['updated_at'];
 }

 public function setUpdatedAt($updatedAt) {

    $this->attributes['updated_at'] = $updatedAt;

}

public static function validate($request)  {
    //
    $request ->validate([
        "name" => "required|max:255",
        "description" => "required",
        "price" => "required|numeric|gt:0",
        "image" => "image",
    ]);
}

//  Sum prices by quantity for the cart
/**
 * The function calculates the total price by multiplying the price of each product with its
 * corresponding quantity and summing them up.
 *
 * @param products An array of Product objects. Each Product object has a getPrice() method that
 * returns the price of the product.
 * @param productsInSession An array that contains the quantities of each product in the session. The
 * keys of the array are the product IDs and the values are the quantities.
 *
 * @return the total sum of prices calculated by multiplying the price of each product with the
 * corresponding quantity in the  array.
 */
public static function sumPricesByQuantities($products, $productsInSession)
{
    $total = 0;
    foreach ($products as $product) {
        $total = $total + ($product->getPrice()* $productsInSession[$product->getId()]);

    }


    return $total;

}

// public function getId()

// items
public function items()
{
    return $this->hasMany(Item::class);
}

public function getItems()
{
    return $this->items;
}

public function setItems($items)
{
    $this->items = $items;
}



//  ----------------- FIN
}
