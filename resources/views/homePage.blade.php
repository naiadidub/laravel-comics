@extends('layouts.base')

@section('titolo')
comics Home
@endsection

@section('main')

<div class="mainbg">
    <div class="container">
        <div class="row ">
            @foreach($fumetti as $fumetto){
                <div class="col-2 fumetto-card d-flex flex-column flex-nowrap my-3">
                    <a href="/superman" style="text-decoration: none">
                        <img src={{$fumetto['thumb']}} alt={{$fumetto['title']}}>
                        <br>
                        <div style="width: 106px">
                            <span class="text-white">{{$fumetto['title']}}</span>
                        </div>
                        
                    </a>
                </div> 
            }      
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center py-3">
        <button type="button" class="btn btn-primary">LOAD MORE</button>
    </div>
</div>

@endsection