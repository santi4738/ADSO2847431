@extends('layouts.app')
@section('title', 'Welcome Pets App')
@section('content')
    <div class="card bg-base-100 w-96 shadow-sm mx-auto">
        <figure>
          <img src="{{asset('images/welcome.png')}}" alt="Pet adoption app" />
        </figure>
        <div class="card-body">
          <h2 class="card-title text-center">Welcome PetsApp</h2>
          <p>A pet adoption app connecting loving homes with rescue animals. Browse, match, and adopt your perfect furry friend today!</p>
          <div class="card-actions justify-center mt-4">
            @auth
            <a href="{{ route('dashboard') }}" class="btn bg-transparent text-electric-blue border-electric-blue hover:bg-electric-blue/10 hover:text-electric-blue neon-glow-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M1 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3H4a3 3 0 0 1-3-3V6Zm4 1.5a2 2 0 1 1 4 0 2 2 0 0 1-4 0Zm2 3a4 4 0 0 0-3.665 2.395.75.75 0 0 0 .416 1A8.98 8.98 0 0 0 7 14.5a8.98 8.98 0 0 0 3.249-.604.75.75 0 0 0 .416-1.001A4.001 4.001 0 0 0 7 10.5Zm5-3.75a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Zm0 6.5a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5h-2.5a.75.75 0 0 1-.75-.75Zm.75-4a.75.75 0 0 0 0 1.5h2.5a.75.75 0 0 0 0-1.5h-2.5Z" clip-rule="evenodd" />
                  </svg>                  
                Dashboard               
            @endauth
            @guest
            <a href="{{ route('login') }}" class="btn bg-transparent text-electric-blue border-electric-blue hover:bg-electric-blue/10 hover:text-electric-blue neon-glow-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
                </svg>                  
                Login
            </a>
            <a href="{{ route('register') }}" class="btn bg-transparent text-hot-pink border-hot-pink hover:bg-hot-pink/10 hover:text-hot-pink neon-glow-pulse">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z" clip-rule="evenodd" />
                </svg>                  
                Register
            </a>
            @endguest
          </div>
        </div>
    </div>
@endsection

<style>
    /* Custom Neon Colors */
    .text-electric-blue {
        color: #00f2ff;
    }
    .border-electric-blue {
        border-color: #00f2ff;
    }
    .text-hot-pink {
        color: #ff00ff;
    }
    .border-hot-pink {
        border-color: #ff00ff;
    }

    /* Enhanced Neon Glow with Pulse Animation */
    .neon-glow-pulse {
        box-shadow: 0 0 10px currentColor, 0 0 20px currentColor;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }
    .neon-glow-pulse:hover {
        box-shadow: 0 0 15px currentColor, 0 0 30px currentColor;
        animation: none; /* Stop pulse on hover for smoother effect */
    }
    @keyframes pulse {
        0% { opacity: 0.9; }
        50% { opacity: 1; box-shadow: 0 0 15px currentColor, 0 0 30px currentColor; }
        100% { opacity: 0.9; }
    }
</style>