@extends('Layout.main')

@push('title')
    <title>View Learning</title>
@endpush

@section('main-section')
    <div class="flex w-4/5 m-auto mb-20 mt-20 justify-evenly flex-wrap">
        @foreach ($learning as $value)
            <div class="bg-blue-50 w-1/4 m-2 p-2">
                <img class="w-full" src="{{ $value->image_url }}" alt="">
                <h2 class="font-bold text-blue-500 text-xl mt-2 mb-2">{{ $value->name }}</h2>

                @if ($value->source == 'yt')
                    <p class="font-medium">Source : Youtube</p>
                @elseif($value->source == 'udacity')
                    <p class="font-medium">Source : Udacity</p>
                @elseif($value->source == 'udemy')
                    <p class="font-medium">Source : Udemy</p>
                @elseif($value->source == 'coursera')
                    <p class="font-medium">Source : Coursera</p>
                @elseif($value->source == 'skillshare')
                    <p class="font-medium">Source : Skill Share</p>
                @elseif($value->source == 'others')
                    <p class="font-medium">Source : Other Website</p>
                @endif

                <p class="font-medium">Author : {{ $value->author }}</p>
                <p class="font-medium">Duration : {{ $value->duration }} Hours</p>
                <p>{{ $value->description }}</p>
                <a href="{{ $value->redirect_url }}"><button class="bg-blue-500 mt-2 p-2 text-white font-medium">See
                        Course</button></a>
            </div>
        @endforeach
    </div>
@endsection
