<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    protected $fillable=['title','slug','summary','description','child_cat_id','price','status','photo','size','stock','condition'];

   
   
    public static function getAllProduct(){
        return Product::orderBy('id','desc')->paginate(10);
    }

    public static function getProductBySlug($slug){
        return Product::where('slug',$slug)->first();
    }
   
    public function getReview(){
        return $this->hasMany('App\Models\ProductReview','product_id','id')->with('user_info')->where('status','active')->orderBy('id','DESC');
    }
  
    public static function countActiveProduct(){
        $data=Product::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }

  

    

}
