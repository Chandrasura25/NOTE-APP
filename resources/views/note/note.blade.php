@extends('note.index')
@section('content')
    <div class="container">
        @if (Auth::user())
        <div class="row">
            <div class="col-lg-7 mx-auto mt-4 col-sm-12">
                <h5 class="display-6 text-center text-muted text-uppercase">Welcome to your note</h5>
                <a href="/note/create" class="p-3">
                  <button class="btn btn-info mb-2">Add note</button>
                </a>
                @foreach ($notes as $note)
               <div class="row shadow p-3 mb-3">
                <div class="col-3">{{$note->note_id}}</div>
                <div class="col-3">{{$note->note_title}}</div>
                <div class="col-2">
                    <form action="/note/{{$note->note_id}}" method="GET">
                     <button class="btn btn-primary">View</button>
                    </form>
                </div>
                <div class="col-2">
                    <a href="/note/{{$note->note_id}}/edit">
                        <button class="btn btn-success">Edit</button>
                    </a>
                </div>
                <div class="col-2">
                    <form action="/note/{{$note->note_id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>    
                </div>
             </div>
            @endforeach
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-12 col-md-6 mx-auto shadow p-5">
                <h1 class="text-center text-muted display-6">You are not logged in!!!!!</h1>
                <a href="/login">Login</a>
            </div>
        </div>
        @endif
    </div>
@endsection