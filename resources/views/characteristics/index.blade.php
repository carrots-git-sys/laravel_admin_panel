@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Characteristic Categories</h1>
        @foreach($categories as $category)
            <div class="mb-6">
                <h2 class="text-xl font-semibold">{{ $category->name }}</h2>
                <ul class="list-disc pl-6">
                    @foreach($category->characteristics as $characteristic)
                        <li>
                            <span class="font-medium">{{ $characteristic->name }}</span> -
                            {{ $characteristic->meta_data['description'] ?? '' }}
                            (Type: {{ $characteristic->meta_data['type'] ?? '' }})
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
@endsection