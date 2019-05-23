@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Discussions
        <a href="{{route('discussions.create')}}" class="float-right btn btn-sm btn-success">Create New Discussion</a>
        </div>

        <div class="card-body">
           
            @foreach ($discussions as $discussion)
                
                <div class="card card-primary">
                    
                    
                    <div class="card-header">
                        
                        <div class="d-flex justify-content-between">
                            
                            <div>
                                <img height="40px" width="40px" style="border-radius:50%;" src="{{Gravatar::src($discussion->author->email)}}" alt="">
                                <span class="ml-2">{{$discussion->author->name}}</span>
                            </div>


                            <div>

                            <a href="{{route('discussions.show',$discussion->slug)}}" class="btn btn-sm btn-primary">View</a>

                            </div>
                        
                        </div> <!--main-flex-->
                    
                    </div> <!--card-header-inner-->


                    <div class="card-body">
                        
                        <div class="text-center">
                            <strong>{{$discussion->title}}</strong>
                        </div>
                    
                    </div> <!--card body inner-->
                    
                
                </div> <!--card-inner-->

            @endforeach

            {{$discussions->links()}}

        </div>
    </div>
       

@endsection
