<?php

namespace App\Http\Controllers;

use App\Models\adressusers;
use App\Models\Cards;
use App\Models\orders;
use App\Models\produits;
use App\Models\Ratings;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;
use App\Models\comptes;
use Hash;
Use File;
Use DB;
Use App\Models\categories;
use App\Models\carts;

class UserController extends Controller
{
    public function Accountset(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.User.Client.Account-settings',compact('data'));
    }
    public function Updateinfo(Request $request,$id){



        $inf=comptes::find($id);
        $inf->Nom=$request->input('Nom');
        $inf->Email=$request->input('Email');
        $inf->Telephone=$request->input('Telephone');
        $inf->update();
        return back()->with('success','info Updated successfully');
    }
    public function changepsswd(Request $request,$id){
        $inf=comptes::find($id);
        $inf->Password=Hash::make($request->input('Password'));
        $inf->update();
        return back()->with('success','info Updated successfully');
    }
    public function delacc(Request $request,$id){
            $inf=comptes::find($id);
            if($inf->Photo){
                $path = $inf->Photo;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $inf->delete();


            return redirect('Signin')->with('success','the account is deleted successfully');
    }
    public function Logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('Signin');
        }
    }
    public function userorders(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.User.Client.account-order',compact('data'));
    }
    public function userAdress(){
        $data=array();
        $address=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $address=adressusers::where('user_id','=',Session::get('loginId'))->get();
        }
        return view('FrontEnd.User.Client.account-adress',compact('data','address'));
    }
    public function payementmethod(){
        $data=array();
        $payement=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $payement=Cards::where('user_id','=',Session::get('loginId'))->get();

        }
        return view('FrontEnd.User.Client.account-payement',compact('data','payement'));
    }
    public function notifications(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.User.Client.account-notification',compact('data'));
    }
    public function modifyimg(Request $request,$id){
        $inf=comptes::find($id);
        if($inf->Photo){
            $path = $inf->Photo;
            if(File::exists($path)){
                File::delete($path);
            }
        if($request->has('Photo')){
            $file=$request->Photo;
            $fileName="UserImage/". time() .$file->getClientOriginalName();
            $file->move(public_path("UserImage"),$fileName);
        }

        $inf->Photo=$fileName;
        $inf->update();
        return back();
    }
}
    public function addadress(Request $request,$id){
        $input=$request->all();
        $model=new adressusers;
        $model->user_id=$id;
        $model->type=$input['type'];
        $model->Adress1=$input['Adress1'];
        $model->Adress2=$input['Adress2'];
        $model->City=$input['City'];
        $model->Zipecode=$input['Zipecode'];
        $value = $request->has('defadrr') ? 1 : 0;
        $model->defadrr=$value;
        $model->save();
        $address=array();
        return redirect('userAdress');
    }
    public function updateaddress(Request $request,$id){
        $input=$request->all();
        $inf=adressusers::find($id);
        $inf->type=$input['type'];
        $inf->Adress1=$input['Adress1'];
        $inf->Adress2=$input['Adress2'];
        $inf->City=$input['City'];
        $inf->Zipecode=$input['Zipecode'];
        $inf->update();
        return back();
    }
    public function delAdress(Request $request,$id){
        $inf=adressusers::find($id);
        $inf->delete();
        return back();
    }
    public function addcard(Request $request,$id){
        $input=$request->all();
        $model=new Cards();
        $model->user_id=$id;
        $model->Payement=$input['Payement'];
        $model->Nameoncard=$input['Nameoncard'];
        $model->Month=$input['Month'];
        $model->Year=$input['Year'];
        $model->Cardnumber=$input['Cardnumber'];
        $model->Cvv=$input['Cvv'];
        $model->save();
        return back();

    }
    public function deletecard(Request $request,$id){
        $inf=Cards::find($id);
        $inf->delete();
        return back();
    }

    // $prod_id,$prod_Name,$prod_price,$pro_photo
    public function addToWishList(Request $request,$idu,$idp){
        if($idu!=0){
            if (Wishlist::where('user_id','=',$idu)->where('id_prod','=',$idp)->exists()) {
                session()->flash('message','already added to wish List !');
                return back();
            }else{
        $model=new Wishlist();
        $model->id_prod=$idp;
        $model->user_id=$idu;
        $model->save();
        return back();}

    }   else{
        session()->flash('message','Please Logine to continue !');
        return false;
    }
}

public function ShowWishListCount(Request $request,$idu){
    $WishCount=Wishlist::where('user_id','=',$idu)->get();

    return view('FrontEnd.User.Client.Userhome',compact('WishCount'));
}

public function DeleteProdWish(Request $request, $idu,$idp){
    $wishdelete=Wishlist::where('user_id','=',$idu)->where('id_prod','=',$idp)->first();
    $wishdelete->delete();
    return back();
}

