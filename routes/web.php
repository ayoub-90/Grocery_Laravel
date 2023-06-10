<?php
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\TemplateController@index')->name('home');
Route::get('/search','App\Http\Controllers\TemplateController@searchbare')->name('search');
Route::get('/prodsearch','App\Http\Controllers\UserController@prodsearch')->name('prodsearch');
Route::get('/Bread_Eggs','App\Http\Controllers\TemplateController@shop_grid')->name('shop_grid');
Route::get('/Snacks_Munchies','App\Http\Controllers\TemplateController@Snacks_Munchies')->name('Snacks_Munchies');
Route::get('/Fruits_Vegetables','App\Http\Controllers\TemplateController@Fruits_Vegetables')->name('Fruits_Vegetables');
Route::get('/Cold_Drink','App\Http\Controllers\TemplateController@Cold_Drink')->name('Cold_Drink');
Route::get('/Breakfast_Food','App\Http\Controllers\TemplateController@Breakfast_Food')->name('Breakfast_Food');
Route::get('/Bakery_Biscuits','App\Http\Controllers\TemplateController@Bakery_Biscuits')->name('Bakery_Biscuits');
Route::get('/Meat_Fish','App\Http\Controllers\TemplateController@Meat_Fish')->name('Meat_Fish');
Route::get('/Store_list','App\Http\Controllers\TemplateController@Store_list')->name('Store_list');
Route::get('/productview/{id}','App\Http\Controllers\TemplateController@productview')->name('productview')->middleware('isLoggedIn');
Route::get('/CategoryView/{id}','App\Http\Controllers\TemplateController@CategoryView')->name('CategoryView')->middleware('isLoggedIn');
Route::get('/Wishlist','App\Http\Controllers\TemplateController@Wishlist')->name('Wishlist')->middleware('isLoggedIn');
Route::get('/Cart','App\Http\Controllers\TemplateController@Cart')->name('Cart')->middleware('isLoggedIn');

Route::get('/Signin','App\Http\Controllers\TemplateController@Signin')->name('Signin');//->middleware('alreadyLoggedin');
Route::get('/Signup','App\Http\Controllers\TemplateController@Signup')->name('Signup');
Route::get('/signupseller','App\Http\Controllers\TemplateController@signupseller')->name('signupseller');
Route::get('/forgotpassword','App\Http\Controllers\TemplateController@forgotpassword')->name('forgotpassword');
Route::post('/signup',[regController::class,'registration'])->name('signup');
Route::post('/signupseller',[regController::class,'registrationseller'])->name('signupseller');
Route::post('/login',[regController::class,'login'])->name('login');
Route::post('/Updateinfo/{id}','App\Http\Controllers\UserController@Updateinfo')->name('Updateinfo');
Route::post('/changepsswd/{id}','App\Http\Controllers\UserController@changepsswd')->name('changepsswd');
Route::get('/delacc/{id}','App\Http\Controllers\UserController@delacc')->name('delacc');
route::get('/Userhome','App\Http\Controllers\regController@Userhome')->name('Userhome')->middleware('isLoggedIn');
Route::get('/Accountset','App\Http\Controllers\UserController@Accountset')->name('Accountset');//->middleware('isLoggedIn');
Route::get('/Logout','App\Http\Controllers\UserController@Logout')->name('Logout');
Route::get('userorders','App\Http\Controllers\UserController@userorders')->name('userorders');//->middleware('isLoggedIn');
Route::get('/userAdress','App\Http\Controllers\UserController@userAdress')->name('userAdress');//->middleware('isLoggedIn');
Route::get('/payementmethod','App\Http\Controllers\UserController@payementmethod')->name('payementmethod');//->middleware('isLoggedIn');
Route::get('/notifications','App\Http\Controllers\UserController@notifications')->name('notifications');//->middleware('isLoggedIn');
Route::post('/modifyimg/{id}','App\Http\Controllers\UserController@modifyimg')->name('modifyimg');
Route::post('/addadress/{id}','App\Http\Controllers\UserController@addadress')->name('addadress');
Route::post('/updateaddress/{id}','App\Http\Controllers\UserController@updateaddress')->name('updateaddress');
Route::get('/delAdress/{id}','App\Http\Controllers\UserController@delAdress')->name('delAdress');
Route::post('/addcard/{id}','App\Http\Controllers\UserController@addcard')->name('addcard');
Route::get('/deletecard/{id}','App\Http\Controllers\UserController@deletecard')->name('deletecard');


Route::get('/dashhome','App\Http\Controllers\SellerController@dashboard')->name('dashhome');
Route::get('/Product','App\Http\Controllers\SellerController@Product')->name('Product');
Route::get('/addProduct','App\Http\Controllers\SellerController@addProduct')->name('addProduct');
route::get('/Categories','App\Http\Controllers\SellerController@Categories')->name('Categories');
Route::get('/addcategory','App\Http\Controllers\SellerController@addcategory')->name('addcategory');
route::get('/orders','App\Http\Controllers\SellerController@orders')->name('orders');
route::get('/customers','App\Http\Controllers\SellerController@customers')->name('customers');
route::get('/reviews','App\Http\Controllers\SellerController@reviews')->name('reviews');
route::get('/settings','App\Http\Controllers\SellerController@settings')->name('settings');
Route::Post('/inserprod/{id}','App\Http\Controllers\SellerController@inserprod')->name('inserprod');


Route::get('/dashadmin','App\Http\Controllers\AdminController@dashadmin')->name('dashadmin');
Route::get('/sellersAdmin','App\Http\Controllers\AdminController@sellersAdmin')->name('sellersAdmin');
Route::get('/vendorsAdmin','App\Http\Controllers\AdminController@vendorsAdmin')->name('vendorsAdmin');
Route::get('/ProAdmin','App\Http\Controllers\AdminController@ProAdmin')->name('ProAdmin');
route::get('/categorieAdmin','App\Http\Controllers\AdminController@categorieAdmin')->name('categorieAdmin');
Route::get('/addcategories','App\Http\Controllers\AdminController@addcategories')->name('addcategories');
route::get('/ordersAdmin','App\Http\Controllers\AdminController@ordersAdmin')->name('ordersAdmin');
route::get('/customersAdmin','App\Http\Controllers\AdminController@customersAdmin')->name('customersAdmin');
route::get('/reviewsAdmin','App\Http\Controllers\AdminController@reviewsAdmin')->name('reviewsAdmin');
route::get('/settingsAdmin','App\Http\Controllers\AdminController@settingsAdmin')->name('settingsAdmin');
Route::Post('/insercat/{id}','App\Http\Controllers\AdminController@insercat')->name('insercat');


route::get('wishlist/{idu}/{idp}',[UserController::class,'addToWishList']);
route::get('wishlistCount/{id}','App\Http\Controllers\UserController\@WishListCount')->name('WishListCount');
route::get('wishlistdelete/{idu}/{idp}',[UserController::class,'DeleteProdWish']);

route::get('Addtocart/{idu}/{idp}',[UserController::class,'Addtocart']);
route::get('DeleteFromCart/{id}',[UserController::class,'DeleteFromCart']);
route::get('CartCount/{id}','App\Http\Controllers\UserController@CartCount')->name('CartCount');


Route::get('shopcart/{idu}','App\Http\Controllers\UserController@shopcart');
Route::get('checkout/','App\Http\Controllers\UserController@checkout')->name('checkout');
Route::post('/placeorder/{id}','App\Http\Controllers\UserController@placeorder')->name('placeorder');
Route::post('add-rating/{idp}/{idu}','App\Http\Controllers\UserController@addrating');
