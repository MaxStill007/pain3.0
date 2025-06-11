<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use App\Models\MainPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class PageController extends Controller
{
    public function index(){
        $carousels = DB::table('mainpages')->where('type','carousel')->get();
        $roadmap = DB::table('mainpages')->where('type','roadmap')->get();
        $types = DB::table('mainpages')->where('type','type')->get();
        $social = DB::table('socials')->get();
        $popular = DB::table('products')->inRandomOrder()->take(3)->get();
        return view('index', ['carousels' => $carousels, 'roadmap' => $roadmap, 'types' => $types, 'social' => $social, 'popular' => $popular]);
    }

    public function product(){
        $social = DB::table('socials')->get();
        $product = DB::table('products')->inRandomOrder()->get();
        return view('pages.product', ['product' => $product, 'social' => $social]);
    }
}
