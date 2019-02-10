<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use App\Category;
use App\Slide;
use App\Post;
class homeController extends Controller
{
    public function getIndex(){
        $results = Post::with('category')->where('status', 1)
                ->orderBy('id','DESC')
                ->skip(0)
                ->take(3)
                ->get();

        $slideHot = Post::with('category')->where('hot', 2)->first();
        $postOld =Post::with('category')->where('status', 1)
                ->orderBy('id','ASC')
                ->skip(0)
                ->take(4)
                ->get();

        $postNew =Post::with('category')->where('status', 1)
                ->orderBy('id','DESC')
                ->skip(0)
                ->take(4)
                ->get();
        return view('frontend.index',compact('results','postOld','postNew','slideHot'));
    }

    public function getDetail($id){
         $detail = Post::find($id);
         $details = Post::where('status', 1)
                ->orderBy('id','DESC')
                ->skip(0)
                ->take(3)
                ->get();
          return view('frontend.details',compact('detail','details'));
    }

    public function getMaster(){
             return view('frontend.master');
    }


    public function getDatabase(){
            Schema::table('categories', function ($table) {
                    $table->json('data');
                });
        dd("them thanh cong");
    }


}
