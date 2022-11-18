<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\CarShop;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::all();
        $carShops = CarShop::all();

        // foreach($carShops as $carShop) {
        //     foreach($items as $car) {
        //         if($car['carshop_id'] == $carShop['id'])  {

        //         }
        //     }
        // }


        return view('items.index', ['cars' => $items, 'carShops' => $carShops]);
    }
}
