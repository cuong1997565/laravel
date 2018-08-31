<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Slide\SlideRepositoryInterface;
use File;

class SlideVueController extends Controller
{
    protected $slideRepository;

    public function __construct(SlideRepositoryInterface $slideRepository)
    {
        $this->slideRepository = $slideRepository;
    }

    public function index()
    {
         return $this->slideRepository->getAll();
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


        $exploded = explode(',' , $request->image);
        $decoded = base64_decode($exploded[1]);


        if(str_contains($exploded[0],'jpeg')){
              $extension = 'jpg';
        }
        else{
             $extension = 'png';
        }

         $fileName =str_random(8).'.'.$extension;

        $path = public_path()."/".'image/'.$fileName;

        file_put_contents($path , $decoded);

        $status = $request->status;
        $data =[
            'image' => $fileName,
            'status' => $status
        ];
        $image = $this->slideRepository->create($data);
        return response()->json([ 'statur' => 'success', 'msg' => 'slide  created success' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            return $this->slideRepository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->slideRepository->find($id);
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
            $exploded = explode(',' , $request->image);
            $decoded = base64_decode($exploded[1]);
            if(str_contains($exploded[0],'jpeg')){
                  $extension = 'jpg';
            }
            else{
                  $extension = 'png';
            }
            $fileName = str_random(8).'.'.$extension;
            $path = public_path()."/".'image/'.$fileName;
            file_put_contents($path , $decoded);

            //xóa image cũ trong thư mục và database
            $data = $this->slideRepository->find($id);
                ///duong dan
                $path = public_path()."/".'image/'.$data->image;
                //xoa trong thu muc
                if(File::exists($path)){
                    File::delete($path);
                }
                else{
                    return 'File does not exists.' ;
                }

            }
            else{
              $fileName = $request->image;
            }
            $status = $request->status;

            $data =[
                   'image' => $fileName,
                  'status' => $status
                   ];
            $update = $this->slideRepository->update($id , $data);
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
           $slide = $this->slideRepository->find($id);
           if(count($slide)){
            $path = public_path()."/".'image/'.$slide->image;
             if(File::exists($path)){
                 File::delete($path);
            $data = $this->slideRepository->delete($id);
            return response()->json($data);
              }else{

                return 'File does not exists.' ;

              }

           }
    }
}
