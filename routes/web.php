<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


route::post('Zk.TestDevice', function(){
    
    $dataObj=request()->dataObj;
    $device_ip=$dataObj['device_ip'];
    
    $comm_protocol=$dataObj['comm_protocol'];
    $port=$dataObj['port'];
    $device_id=$dataObj['device_id'];
    $password=$dataObj['password'];
    try {
        $zk = new ZK40($device_ip, $port, $comm_protocol,$password);
 

        $zk->connect();
    } catch (\Throwable $th) {
       dd($th);
    }
    $zk->testVoice();
    // dd($zk);
    // dd($zk->getAttendance());
    if(!$zk->received_data){
        return Response::json(['errors' => []]);

    }else{
        return Response::json(['success' => []]);

    }




})->name('Zk.TestDevice');