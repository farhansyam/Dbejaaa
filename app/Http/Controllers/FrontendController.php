<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Settings;
use App\User;
use App\Province;
use Auth;
use Session;
use Newsletter;
use DB;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
   
    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }

    public function home(){
        $banners=Banner::where('status','active')->limit(3)->orderBy('id','DESC')->get();
        $setting=Settings::first();
        // return $banner;
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();
        // return $category;
        return view('frontend.index')
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('setting',$setting);
    }   

    public function aboutUs(){
        return view('frontend.pages.about-us');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function productDetail($slug){
        $product_detail= Product::getProductBySlug($slug);
        // dd($product_detail);
        $products = Product::all()->take(4);
        
        $setting=Settings::first();
        return view('frontend.product_detail')->with('product_detail',$product_detail,)->with('setting',$setting)->with('products',$products);
    }


    public function productDetailOrder($slug,$qty){
        $product_detail= Product::getProductBySlug($slug);
        $total =  $product_detail->price * $qty;
        $setting=Settings::first();
        return view('frontend.order')->with('product_detail',$product_detail,)->with('setting',$setting)->with('total',$total)->with('qty',$qty);
    }

    public function product(){
        $products=Product::query();
        $banners=Banner::where('status','active')->limit(3)->orderBy('id','DESC')->get();
        $setting=Settings::first();
        // return $banner;
        $products=Product::where('status','active')->orderBy('id','DESC')->limit(8)->get();
        // return $category;
        return view('frontend.product')
                ->with('banners',$banners)
                ->with('product_lists',$products)
                ->with('setting',$setting);
    }
    public function productSearch(Request $request){
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
                    ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('frontend.pages.product-grids')->with('products',$products)->with('recent_products',$recent_products);
    }

    // Login
    public function login(){
        return view('frontend.pages.login');
    }
    public function loginSubmit(Request $request){
        $data= $request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'status'=>'active'])){
            Session::put('user',$data['email']);
            request()->session()->flash('success','Successfully login');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Invalid email and password pleas try again!');
            return redirect()->back();
        }
    }

    public function logout(){
        Session::forget('user');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }

    public function register(){
        return view('frontend.pages.register');
    }
    public function registerSubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|min:2',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $data=$request->all();
        // dd($data);
        $check=$this->create($data);
        Session::put('user',$data['email']);
        if($check){
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('home');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
    public function create(array $data){
        return User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'status'=>'active'
            ]);
    }
    // Reset password
    public function showResetForm(){
        return view('auth.passwords.old-reset');
    }

    public function subscribe(Request $request){
        if(! Newsletter::isSubscribed($request->email)){
                Newsletter::subscribePending($request->email);
                if(Newsletter::lastActionSucceeded()){
                    request()->session()->flash('success','Subscribed! Please check your email');
                    return redirect()->route('home');
                }
                else{
                    Newsletter::getLastError();
                    return back()->with('error','Something went wrong! please try again');
                }
            }
            else{
                request()->session()->flash('error','Already Subscribed');
                return back();
            }
    }
    
}
