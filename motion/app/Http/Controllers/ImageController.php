<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
use App\Image;
use File;

class ImageController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $images = Image::get();
	$count = $images->count();
        return view('vision.index', array('images' => $images, 'count' => $count));
    }

    /**
     * Remove the specified resource from storage and db.
     *
     * @param  int  $id
     * @return Response
     */
    public function delete($id)
    {
	$image = Image::find($id);
        $filename = $image->img_name;
        $path = public_path().'/images/motion/'.$filename;

        File::delete($path);
        $image->delete();

	return redirect()->action('ImageController@index');
    }

    /**
     * Remove all resources from storage and db.
     *
     * @return Response
     */
    public function destroy()
    {
      	$path = public_path().'/images/motion';
        File::cleanDirectory($path);
        Image::truncate();

	return redirect()->action('ImageController@index');
     }

}
