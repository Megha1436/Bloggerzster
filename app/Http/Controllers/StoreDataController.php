<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Image;

class StoreDataController extends Controller
{
  public function insertform(){
    return view('login');
    }

  public function index()
    {
        $blogs = DB::select('select * from blogs');
       return view('blog',compact('blogs'));
        
    }

    public function index_foodie()
    {
        $blogs = DB::select('select * from blogs where topic_name="Food"');
        return view('foodie',['blogs'=>$blogs]);
    }

    public function index_event()
    {
        $blogs = DB::select('select * from blogs where topic_name="Event"');
        return view('events',['blogs'=>$blogs]);
    }

    public function index_travel()
    {
        $blogs = DB::select('select * from blogs where topic_name="Travel"');
        return view('adventure',['blogs'=>$blogs]);
    }

    public function insert(Request $request){

      $image_file1 = $request->image1;
      $images1 = Image::make($image_file1);
      Response::make($images1->encode('jpeg'));

      $image_file2 = $request->image2;
      $images2 = Image::make($image_file2);
      Response::make($images2->encode('jpeg'));

      $image_file3 = $request->image3;
      $images3 = Image::make($image_file3);
      Response::make($images3->encode('jpeg'));

      $image_file4 = $request->image4;
      $images4 = Image::make($image_file4);
      Response::make($images4->encode('jpeg'));

      $data=array(
        'topic_name'=> $request->topic,
        "title"=> $request->title,
        "sub_title"=>$request->sub_title,
        "blog1"=>$request->blog1,
        "blog2"=>$request->blog2,
        "blog3"=>$request->blog3,
        "blog4"=>$request->blog4,
        "blog5"=>$request->blog5,
        "blog6"=>$request->blog6,
        'image1' => $images1,
        'image_info1' => $request->image_info1,
        'image2' => $images2,
        'image_info2' => $request->image_info2,
        'image3' => $images3,
        'image_info3' => $request->image_info3,
        'image4' => $images4, 
        'image_info4' => $request->image_info4,
        'url' => $request->url);
      DB::table('blogs')->insert($data);
      return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image1($image_id)
    {
     $image = Blog::findOrFail($image_id);

     $image_file = Image::make($image->image1);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }

    function fetch_image2($image_id)
    {
     $image = Blog::findOrFail($image_id);

     $image_file = Image::make($image->image2);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
    function fetch_image3($image_id)
    {
     $image = Blog::findOrFail($image_id);

     $image_file = Image::make($image->image3);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
    function fetch_image4($image_id)
    {
     $image = Blog::findOrFail($image_id);

     $image_file = Image::make($image->image4);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
