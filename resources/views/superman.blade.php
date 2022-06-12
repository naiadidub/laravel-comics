@extends('layouts.base')

@section('titolo')
superman
@endsection

@section('main')

<div class="supermanbg">
    <div class="container">
        <div class="row ">
            <div class="col-8">
                <h3>{{$superman[0]['title']}}</h3> 
                <div class="d-flex justify-content-between">
                    <div class="price-container">
                        <span>U.S PRICE {{$superman[0]['price']}}</span>
                        <span>available</span>
                    </div> 
                     <div class="available-container">
                        <span>check available <i class="fa-solid fa-angle-down"></i> </span>
                    </div> 
                </div>
                <div>
                    <p>{{$superman[0]['description']}}</p>
                </div>
                <div class="col-4">
                    <img src="./public/imgs/adv.jpg" alt="">
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-6 justify-content-between">
                <div>
                    <h2>talent</h2>
                    <div class="w-25">
                        <h5>art by:</h5>
                    </div>
                    <div>
                        @foreach ($superman[0]['artists'] as $artist){
                            <span>{{$artist}}</span>
                        }  
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="w-25">
                        <h5>written by:</h5>
                    </div>
                    <div>
                        @foreach ($superman[0]['writers'] as $writer){
                            <span>{{$writer}}</span>
                        }  
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-6 justify-content-between">
                <div>
                    <h2>specs</h2>
                    <div class="d-flex">
                        <div style="width: 200px">
                            <span>series:</span>
                        </div>
                        <div>
                            <h5>{{$superman[0]['series']}}</h5>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div style="width: 200px">
                            <span>U.S Price:</span>
                        </div>
                        <div>
                            <h5>{{$superman[0]['price']}}</h5>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div style="width: 200px">
                            <span>On Sale date:</span>
                        </div>
                        <div>
                            <h5>{{$superman[0]['sale_date']}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection