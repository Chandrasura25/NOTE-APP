@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-4 col-sm-12 bgContain p-3">
                <div class="p-3">
                    <form action="/category/{{$cat->cat_id}}" method="post" class="form">
                        @method('PUT')
                        @csrf
                        <h5 class="hAdd text-uppercase">Update Category</h5>
                        <input type="text" placeholder="Category Name" name="cat_name" class="form-control mb-3" value="{{$cat->cat_name}}">
                        <button class="addNote" style="--clr:#00ff00;--i:2" type="submit"><span>Update Cat</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection