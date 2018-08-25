<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Category\CategoryRepositoryInterface;


class categoryVue extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {

        $this->categoryRepository = $categoryRepository;
    }

    public function home(){
        return view('vueApp');
    }

    public function index()
    {

          return $this->categoryRepository->getAll();

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
        $this->validate($request,
            [
            'name' => 'required',
            'color' => 'required'
            ]
        );
        $name     = $request->name;
        $color    = $request->color;

        $data =[
            'name' => $name,
            'color' => $color
        ];
        $category = $this->categoryRepository->create($data);
        return response()->json([ 'statur' => 'success', 'msg' => 'category created success' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            return $this->categoryRepository->find($id);
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
           return $this->categoryRepository->find($id);
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

        // $this->validate($request,[
        //     'name' => 'required'
        // ]);

        // $name     = $request->name;
        // $color    = $request->color;

        // $data =[
        //     'name' => $name,
        //     'color' => $color
        // ];
        // $category = $this->categoryRepository->find($id);
        // if($category->count()){
        //      $category->update($data);
        //      return response()->json(['statur'=>'success','msg'=>'Post update success']);
        // }
        // else{
        //     return response()->json(['statur'=>'error','msg'=>'error in update post']);
        // }

        $this->validate($request,[
            'name' => 'required'
        ]);

        $name     = $request->name;
        $color    = $request->color;

        $data =[
            'name' => $name,
            'color' => $color
        ];
        $category = $this->categoryRepository->update($id, $data);
        return response()->json($category);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->delete($id);
        return response()->json($category);
    }
}
