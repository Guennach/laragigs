@extends('layout')

@section('content')
@include('partials._hero')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@foreach ($listings as $listing) <!--Directive -->
    {{-- <h4>
        {{ $listing['title'] }}
    </h4>
    <p>
        {{ $listing['description'] }}
    </p>
    <a href="/find/{{$listing['id']}}">{{ $listing['title'] }}</a> --}}
    <div class="bg-gray-50 border border-gray-200 rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('images/acme.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/find/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Laravel</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">API</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Backend</a>
                </li>
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div>
        </div>
    </div>
</div>

@endforeach
</div>
<footer
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
>
<p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

<a
    href="create.html"
    class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
    >Post Job</a
>
</footer>
@endsection