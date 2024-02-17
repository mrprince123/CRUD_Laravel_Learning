@extends('Layout.main')

@push('title')
    <title>Learning</title>
@endpush

@section('main-section')
    

    <div class="mt-20 mb-20 p-2 flex flex-col bg-blue-100 w-1/2 m-auto">
        <h1 class="font-medium text-blue-500 text-center text-2xl mb-5">Add Learning Course</h1>
        <form action="{{ url('/') }}/learning" class="flex flex-col" method="post">
            @csrf
            <input type="text" class="p-2 m-2" name="name" placeholder="Course Name" value="{{ old('name') }}">
            @error('name')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="text" class="p-2 m-2" name="image_url" placeholder="Image Url">
            @error('image_url')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <select name="source" class="p-2 m-2" id="">
                <option value="yt">YouTube</option>
                <option value="udacity">Udacity</option>
                <option value="udemy">Udemy</option>
                <option value="coursera">Coursera</option>
                <option value="skillshare">Skill Share</option>
                <option value="others">Others</option>
            </select>
            @error('source')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="text" class="p-2 m-2" name="author" placeholder="Author name">
            @error('author')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="text" class="p-2 m-2" name="duration" placeholder="Duration">
            @error('duration')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <textarea rows="7" type="text" class="p-2 m-2" name="description" placeholder="Description"></textarea>
            @error('description')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="text" class="p-2 m-2" name="redirect_url" placeholder="Redirect url">
            @error('redirect_url')
                <label class="text-red-500">{{ $message }}</label>
            @enderror
            <input type="submit" class="bg-blue-500 mt-5 m-2 text-white font-medium p-2" value="Add Course">
        </form>
    </div>
@endsection