public function Addtocart(Request $request, $idu, $idp){
    $input=$request->all();
    $prod=produits::where('id','=',$idp)->first();
    $price=$prod->Sale_price;
    if($idu!=0){
        if (carts::where('user_id','=',$idu)->where('id_prod','=',$idp)->exists()) {
            session()->flash('message','already added to cart List !');
            return back();
        }else{
        $model=new carts();
        $model->id_prod=$idp;
        $model->user_id=$idu;
        $model->qte=1;
        $model->price=$price;
        $model->save();
        $wishdelete=Wishlist::where('user_id','=',$idu)->where('id_prod','=',$idp)->first();
        $wishdelete->delete();
        return back();
    }

    }   else{
        session()->flash('message','Please Logine to continue !');
        redirect('Signin');
    }
}

public function DeleteFromCart(Request $request, $id){
    $cartdelete=carts::where('id','=',$id)->first();
    $cartdelete->delete();
    return back();
}
public function CartCount(Request $request, $id){
    $CartCount=Carts::where('id','=',$id)->get();

    return view('FrontEnd.User.Client.Userhome',compact('CartCount'));
}
public function shopcart(){

    $data=array();
    $prod=array();
    $cat=array();
    $datac=array();
    $datacart=array();
    $sumcart=array();
    $prod=DB::table('produits')->get();
    $cat=categories::get();
    if(Session::has('loginId')){
        $data=comptes::where('id','=',Session::get('loginId'))->first();
        $WishCount=Wishlist::where('user_id','=',Session::get('loginId'))->get();
        $datacart=carts::where('carts.user_id','=',Session::get('loginId'))->join('produits', 'carts.id_prod','=','produits.id')->select('produits.Name','produits.Sale_price','produits.weight','produits.proPhoto','produits.Regular_price','carts.id')->get();
        $sumcart=carts::where('user_id','=',Session::get('loginId'))->sum('price');
    }
        return view('FrontEnd.User.Client.Shopcart',compact('prod','cat','data','WishCount','datacart','sumcart'));
    }
    public function checkout(){
        $data=array();
        $datacart=array();
        $WishCount=array();
        $address=array();
        $paymod=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $WishCount=Wishlist::where('user_id','=',Session::get('loginId'))->get();
            $datacart=carts::where('carts.user_id','=',Session::get('loginId'))->join('produits', 'carts.id_prod','=','produits.id')->select('produits.Name','produits.Sale_price','produits.weight','produits.proPhoto','produits.Regular_price','produits.id','carts.qte')->get();
            $address=adressusers::where('user_id','=',Session::get('loginId'))->get();
            $paymod=Cards::where('user_id','=',Session::get('loginId'))->get();
            $sumcart=carts::where('user_id','=',Session::get('loginId'))->sum('price');
     }
        return view('FrontEnd.User.Client.Checkout',compact('data','WishCount','datacart','address','paymod','sumcart'));
    }
    public function placeorder(Request $request,$id){
        $datacart=array();
        $input=$request->all();

        $datacart=carts::where('carts.user_id','=',$id)->select('id')->get();
        $sumcart=carts::where('user_id','=',Session::get('loginId'))->sum('price');
        foreach($datacart as $item){
            $model=new orders();
            $model->id_address=$input['address'];
            $model->id_payment=$input['paymod'];
            $model->instructions=$input['instructions'];
            $model->id_prod=$item->id;
            $model->prix_total=$sumcart;
            $model->user_id=$id;
            $model->save();
            carts::where('id', '=', $item->id)->delete();
        }
        return redirect('Userhome');
    }


  //$cartdelete=carts::where('id','=',$id)->first();
            //$cartdelete->delete();

    public function addrating(Request $request,$idp,$idu){
        $start_rated = $request->input('rate');
        $input=$request->all();
        $model=new Ratings;
        $model->user_id=$idu;
        $model->prod_id=$idp;
        $model->headline=$input['headline'];
        $model->Media=$input['Media'];
        $model->Writen_review=$input['Writen_review'];
        $model->start_rated=$start_rated;
        $model->save();
        return back();
    }
    public function prodsearch(Request $request){
        $searchproduct=array();
        $data=array();
        $prod=array();
        $cat=array();
        $datac=array();
        $datacart=array();
        $prod=DB::table('produits')->get();
        $cat=categories::get();
        if($request->search){
            $searchproduct=produits::where('Name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('Description', 'LIKE', '%'.$request->search.'%')
            ->get();
        }
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $WishCount=Wishlist::where('user_id','=',Session::get('loginId'))->get();
            $datacart=carts::where('carts.user_id','=',Session::get('loginId'))->join('produits', 'carts.id_prod','=','produits.id')->select('produits.Name','produits.Sale_price','produits.weight','produits.proPhoto','produits.Regular_price','carts.id')->get();
        }

        return view('FrontEnd.User.Client.productsearch',compact('searchproduct','cat','data','WishCount','datacart'));

    }
}
