<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Notes</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="{{ asset('js/responsive.js') }}"></script>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <section class="sec">
            <header>
                @if (Route::has('login'))
                        @auth
                        <div>
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                          @else
                         <a href="#" class="logo"><span>N</span>ote</a>
                         <div class="toggleMenu" onclick="toggleMenu()"></div>
                        </div>
                         <ul class="navigation">
                           <li><a href="#" class="active">Home</a></li>
                           <li>@if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                           @endif
                          </li>
                           <li><a href="{{ route('login') }}">Log in</a></li>
                           <li><a href="#">Services</a></li>
                           <li><a href="#">Contact</a></li>
                         </ul>
                        @endauth
                @endif
            </header>
        <div class="content">
          <div class="textBx">
              <h2>Create<br><span>Read Design</span></h2>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi quidem saepe consequatur, obcaecati eum repellendus provident alias odit nesciunt eaque nostrum adipisci expedita, beatae, debitis iusto autem officiis velit et?</p>
              <a href="#">Learn More</a>
          </div>
        </div>
          <div class="custom-shape-divider-bottom-1600715980">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                  <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
              </svg>
          </div>
          <img src="/images/Woman using Laptop - 960x1017.png" alt="" class="girl">
      </section>
      <script>
        
        function toggleMenu() {
          const navigation = document.querySelector('.navigation');
          const menuToggle = document.querySelector('.toggleMenu');
          menuToggle.classList.toggle('active')
          navigation.classList.toggle('active')
        }
    
        </script>
    </body>
</html>