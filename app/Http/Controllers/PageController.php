<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use App\Models\MainPages;
use App\Models\blogs;
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
        $products = DB::table('products')->inRandomOrder()->take(3)->get();
        return view('index', ['carousels' => $carousels, 'roadmap' => $roadmap, 'types' => $types, 'social' => $social, 'products' => $products]);
    }

    public function product(Request $request)
    {
        $social = DB::table('socials')->get();
        $categories = config('products.categories');
        $category = $request->input('category');
        $validCategory = ($category && array_key_exists($category, $categories)) ? $category : null;
        $query = DB::table('products');
        if ($validCategory) {$query->where('category', $validCategory);}
        $products = $query->get();
        return view('pages.product', ['products' => $products,'social' => $social,'categories' => $categories,'activeCategory' => $validCategory]);
    }
    
    public function blog()
    {
        $social = DB::table('socials')->get();
        $blogs = blogs::all();
        return view('pages.blog', ['social' => $social, 'blogs' => $blogs]);
    }

    public function showBlog($id)
    {
        $social = DB::table('socials')->get();
        $blog = blogs::findOrFail($id);
        return view('pages.blog-detail', compact('blog'), ['social' => $social]);
    }
}
