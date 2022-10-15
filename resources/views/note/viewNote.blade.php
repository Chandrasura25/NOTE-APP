@extends('note.index')
@section('content')
<link rel="stylesheet" href="/css/style.css">
<div class="body">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <div class="sliderText">
                        <h3 class="text-uppercase">{{$note->note_title}}</h3>
                     </div>
                      <div class="content">
                          <p class="text-capitalize">{{$note->note}}</p>
                     <a href="/note">View All Note</a>
                  </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection