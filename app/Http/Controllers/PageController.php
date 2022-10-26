<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $route = Route::currentRouteName();
        $chairs = collect([
            (object) [
                "id" => 1,
                "nama" => "Nordic",
                "harga" => 700000,
                "image" => "product-3"
            ],
            (object) [
                "id" => 2,
                "nama" => "Kruzo Aero",
                "harga" => 1200000,
                "image" => "product-1"
            ],
            (object) [
                "id" => 3,
                "nama" => "Ergonomic",
                "harga" => 670000,
                "image" => "product-2"
            ]
        ]);

        switch ($route) {
            case 'home':
                return view('index');
                break;
            case 'products':
                $data = $chairs->all();
                return view('products', compact('data'));
                break;
            case 'testimonials':
                return view('testimonials');
                break;
            case 'about':
                return view('about');
                break;
            case 'cart':
                return view('cart');
                break;

            default:
                return view('index');
                break;
        }
        // return view('index');
    }
}
