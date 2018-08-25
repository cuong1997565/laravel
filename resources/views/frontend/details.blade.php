 @extends('frontend.master')
 @section('content')

    <div class="abmum">
        <div class="container">
            <div class="row">

                        <div class="col-lg-7 col-md-6 marBott-10">
                            <img class="abmum-1" src="../image/{{$detail->image}}" alt="">


                             <div class="content-abmum font-weight-bold">
                                {{$detail->title}}
                            </div>

                            <div class="name-abum">
                                11 septemvber 2016 |
                                <a href="#">John Doe</a>

                            </div>

                            <div class="content-abmum">
                                {{$detail->content}}
                            </div>


                        </div>

                         <div class="col-lg-5 col-md-6">

                                <div class="detail">
                                    <div class="title">
                                        bai viet moi nhat
                                    </div>
                                    @foreach ($details as $detai)
                                    <div class="td-block-12">
                                            <div class="img-detail">
                                                <img src="../image/{{$detai->image}} " alt="">
                                            </div>

                                            <div class="content-detail">
                                               <a href="{{ asset('detail/'.$detai->id) }}"> {{$detai->content}} </a>
                                                <p>11 septemvber 2016 | <a href="">John Doe</a></p>
                                            </div>
                                    </div>
                                    @endforeach


                                </div>

                        </div>

                    </div>
         </div>
    </div>
    <!--end abum-->
 @stop
