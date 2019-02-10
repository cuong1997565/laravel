<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;


class CategoryController extends Controller
{
     protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {

        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= $this->categoryRepository->getAll();
        $json =  response()->json($datalist);
        return $json;
       // return view('backend.category',compact('datalist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('backend.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            // $name = $request->name;
            // $color = $request->color;
            // $data = [
            //     'name' => $name,
            //     'color' => $color
            // ];
            //

          // $data = json_encode([
          //       'address' => $request->address,
          //       'phone' => $request->phone,
          //   ]);
            $data = [
                'name' => $request->name,
                'color' => $request->color,
                'data' => $request->data
            ];

            dd($data);

            //$add = $this->categoryRepository->create($data);
            // $json = response()->json($add);
            // return $json;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $show = $this->categoryRepository->find($id);
           $json = response()->json($show);
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
             $show = $this->categoryRepository->find($id);
           $json = response()->json($show);
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

        $name = $request->name;
        $color = $request->color;
        $data =[
            'name' => $name,
            'color' => $color
        ];
        $update = $this->categoryRepository->update( $id,$data);
        $json = response()->json($update);
        return $json;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->categoryRepository->delete($id);
        $json = response()->json($data);
        return $json;
    }
}
