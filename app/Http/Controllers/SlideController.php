<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Validator;
use App\Repositories\Slide\SlideRepositoryInterface;



class SlideController extends Controller
{
     protected $slideRepository;

    public function __construct(SlideRepositoryInterface $slideRepository)
    {
        $this->slideRepository = $slideRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           $dataslide = $this->slideRepository->getAll();
            return view('backend.slide',compact('dataslide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              return view('backend.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->file->getClientOriginalName();
        $status = $request->status;

        $data =[
            'image' => $image,
            'status' => $status
        ];
        $post = $this->slideRepository->create($data);
        return response()->json($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {

         $slide = $this->slideRepository->find($id);
         return view('backend.edit',compact('slide'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $image = $request->file->getClientOriginalName();
        $status = $request->status;

        $data =[
            'image' => $image,
            'status' => $status
        ];

        $post = $this->slideRepository->update($id, $data);
        return response()->json($post);

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    public function destroy($id)
    {
        //
        $post = $this->slideRepository->delete($id);
        return response()->json($post);
    }
}
