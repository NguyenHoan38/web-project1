<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\New1;
class AdminContronller extends Controller
{
    public function admin()
    {
    	$products = Product::all();
    	return view('admin.product.all',compact('products'));
    }
    public function getaddproduct()
    {

    	return view('admin.product.add');
    }
    public function postaddproduct(Request $request)
    {
    	$product = new Product;
    	$product->name = $request->name_vi;
    	$product->description = $request->description_vi;
    	$product->image = $file->getClientOriginalName();
		$file->move('project1/images', $file->getClientOriginalName());
    	$product->save();
    	return view('admin.product.add');
    }
    
  
    public function geteditproduct($id)
    {
    	$product = Product::find($id);
    	return view('admin.product.edit',compact('product'));
    }
    public function posteditproduct(Request $request,$id)
    {

    	$product = 	Product::find($id);

    	$product->name = $request->name_vi;
    	$product->description = $request->description_vi;
    	if (isset($request->image)) {
    		
    		 $file = $request->image;
    		
			$product->image = $file->getClientOriginalName();

			$file->move('project1/images', $file->getClientOriginalName());
    	}else{
    			// dd('hghch');
    		$product->image = $product->image;
    	}
    	
    	$product->save();
    	// dd('hfgdg');
    	return redirect('admin/product');
    }
    public function deleteproduct($id) 
    {
    	$product = 	Product::find($id);
    	$product->delete();
    	return redirect()->back();
    }
    
   // slide
   	public function slide()
   	{
   		$slides = Slide::all();
   		return view('admin.slide.all',compact('slides'));
   	}
   	    public function getaddslide()
    {

    	return view('admin.slide.add');
    }
    public function postaddslide(Request $request)
    {
    	$slide = new Slide;
    	$file = $request->image;
    	$slide->image = $file->getClientOriginalName();
		$file->move('project1/images', $file->getClientOriginalName());
    	$slide->save();
    	return redirect('admin/slide');
    }
    
  
    public function geteditslide($id)
    {
    	$slide = slide::find($id);
    	return view('admin.slide.edit',compact('slide'));
    }
    public function posteditslide(Request $request,$id)
    {

    	$slide = 	Slide::find($id);

    	if (isset($request->image)) {
    		
    		 $file = $request->image;
    		
			$slide->image = $file->getClientOriginalName();

			$file->move('project1/images', $file->getClientOriginalName());
    	}else{
    			// dd('hghch');
    		$slide->image = $slide->image;
    	}
    	
    	$slide->save();
    	// dd('hfgdg');
    	return redirect('admin/slide');
    }
    public function deleteslide($id) 
    {
    	$slide = Slide::find($id);
    	$slide->delete();
    	return redirect()->back();
    }
    //news
    public function news()
    {
    	$news = New1::all();
    	// dd($news);
    	return view('admin.news.all',compact('news'));
    }
    public function getaddnews()
    {

    	return view('admin.news.add');
    }
    public function postaddnews(Request $request)
    {
    	$news = new New1;
    	$news->tieude = $request->name_vi;
    	// dd($request->name_vi);	
    	$news->mota = $request->description_vi;
       	$news->noidung = $request->content_vi;
       	// dd($request->content_vi);
    	$file = $request->image;
    	// dd($file);
    	$news->hinh = $file->getClientOriginalName();
		$file->move('project1/images', $file->getClientOriginalName());
		$news->noibat = $request->noibat_vi;
    	$news->luotxem = 0;

    	$news->save();
    	return view('admin.news.add');
    }
    
  
    public function geteditnews($id)
    {
    	$news = New1::find($id);
    	return view('admin.news.edit',compact('news'));
    }
    public function posteditnews(Request $request,$id)
    {

    	$news = 	New1::find($id);

    	$news->tieude = $request->name_vi;
    	$news->mota = $request->description_vi;
    	$news->noidung = $request->content_vi;
    	if (isset($request->image)) {
    		
    		 $file = $request->image;
    		
			$news->hinh = $file->getClientOriginalName();

			$file->move('project1/images', $file->getClientOriginalName());
    	}else{
    			// dd('hghch');
    		$news->hinh = $news->hinh;
    	}
    	$news->noibat = $request->noibat_vi;
    	// $news->luotxem = 0;
    	$news->save();
    	// dd('hfgdg');
    	return redirect('admin/news');
    }
    public function deletenews($id) 
    {
    	$news = 	New1::find($id);
    	$news->delete();
    	return redirect()->back();
    }
}
