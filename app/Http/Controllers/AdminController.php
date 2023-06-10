<?php

namespace App\Http\Controllers;


use App\Models\produits;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\comptes;


class AdminController extends Controller
{
    public function dashadmin(){
        $data=array();
        $totalPrice = DB::table('orders')->sum('prix_total');
        $order= DB::table('orders')->count('*');
        $count = DB::table('comptes')
                ->where('Role_as', 3)
                ->count();
        $orders = DB::table('orders')
                ->join('produits', 'orders.id_prod', '=', 'produits.id')
                ->join('cards', 'orders.id_payment', '=', 'cards.id')
                ->select('orders.*', 'produits.Name', 'cards.Payement')
                ->get();

        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.dashadmin',compact('data','totalPrice','order','count','orders'));
    }
    public function ProAdmin(){
        $data=array();
        $prod=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $prod = produits::join('categories', 'produits.idc_cat', '=', 'categories.idcat')
            ->select('produits.*', 'categories.CategoryName')
            ->get();
        }
        return view('FrontEnd.DashboardAdmin.Product',compact('data','prod'));
    }
    public function categorieAdmin(){
        $data=array();
        $cat=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $cat=categories::get();
        }
        return view('FrontEnd.DashboardAdmin.categorie ',compact('data','cat'));
    }
    public function ordersAdmin(){
        $data=array();
        $orders = DB::table('orders')
        ->join('produits', 'orders.id', '=', 'produits.id')
        ->join('comptes', 'orders.user_id', '=', 'comptes.id')
        ->join('cards', 'orders.id_payment', '=', 'cards.id')
        ->select('orders.*', 'produits.*', 'comptes.Nom', 'cards.Payement')
        ->get();

        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardAdmin.orders',compact('data','orders'));
    }
    public function customersAdmin(){
        $data=array();
        $comptes = DB::table('comptes')
        ->select('comptes.*', DB::raw('SUM(orders.prix_total) as total_price'))
        ->join('orders', 'comptes.id', '=', 'orders.user_id')
        ->where('comptes.Role_as', 3)
        ->groupBy('comptes.id')
        ->get();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardAdmin.customers',compact('data','comptes'));
    }
    public function reviewsAdmin(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $rating =DB::table('produits')
                    ->join('ratings', 'produits.id', '=', 'ratings.prod_id')
                    ->join('comptes', 'comptes.id', '=', 'ratings.user_id')
                    ->select('produits.Name', 'ratings.headline', 'comptes.Username', DB::raw('SUM(ratings.start_rated) as total_rating'))
                    ->where('comptes.Role_as', 3)
                    ->groupBy('produits.Name', 'ratings.headline', 'comptes.Username')
                    ->get();
            $rating_sum = DB::table('produits')
                ->join('ratings', 'produits.id', '=', 'ratings.prod_id')
                ->join('comptes', 'comptes.id', '=', 'ratings.user_id')
                ->select(DB::raw('SUM(ratings.start_rated) as total_rating'))
                ->where('comptes.Role_as', 3)
                ->groupBy('produits.Name', 'ratings.headline', 'comptes.Username')
                ->get()
                ->sum('total_rating');
        }

        if ($rating->count() > 0) {
            $rating_value = $rating_sum / $rating->count();
        } else {
            $rating_value = 0;
        }

        return view('FrontEnd.DashboardAdmin.reviews',compact('data','rating','rating_value'));
    }
    public function settingsAdmin(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardAdmin.settings',compact('data'));
    }
    public function sellersAdmin(){
        $data=array();
        $comptes = DB::table('comptes')
        ->select('comptes.*', DB::raw('SUM(orders.prix_total) as total_price'), 'produits.user_id')
        ->join('produits', 'produits.user_id', '=', 'comptes.id')
        ->join('orders', 'produits.id', '=', 'orders.id_prod')
        ->where('comptes.Role_as', 2)
        ->groupBy('comptes.id', 'produits.user_id')
        ->get();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardAdmin.sellers',compact('data','comptes'));
    }
    public function vendorsAdmin(){
        $data=array();
        $comptes = DB::table('comptes')
        ->select('comptes.*', DB::raw('SUM(orders.prix_total) as total_price'), 'produits.user_id')
        ->join('produits', 'produits.user_id', '=', 'comptes.id')
        ->join('orders', 'produits.id', '=', 'orders.id_prod')
        ->where('comptes.Role_as', 2)
        ->groupBy('comptes.id', 'produits.user_id')
        ->get();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardAdmin.vendors',compact('data','comptes'));
    }
    public function addcategories(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardAdmin.addcategories',compact('data'));
    }

    public function insercat(Request $request,$id){
        $input=$request->all();
        $model = new categories;

        if($request->has('CatPhoto')){
            $file=$request->CatPhoto;
            $filename="categoriesImg/". time() .$file->getClientOriginalName();
            $file->move(public_path("categoriesImg/"),$filename);

        }
            $model->user_id=$id;
            $model->CategoryName=$input['CategoryName'];
            $model->Date=$input['Date'];
            $model->CatPhoto=$filename;
            $model->Description=$input['Description'];
            $value = $request->has('status') ? 1 : 0;
            $model->status=$value;
            $productsNumber= produits::where('idc_cat',$model->idcat)->count('idc_cat');
            $model->NumberOfProducts=$productsNumber;
            $model->meta_title=$input['meta_title'];
            $model->meta_description=$input['meta_description'];
            $model->save();

            return redirect('categorieAdmin');
    }

}

