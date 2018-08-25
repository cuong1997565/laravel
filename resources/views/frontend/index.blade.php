
   @extends('frontend.master')
    @section('content')
    <div class="abmum">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme abum">
                  @foreach ($results as $e)
                    <div class="item">
                      {{-- expr --}}
                        <div class="col-lg-6 col-md-6 marBott-10">
                            <img class="abmum-1" src="../image/{{$e->image}}" alt="">
                             @foreach ($category as $cate)
                            <span class="trip" style="background:{{ $cate['color']  }}">
                                Trip
                            </span>
                            @endforeach
                            <div class="content-abmum font-weight-bold">
                              <a href="{{ asset('detail/'.$e->id) }}">{{ $e->content }}</a>
                            </div>

                            <div class="name-abum">
                                11 septemvber 2016 |
                                <a href="#">John Doe</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--end abum-->

    <div class="proin">
            <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="owl-carousel owl-theme slide">
                              @foreach ($slideHot as $hot)

                              @endforeach
                                <div class="item">

                                    <img class="slide-proin" src="../image/{{$slideHot->image}}" alt="">

                                    <div class="content-proin">
                                            <div class="title-proin">
                                                  {{$slideHot->title}}
                                            </div>
                                            <div class="noidung-proin text-center">
                                                  {{$slideHot->content}}
                                            </div>
                                            <div class="proin-info">
                                                    @foreach ($category as $catehot)
                                                        <span class="proin-trip" style="background:{{ $catehot['color']  }}">trip</span>
                                                    @endforeach
                                                    <div class="text-right name-proin">
                                                        14 septemvber 2016 |
                                                        <a href="#">John Doe</a>

                                                    </div>
                                                </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
    </div>
    <!--end proin-->


    <div class="abum-1">
            <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme abum-1-slide ">
                          @foreach ($postOld as $old)
                            <div class="item">
                               <div class="col-lg-4 col-md-6 marBott-10">
                                    <img class="abmum-slide-1" height="300px" src="../image/{{$old->image}}" alt="">
                                    <div class="content-abmum-1">
                                          @foreach ($category as $element)
                                           <div class="title-abum-1  style="background:{{ $element['color']  }}">
                                                  People
                                           </div>
                                          @endforeach

                                           <div class="noidung-abum-1">
                                               <a href="{{ asset('detail/'.$old->id) }}" title=""> {{$old->title}} </a>                                           </div>

                                           <div class="info-abum-1">
                                                 11 septemvber 2016 | <a href="#">John Doe</a>
                                           </div>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                        </div>

                    </div>
                </div>
    </div>
    <!--end abum-1-->

    <div class="abum-1">
        <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme abum-1-slide">
                     @foreach ($postNew as $new)
                       <div class="item">
                            <div class="col-lg-4 col-md-6 marBott-10">
                                <img class="abmum-slide-1" height="300px" src="../image/{{ $new->image }}" alt="">
                                <div class="content-abmum-1">
                                       @foreach ($category as $newcate)
                                      <div class="title-abum-1 color-4" style="background-color: {{ $newcate['color']  }}">
                                              Trips
                                       </div>
                                       @endforeach
                                       <div class="noidung-abum-1">
                                            <a href="{{ asset('detail/'.$new->id) }}">{{$new->title}}</a>
                                       </div>

                                       <div class="info-abum-1">
                                             11 septemvber 2016 | <a href="#">John Doe</a>
                                       </div>
                                </div>
                            </div>

                        </div>
                     @endforeach


                    </div>

                </div>
            </div>
    </div>
    <!--end abum-1-->

    <div class="screach">
        <div class="container-fluid">
            <div class="row">
                       <div class="offset-lg-3 col-lg-6  ">
                        <div class="info-sreach">
                                <div class="title-sreach">
                                       newsletter
                                </div>
                                <div class="content-screach text-center">
                                     Donec elementum dui semper, pretium dui quis, pretium dui quis,pretium nisl
                                </div>

                                <div class="form-screach">
                                    <div class="input-group form">
                                        <input type="text" class="form-control fix-input">
                                        <div class="input-group-append">
                                          <button class="btn btn-outline-secondary btn-button-fix" type="button">sign up</button>
                                        </div>
                                      </div>
                                </div>
                        </div>
                       </div>
                </div>

        </div>
    </div>
    <!--end sreach-->
    @stop
