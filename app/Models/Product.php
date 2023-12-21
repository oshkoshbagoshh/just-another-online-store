<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory; //TODO: add in a factory with fake data later
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
/*
 * @Author: AJ Javadi
 * @Email: amirjavadi25@gmail.com
 * @Date: 2023-12-19 19:29:45
 * @Last Modified by:   Someone
 * @Last Modified time: 2023-12-19 20:37:24
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
 */

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




//  ----------------- FIN
}
