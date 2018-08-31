<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostRepositoryInterface;
use File;

class postVue extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {

        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->postRepository->getAll();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $explode = explode(',',$request->image);
        // $decoded = base64_decode($explode[1]);
        // if(str_contains($explode[0],'jpeg')){
        //         $extension = 'jpg';
        // }
        // else{
        //         $extension = 'png';
        // }

        // $fileName = str_random(8).'.'.$extension;
        // $path = public_path()."/".'image/'.$fileName;
        // file_put_contents($path,$decoded);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'image' => $fileName,
            'category_id' => $request->category_id,
            'status' =>$request->status,
            'hot' =>$request->hot,
            'author_id'=>$request->user_id
        ];

        dd($request->all());

        // $addpost = $this->postRepository->create($data);
        // return response()->json($addpost);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            return $this->postRepository->find($id);
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           return $this->postRepository->find($id);
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
            if($request->check == 1){
                $explode = explode(',',$request->image);
                $decoded = base64_decode($explode[1]);
                if(str_contains($explode[0],'jpeg')){
                       $extension = 'jpg';
                }
                else{
                      $extension = 'png';
                }

                $fileName = str_random(8).'.'.$extension;
                $path = public_path()."/".'image/'.$fileName;
                file_put_contents($path,$decoded);

                $data = $this->postRepository->find($id);
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
        //
    }
}
