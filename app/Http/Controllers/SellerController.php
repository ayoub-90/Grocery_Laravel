<?php

namespace App\Http\Controllers;

use App\Models\produits;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\comptes;
use DB;

class SellerController extends Controller
{
    public function dashboard(){
        $data=array();
        $comptes=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $comptes = DB::table('orders')
            ->join('produits', 'orders.id_prod', '=', 'produits.id')
            ->join('comptes', 'comptes.id', '=', 'orders.user_id')
            ->where('produits.user_id', Session::get('loginId')) // Adjust the condition as per your requirement
            ->select('comptes.*', DB::raw('SUM(orders.prix_total) as total_prix'))
            ->distinct()
            ->orderBy('comptes.id')
            ->groupBy('comptes.id')
            ->first();
            $count = DB::table('orders')
            ->join('produits', 'orders.id_prod', '=', 'produits.id')
            ->join('comptes', 'produits.user_id', '=', 'comptes.id')
            ->where('comptes.id', Session::get('loginId')) // Remplacez 1 par l'ID du compte souhaité
            ->count();
            $clients = DB::table('orders')
            ->join('produits', 'orders.id_prod', '=', 'produits.id')
            ->join('comptes', 'comptes.id', '=', 'orders.user_id')
            ->where('produits.user_id', Session::get('loginId')) // Adjust the condition as per your requirement
            ->select('comptes.*', DB::raw('SUM(orders.prix_total) as total_prix'))
            ->distinct()
            ->orderBy('comptes.id')
            ->groupBy('comptes.id')
            ->get();
            $orderedProducts = DB::table('orders')
            ->join('produits', 'orders.id_prod', '=', 'produits.id')
            ->join('comptes', 'comptes.id', '=', 'orders.user_id')
            ->join('cards', 'orders.id_payment', '=', 'cards.id')
            ->select('produits.*', 'cards.Payement','comptes.Username')
            ->where('produits.user_id', Session::get('loginId'))
            ->orderBy('comptes.Nom')
            ->get();

        }
        return view('FrontEnd.dashboard',compact('data','comptes','count','clients','orderedProducts'));
    }
    public function Product(){
        $data=array();
        $prod=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $prod=produits::where('user_id','=',Session::get('loginId'))->get();
        }
        return view('FrontEnd.DashboardSeller.Product',compact('data','prod'));
    }
    public function Categories(){
        $data=array();
        $cat=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $cat=categories::get();
        }
        return view('FrontEnd.DashboardSeller.Categories',compact('data','cat'));
    }
    public function orders(){
        $data=array();
        $orderedProducts=array();

        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $orderedProducts = DB::table('orders')
            ->join('produits', 'orders.id_prod', '=', 'produits.id')
            ->join('comptes', 'comptes.id', '=', 'orders.user_id')
            ->join('cards', 'orders.id_payment', '=', 'cards.id')
            ->select('produits.*', 'cards.Payement','comptes.Username')
            ->where('produits.user_id', Session::get('loginId'))
            ->orderBy('comptes.Nom')
            ->get();
        }
        return view('FrontEnd.DashboardSeller.orders',compact('data','orderedProducts'));
    }
    public function customers(){
        $data=array();
        $comptes=array();

        if(Session::has('loginId')){
            $comptes = DB::table('orders')
            ->join('produits', 'orders.id_prod', '=', 'produits.id')
            ->join('comptes', 'comptes.id', '=', 'orders.user_id')
            ->where('produits.user_id', Session::get('loginId')) // Adjust the condition as per your requirement
            ->select('comptes.*', DB::raw('SUM(orders.prix_total) as total_prix'))
            ->distinct()
            ->orderBy('comptes.id')
            ->groupBy('comptes.id')
            ->get();
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardSeller.customers',compact('data','comptes'));
    }
    public function reviews(){
        $data = array();
        $rating_sum = 0;
        $rating = array();

        if (Session::has('loginId')) {
            $data = comptes::where('id', '=', Session::get('loginId'))->first();

            $rating = DB::table('produits')
                ->join('ratings', 'produits.id', '=', 'ratings.prod_id')
                ->join('comptes', 'comptes.id', '=', 'ratings.user_id')
                ->select('produits.Name', 'ratings.headline', 'comptes.Username','comptes.Username', DB::raw('SUM(ratings.start_rated) as total_rating'))
                ->where('produits.user_id', Session::get('loginId'))
                ->groupBy('produits.Name', 'ratings.headline', 'comptes.Username')
                ->distinct()
                ->get();

            $rating_sum = DB::table('produits')
                ->join('ratings', 'produits.id', '=', 'ratings.prod_id')
                ->join('comptes', 'comptes.id', '=', 'ratings.user_id')
                ->select(DB::raw('SUM(ratings.start_rated) as total_rating'))
                ->where('produits.user_id', Session::get('loginId'))
                ->groupBy('produits.Name', 'ratings.headline', 'comptes.Username')
                ->get()
                ->sum('total_rating');
        }

        if ($rating->count() > 0) {
            $rating_value = $rating_sum / $rating->count();
        } else {
            $rating_value = 0;
        }


        return view('FrontEnd.DashboardSeller.reviews',compact('data','rating','rating_value'));
    }
    public function settings(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.DashboardSeller.settings',compact('data'));
    }
    public function addProduct(){
        $data=array();
        $cat=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $cat=categories::get();
        }
        return view('FrontEnd.DashboardSeller.AddProduct',compact('data','cat'));
    }
    public function inserprod(Request $request,$id){
        $input=$request->all();
        $model = new produits;

        if($request->has('proPhoto')){
            $file=$request->proPhoto;
            $filename="Products/". time() .$file->getClientOriginalName();
            $file->move(public_path("Products"),$filename);

        }
            $model->idc_cat=$input['idc_cat'];
            $model->user_id=$id;
            $model->Name=$input['Name'];
            $model->weight=$input['weight'];
            $model->Utnits=$input['Utnits'];
            $model->proPhoto=$filename;
            $model->Description=$input['Description'];
            $value = $request->has('Instock') ? 1 : 0;
            $model->Instock=$value;
            $model->Codeprod=$input['Codeprod'];
            $model->CodeSku=$input['CodeSku'];
            $model->status=$input['status'];
            $model->Regular_price=$input['Regular_price'];
            $model->Sale_price=$input['Sale_price'];
            $model->meta_title=$input['meta_title'];
            $model->meta_description=$input['meta_description'];
            $model->save();

            return redirect('Product');
    }
}
