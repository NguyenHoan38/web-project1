<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\New1;	
class PageController extends Controller
{
   public function master()
   {
   	return view('master');
   }
   public function index()
   {
   	$slides = Slide::all();
   	$products = Product::orderBY('id','desc')->take(4)->get();
  	$news = New1::orderBY('id','desc')->paginate(4);
    $news_view = New1::orderBY('luotxem','desc')->take(1)->get();
    // dd(  $news_view);
   	return view('page.index',compact('slides','news','products','news_view'));
   }
   public function product()
   {

   }
}
