<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use Validator;
use App\Repositories\Slide\SlideRepositoryInterface;
use File;



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
           return response()->json($dataslide);
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
        // $exploded = explode(',',$request->image);
        // $decoded = base64_decode($exploded[1]);
        // if(str_contains($exploded[0],'jpeg')){
        //       $extension = 'jpg';
        // }
        // else{
        //       $extension = 'png';
        // }

        // $fileName = str_random(10).'.'.$extension;
        // $path = public_path()."/".'image/'.$fileName;
        // file_put_contents($path , $decoded);
        // $data = [
        //         'image' => $fileName,
        //         'status' => $request->status
        //  ];

        //  $image = $this->slideRepository->create($data);
        //  return response()->json(['statur' => 'success','msg' => 'slide created success']);
        //
        //
        //

        $image = $request->image;
        $data = [
                'image' => $image,
                'status' => $request->status
         ];
        $path = $request->image->store(public_path()."/".'image/');

         dd($path);


        // $image = $this->slideRepository->create($data);
        // return response()->json(['statur' => 'success','msg' => 'slide created success']);
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
         return response()->json($slide);
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
        // $explode = explode(',' , $request->image);
        // if(count($explode)>1){
        //     $decoded = base64_decode($explode[1]);

        //   if(str_contains($explode[0],'jpeg')){
        //        $extension = 'jpg';
        //   }
        //   else{
        //       $extension = 'png';
        //   }

        //   $fileName = str_random(10).'.'.$extension;
        //   $path = public_path()."/".'image/'.$fileName;
        //   file_put_contents($path, $decoded);
        //   $data =  $this->slideRepository->find($id);
        //   $path = public_path()."/".'image/'.$data->image;
        //         if(File::exists($path)){
        //             File::delete($path);
        //         }else{
        //             return 'file does not exit';
        //         }
        // }
        // else{
        //        $fileName = $request->image;
        // }

        // $data = [
        //     "image" => $fileName,
        //     "status" => $request->status
        // ];

        //   $update = $this->slideRepository->update($id,$data);
        //   return response()->json($update);
        //
        $data = [
                'image' => $request->image,
                'status' => $request->status
         ];

            $update = $this->slideRepository->update($id,$data);
          return response()->json($update);




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
