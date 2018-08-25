<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;


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
        $datacategory = $this->categoryRepository->getAll();
        return view('backend.post',compact('datapost','datacategory'));
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
          return view('backend.addpost',compact('category','datauser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $image     = $request->file->getClientOriginalName();
         $title     = $request->title;
         $content   = $request->content;
         $category  = $request->category;
         $status    = $request->status;
         $hot       = $request->hot;
         $author    = $request->author;
         $data = [
            'image' => $image,
            'title' => $title,
            'content' => $content,
            'category_id' => $category,
            'status' => $status,
            'hot' => $hot,
            'author_id' => $author
         ];

         $add = $this->postRepository->create($data);
         return response()->json($add);
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
        $category = $this->categoryRepository->getAll();
        $datauser = $this->userRepository->getAll();
        return view('backend.editpost',compact('post','category','datauser'));
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
         $image     = $request->file->getClientOriginalName();
         $title     = $request->title;
         $content   = $request->content;
         $category  = $request->category;
         $status    = $request->status;
         $hot       = $request->hot;
         $author    = $request->author;
         $data = [
            'image' => $image,
            'title' => $title,
            'content' => $content,
            'category_id' => $category,
            'status' => $status,
            'hot' => $hot,
            'author_id' => $author
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
        $delete = $this->postRepository->delete($id);
        return response()->json($delete);

    }
}
