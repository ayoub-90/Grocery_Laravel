<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comptes;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
use App\Models\categories;
use DB;
use App\Models\Wishlist;
use App\Models\produits;
use App\Models\carts;


class regController extends Controller
{

    public function registration(Request $request){
        $input = $request->all();
        $model=new comptes;
        if($request->has('Photo')){
            $file=$request->Photo;
            $fileName="UserImage/". time() .$file->getClientOriginalName();
            $file->move(public_path("UserImage"),$fileName);
        }

        $model->Nom=$input['Nom'];
        $model->Username=$input['Username'];
        $model->Email=$input['Email'];
        $model->Password=Hash::make($input['Password']);
        $model->Adresse=$input['Adresse'];
        $model->Telephone=$input['Telephone'];
        $model->Role_as=3;
        $model->Photo=$fileName;
        $model->save();


        return redirect('Signin');
    }

    public function registrationseller(Request $request){
        if($request->has('Photo')){
            $file=$request->Photo;
            $fileName="UserImage/". time() .$file->getClientOriginalName();
            $file->move(public_path("UserImage"),$fileName);
        }
        $input = $request->all();
        $model=new comptes;
        $model->Nom=$input['Nom'];
        $model->Username=$input['Username'];
        $model->Email=$input['Email'];
        $model->Password=Hash::make($input['Password']) ;
        $model->Adresse=$input['Adresse'];
        $model->Telephone=$input['Telephone'];
        $model->NomMagasin=$input['NomMagasin'];
        $model->Role_as=2;
        $model->Photo=$fileName;
        $model->save();
        return redirect('Signin');
        if($model){
            return redirect('Signin')->with('success','You have registred successfully');
        }else{
        ;
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'Email' => 'required',
            'Password' => 'required',
        ]);
        $user=comptes::where('Email','=',$request->Email)->first();
        if($user->Role_as==3){
        if($user){
            if(Hash::check($request->Password, $user->Password)){
                $request->session()->put('loginId',$user->id);
                return redirect('Userhome');
            }else{
                return back()->with('fail','Password incorrect.');
            }
        }else{
            return back()->with('fail','this email is not registred.');
        }
    }elseif($user->Role_as==2){
        $request->session()->put('loginId',$user->id);
        return redirect('dashhome');
    }elseif($user->Role_as==1){
        $request->session()->put('loginId',$user->id);
        return redirect('dashadmin');
    }

    }
    public function Userhome(){
        $data=array();
        $prod=array();
        $cat=array();
        $datac=array();
        $datacart=array();
        $prod=DB::table('produits')->get();
        $cat=categories::get();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
            $WishCount=Wishlist::where('user_id','=',Session::get('loginId'))->get();
            $datacart=carts::where('carts.user_id','=',Session::get('loginId'))->join('produits', 'carts.id_prod','=','produits.id')->select('produits.Name','produits.Sale_price','produits.weight','produits.proPhoto','produits.Regular_price','carts.id')->get();
        }
        return view('FrontEnd.User.Client.Userhome',compact('prod','cat','data','WishCount','datacart'));
    }
    public function Accountset(){
        $data=array();
        if(Session::has('loginId')){
            $data=comptes::where('id','=',Session::get('loginId'))->first();
        }
        return view('FrontEnd.User.Client.Account-settings',compact('data'));
    }
}
