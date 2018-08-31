<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use File;



class PostController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;
    protected $userRepository;

    public function __construct(PostRepositoryInterface $postRepository,CategoryRepositoryInterface $categoryRepository,UserRepositoryInterface $userRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapost = $this->postRepository->getAll();
        // $datacategory = $this->categoryRepository->getAll();


        $json =  response()->json($datapost);
        return $json;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->categoryRepository->getAll();
        $datauser = $this->userRepository->getAll();
          // return view('backend.addpost',compact('category','datauser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $explode = explode(',' , $request->image);
        $decoded = base64_decode($explode[1]);

        if(str_contains($explode[0], 'jpeg')){
               $extension = 'jpg';
        }
        else{
               $extension = 'png';
        }

        $fileName = str_random(10).'.'.$extension;
        $path = public_path()."/".'image/'.$fileName;
        file_put_contents($path,$decoded);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'image' => $fileName,
            'category_id' => $request->category_id,
            'status' =>$request->status,
            'hot' =>$request->hot,
            'author_id'=>$request->user_id
        ];

        $addpost = $this->postRepository->create($data);
        return response()->json($addpost);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post = $this->postRepository->find($id);
         $json = response()->json($post);
         return $json;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $post = $this->postRepository->find($id);
         $json = response()->json($post);
         return $json;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $explode = explode(',' , $request->image);
        if(count($explode)>1){
            $decoded = base64_decode($explode[1]);

          if(str_contains($explode[0],'jpeg')){
               $extension = 'jpg';
          }
          else{
              $extension = 'png';
          }

          $fileName = str_random(10).'.'.$extension;
          $path = public_path()."/".'image/'.$fileName;
          file_put_contents($path, $decoded);
          $data =  $this->postRepository->find($id);
          $path = public_path()."/".'image/'.$data->image;
                if(File::exists($path)){
                    File::delete($path);
                }else{
                    return 'file does not exit';
                }
        }
        else{
           $fileName = $request->image;
        }
          $data = [
                        'title' => $request->title,
                        'content' => $request->content,
                        'image' => $fileName,
                        'category_id' => $request->category_id,
                        'status' =>$request->status,
                        'hot' =>$request->hot,
                        'author_id'=>$request->user_id

          ];

          $update = $this->postRepository->update($id,$data);
          return response()->json($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $delete = $this->postRepository->delete($id);
        // return response()->json($delete);
        //
      $blog = $this->postRepository->find($id);
           if(count($blog)){
            $path = public_path()."/".'image/'.$blog->image;
             if(File::exists($path)){
                 File::delete($path);
            $data = $this->postRepository->delete($id);
            return response()->json($data);
              }else{

                return 'File does not exists.' ;

              }

           }
    }
}
