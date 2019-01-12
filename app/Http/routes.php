<?php

use App\User;
use App\Address;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});





  Route::get('insert',function(){
    // creat user
   $user           = new User;
   $user->name     = 'ahmed';
   $user->email     = 'ahmed@gmail.com';
   $user->password = '123';
   $user->save();
    // creat new addres for the new user by the  relationship 
   $newuser = User::find(1);
   $address  = new Address(['name'=>'ismail elhakim bek street alexandrya']);
   $newuser->address()->save($address);


  });




 Route::get('update', function(){

    $address = Address::where('user_id',1)->first();
    $address->name = " new address kafr abdou street";
    $address->save();

 });


 Route::get('read', function(){

   $user = User::find(1);
   echo $user->address->name;

 });



  Route::get('delete', function(){

   $user = User::find(1);

   $user->address()->delete();

  });





































