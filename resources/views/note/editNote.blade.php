@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-4 col-sm-12 bgContain">
                <div class="p-3">
                    <form action="/note/{{$note->note_id}}" method="post" class="form">
                        @method('PUT')
                        @csrf
                        <h5 class="hAdd text-uppercase">Update note</h5>
                        <input type="text" placeholder="Note Title" name="note_title" class="form-control mb-3" value="{{$note->note_title}}">
                        <input type="text" placeholder="Note" name="note" class="form-control mb-3" value="{{$note->note}}">
                        {{-- <a class="addNote" type="submit" style="--clr:#00ff00;--i:2"><span>Update Note</span></a --}}
                        <button class="addNote" style="--clr:#00ff00;--i:2" type="submit"><span>Update Note</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection