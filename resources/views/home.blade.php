@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="navigation shadow-lg">
                <ul>
                    @if (count($cats) > 0)
                    @foreach ($cats as $cat)
                    <li>
                        <a href="#" style="--clr:#ee5253" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span class="title">{{$cat->cat_name}}</span>
                            <span class="icon"><i>07</i></span> 
                        </a>
                    </li>
                    @endforeach 
                    @else
                        <div class="alert alert-success">Click the menu to add a category</div>
                    @endif
                </ul>
            </div>
            <div class="toggle" onclick="toggleMenu()"></div>
        </div>
        <div class="col-md">
        <div class="row mt-2">
            @if (count($notes) > 0)
            @foreach ($notes as $note)
            <div class="col-3">
           <div class="card shadow">
            <h3>{{$note->cat_name}}</h3>
           </div>
            </div>   
            @endforeach
            @else
            <div class="alert alert-success">Add a note to your category</div> 
            @endif
        </div>
        </div>
    </div>
    <div class="div">
        <i class="fa fa-gear" aria-hidden="true"></i>
    </div>
    <script>
        function toggleMenu(){
            let navigation = document.querySelector('.navigation');
            let toggle = document.querySelector('.toggle');
            navigation.classList.toggle('active')
            toggle.classList.toggle('active')
        }
        var color = ['#222f3e','#ff368e0','#ee5253','#0abde3','#10ac84','#33d12d','#5f27cd'];
        var i = 0;
        document.querySelector('.fa-gear').addEventListener('click',function(){
            i = i <color.length ? ++i :0;
            document.querySelector('body').style.background = color[i]
        })
    </script>
</div>
@endsection
