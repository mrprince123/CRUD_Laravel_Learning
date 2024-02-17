@extends('Layout.main')


@push('title')
    <title>Contact View</title>
@endpush

@section('main-section')
    <div class="w-1/2 m-auto">
        <table class="bg-pink-100 m-4">        
        <thead>
            <tr>
                <th class="border p-2 m-2 border-black">Name</th>
                <th class="border p-2 m-2 border-black">Email</th>
                <th class="border p-2 m-2 border-black">Phone</th>
                <th class="border p-2 m-2 border-black">Purpose</th>
                <th class="border p-2 m-2 border-black">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $value)
                <tr>
                    <td class="border p-2 m-2 border-black">{{ $value->name }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->email }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->phone }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->purpose }}</td>
                    <td class="border p-2 m-2 border-black">{{ $value->message }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    </div>
@endsection
