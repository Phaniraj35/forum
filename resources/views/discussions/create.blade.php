@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Create New Discussion
        </div>

        <div class="card-body">
           
            <form action="{{route('discussions.store')}}" method="POST">

                @csrf
            
                <div class="form-group">

                    <label for="title">Title</label>

                    <input type="text" name="title" id="title" class="form-control" value="">

                </div>


                <div class="form-group">

                    <label for="content">Content</label>

                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>

                </div>


                <div class="form-group">

                    <label for="channel">Channel</label>

                    <select name="channel" id="channel" class="form-control">

                        @foreach ($channels as $channel)
                            
                            <option value="{{$channel->id}}">{{$channel->name}}</option>

                        @endforeach

                    </select>

                </div>



                <button type="submit" class="btn-sm btn-success">Create</button>
            
            </form>

        </div>
    </div>
       

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
@endsection


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css" />
@endsection
