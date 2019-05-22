@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Discussions
        <a href="{{route('discussions.create')}}" class="float-right btn btn-sm btn-success">Create New Discussion</a>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
       

@endsection
