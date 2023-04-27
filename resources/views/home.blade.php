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
                        <a href="#" style="--clr:{{$colors[$cat->cat_id]}}">
                            <span>
                                <span class="title">{{$cat->cat_name}}</span>
                                <form action="category/{{$cat->cat_id}}/edit" method="get">
                                    <button class="fa fa-edit border-0 bg-transparent text-light" aria-hidden="true"></button>
                                </form>
                            </span>
                            <span class="icon"><i>
                                @if (isset($count[$cat->cat_id]) && $count[$cat->cat_id] >= 10)
                                    {{ $count[$cat->cat_id] }}
                                @else
                                    0{{ $count[$cat->cat_id] ?? '0' }}
                                @endif
                            </i></span>
                            
                              

                            {{-- <span class="icon"><i>0{{ $count[$cat->cat_id] ?? '0' }}</i></span> --}}
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
        <div class="row mt-2 gap-3">
            @if (count($notes) > 0) 
            @foreach ($notes as $note)
            <div class="col">
                <div class="boxCard shadow" style="--clr:{{$colors[$note->cat_id]}}">
                    <div class="topCard">
                        <h3>{{$note->note_title}}</h3>
                        <p>{{$note->cat_name}}</p>
                    </div>
                    <div class="note">
                        <p>{{$note->note}}</p>
                    </div>
                    <div class="bottomCard">
                        <div class="dropdown">
                            <i class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Menu</i>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/note/{{$note->note_id}}/edit"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                              <li>
                              <form action="/note/{{$note->note_id}}" method="post">
                                @csrf
                                @method('DELETE')
                                   <a class="dropdown-item"><button class="border-0"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button></a>
                                </form>   
                              </li>
                            </ul>
                        </div>
                        <p>{{$note->created_at}}</p>
                    </div>
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
