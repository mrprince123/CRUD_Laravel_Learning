@extends('Layout.main')


@push('title')
    <title>Home</title>
@endpush

@section('main-section')
    <div>


        <div class="flex items-center w-2/3 m-auto mt-20 mb-20">
            <div class="w-1/2 m-2 p-2">
                <h1 class="font-semibold text-5xl">Modern Learning for Modern minds and all</h1>
                <p class="mt-4 font-medium">This website foucs on the providing best and free course for the student without
                    wasteing
                    any time from
                    you</p>
                <div class="mt-4">
                    <a href="{{ url('/learning-view') }}"> <button class="bg-blue-500 text-white font-medium p-2">Learn
                            Now</button></a>
                    <a href="{{ url('/about') }}"> <button class="bg-slate-100 text-blue-500 font-medium p-2">See
                            About</button></a>
                </div>
            </div>
            <img class="w-1/2 h-96 m-2 object-cover"
                src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>

        <div class="w-2/3 m-auto">
            <h1 class="font-semibold text-blue-500 mb-10 text-center text-4xl">Our new courses collection</h1>
            <div class="grid grid-cols-3 gap-4 mb-20">
                @php $count=0; @endphp
                @foreach ($learning as $value)
                    @if ($count < 3)
                        <div class="bg-slate-100 m-2 p-2 flex flex-col">
                            <img class="w-full h-1/2 object-cover" src="{{ $value->image_url }}" alt="">
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

                            <p>{{ implode(' ', array_slice(str_word_count($value->description, 1), 0, 15)) }}...</p>


                            <a class="mt-auto" href="{{ $value->redirect_url }}"><button
                                    class="bg-blue-500 mt-2 p-2 text-white font-medium">See
                                    Course</button></a>
                        </div>
                        @php  $count++;  @endphp
                    @endif
                @endforeach
            </div>
        </div>


        <div class="bg-slate-100 p-10">
            <div class="w-2/3 m-auto flex items-center">
                <img class="w-1/2 m-2"
                    src="https://res.cloudinary.com/sniperdocs/image/upload/v1708193203/Untitled_design_2_qn0jzd.png"
                    alt="">
                <div class="w-1/2 m-2">
                    <h3 class="font-semibold text-blue-500 text-3xl mb-10">We have course from Youtube, udemy, udacity and skill share and many more.</h3>
                    <ul class="mt-5">
                        <li class="font-medium m-4">We have best course from youtube free and premium which can help you in your career.</li>
                        <li class="font-medium m-4">We also have course from the udemy free and paid one full master class with best instructor.</li>
                        <li class="font-medium m-4">Dive full in the nanodegree and full master class in a week or months on these courses.</li>
                        <li class="font-medium m-4">Come and learn without wasting any time on find and seaching best course for you.</li>
                    </ul>
                    <p class="font-medium m-1">Learning <span class="text-blue-500 font-medium">Pro</span> is just a middle platform for your convience which will help you in find best and free courses for your career.</p>
                </div>
            </div>

        </div>


    </div>
@endsection
