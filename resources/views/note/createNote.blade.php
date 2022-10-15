@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-4 col-sm-12 bgContain">
                <div class="p-3">
                    <form action="/note" method="post" class="form">
                        @csrf
                        <h2 class="hAdd text-uppercase">add note</h2>
                        <div class="box">
                            <select name="cat_id" id="">
                                @foreach ($cats as $cat)
                                    <option value="{{$cat->cat_id}}" name="">{{$cat->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="text" placeholder="Note Title" name="note_title" class="form-control mb-3">
                        <textarea type="text" placeholder="Your Note here...." name="note" class="form-control mb-3"></textarea>
                        <button class="btn btn-outline-primary w-100 mb-3" type="submit">Add Note</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection