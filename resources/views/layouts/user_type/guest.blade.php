@extends('layouts.app')

@section('guest')
    @if(\Request::is('login/forgot-password')) 
        @include('layouts.navbars.guest.nav')
        @yield('content') 
    @else
        @if(Request::is('login'))
            {{-- Hanya tampilkan konten login tanpa navbar/footer --}}
            @yield('content')
        @else
            <div class="container position-sticky z-index-sticky top-0">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.navbars.guest.nav')
                    </div>
                </div>
            </div>
            @yield('content')        
            @include('layouts.footers.guest.footer')
        @endif
    @endif

@endsection