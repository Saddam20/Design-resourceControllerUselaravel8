<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerSellerModel;


class ClientController extends Controller
{
    public function index(){

        return view('Clients.client');
    }

    public function store(Request $request){
        $client = new BuyerSellerModel();
        $client->buyer=$request->input('bname');
        $client->buyer_phone=$request->input('bpone');
        $client->seller=$request->input('sname');
        $client->seller_phone=$request->input('spone');
        $client->quantity=$request->input('qty');
        $client->price=$request->input('price');
        $client->description=$request->input('description');
        
        $client->save();

       return view('Clients.client')->with('Clients.client',$client);

    }
}
