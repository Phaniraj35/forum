@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            
                <div class="d-flex justify-content-between">
                            
                    <div>
                        <img height="40px" width="40px" style="border-radius:50%;" src="{{Gravatar::src($discussion->author->email)}}" alt="">
                        <span class="ml-2">{{$discussion->author->name}}</span>
                    </div>
                
                </div> <!--main-flex-->

        </div>

        <div class="card-body">
            
            <div class="text-center">
                <strong>{{$discussion->title}}</strong>
            </div>

            <hr>

            {!!$discussion->content!!}


        </div>
    </div>
       

@endsection
