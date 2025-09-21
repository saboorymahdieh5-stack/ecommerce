<?php
class product extends model{
  public  $table="product";

  public $fillable=[
    "product_id"=>"id",
    "product_name"=>"name",
    "product_price"=>"price",
    "product_category"=>"category",
    "product_description"=>"description"
  ];
  // public  $related=["category"=>[" product.category "," category.id "]];
  protected function category($args){
   return $this->belongsTo("category",$args);
  }
}