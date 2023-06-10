<?php

namespace App\Http\Controllers;
use App\Models\Ratings;
use ToStringFormat;
use Session;
use App\Models\User;
use App\Models\comptes;
use App\Models\produits;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wishlist;
use App\Models\carts;

class TemplateController extends Controller
{
    public function index(){

        $prod=array();
        $cat=array();
        $prod=DB::table('produits')->get();

        $cat=categories::get();
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }

        return view('FrontEnd.home',compact('prod','cat','data'));
    }
    public function searchbare(Request $request){
        $searchproduct=array();
        $cat=array();
        $cat=categories::get();
        if($request->search){
            $searchproduct=produits::where('Name', 'LIKE', "%$request->search%")
            ->orWhere('Description', 'LIKE', "%$request->search%")
            ->get();
            return view('FrontEnd.User.Client.Shopfilter',compact('searchproduct','cat'));
        }
    }

    public function shop_grid(){
        return view('FrontEnd.Page.shop-grid');
    }
    public function Snacks_Munchies(){
        return view('FrontEnd.Page.Snacks_Munchies');
    }
    public function Fruits_Vegetables(){
        return view('FrontEnd.Page.Fruits_Vegetables');
    }
    public function Cold_Drink(){
        return view('FrontEnd.Page.Cold_Drink');
    }
    public function Breakfast_Food(){
        return view('FrontEnd.Page.Breakfast_Food');
    }
    public function Bakery_Biscuits(){
        return view('FrontEnd.Page.Bakery_Biscuits');
    }
    public function Meat_Fish(){
        return view('FrontEnd.Page.Meat_Fish');
    }
    public function Store_list(){
        return view('FrontEnd.Menu.Store_list');
    }
    public function Wishlist(){
        $data=array();
        $prod=array();
        $cat=array();
        $wish=array();
        $WishCount=array();
        $datacart=array();
        $prod=DB::table('produits')->get();
        $cat=categories::get();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $WishCount=Wishlist::where('Wishlists.user_id','=',Session::get('loginId'))->join('produits', 'Wishlists.id_prod','=','produits.id')->select('produits.*')->get();
            $datacart=carts::where('carts.user_id','=',Session::get('loginId'))->join('produits', 'carts.id_prod','=','produits.id')->select('carts.id','produits.Name','produits.Sale_price','produits.weight','produits.proPhoto','produits.Regular_price')->get();
        }
        foreach($WishCount as $var){
            $wish=produits::where('id','=',$var->id_prod)->get();
        }

        return view('FrontEnd.Menu.Wishlist',compact('prod','cat','data','WishCount','wish','datacart'));
    }
    public function Signin(){
        return view('FrontEnd.Sign.Signin');
    }
    public function Signup(){
        return view('FrontEnd.Sign.Signup');
    }
    public function forgotpassword(){
        return view('FrontEnd.Sign.forgotpassword');
    }
    public function signupseller(){
        return view('FrontEnd.Sign.signupseller');
    }
    public function productview(Request $request,$id){
        $prod=array();
        $datap=array();
        $datap=DB::table('produits')->get();
        $cat=array();
        $data=array();
        $prod=produits::where('id','=',$id)->first();
        $sel=comptes::where('id','=',$prod->user_id)->first();
        $cat=categories::where('idcat','=',$prod->idc_cat)->first();

        $rating = Ratings::where('prod_id', $id)->get();
        $rating_sum = Ratings::where('prod_id', $id)->sum('start_rated');

        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }

        if ($rating->count() > 0) {
            $rating_value = $rating_sum / $rating->count();
        } else {
            $rating_value = 0;
        }

        return view('FrontEnd.Page.ProductView',compact('prod','sel','datap','cat','data','rating','rating_value'));
    }
    public function CategoryView(Request $request,$idc){
        $prod=array();
        $cat=array();
        $datac=array();
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        $datac=DB::table('categories')->get();
        $cat=categories::where('idcat','=',$idc)->first();
        $prod=produits::where('idc_cat','=',$idc)->get();
        return view('FrontEnd.Page.CategoryView',compact('prod','cat','datac','data'));
    }

    public function Cart(){
        $data=array();
        $prod=array();
        $cat=array();
        $datacart=array();
        $CartCount=array();
        $sumcart=array();
        $prod=DB::table('produits')->get();
        $cat=categories::get();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $datacart=carts::where('user_id','=',Session::get('loginId'))->join('produits', 'carts.id_prod','=','produits.id')->get();
            //$sumcart=carts::where('user_id','=',Session::get('loginId'))->join()
        }

        foreach ($datacart as $cart) {
            $CartCount=produits::where('id','=',$cart->id_prod)->get();
        }

        return view('FrontEnd.User.Userhome',compact('prod','cat','data','datacart','CartCount','sumcart'));
    }




}
