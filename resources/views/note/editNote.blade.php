@extends('note.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-4 col-sm-12">
                <div class="shadow p-3">
                    <form action="/note/{{$note->note_id}}" method="post">
                        @method('PUT')
                        @csrf
                        <h5 class="display-6 text-center text-info text-uppercase">Update note</h5>
                        <input type="text" placeholder="Note Title" name="note_title" class="form-control mb-3" value="{{$note->note_title}}">
                        <input type="text" placeholder="Note" name="note" class="form-control mb-3" value="{{$note->note}}">
                        <button class="btn btn-outline-success w-100" type="submit">Update Note</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection