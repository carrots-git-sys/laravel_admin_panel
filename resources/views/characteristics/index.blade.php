@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-3xl font-extrabold mb-8 text-center text-gray-800 tracking-tight">Characteristic Categories</h1>

        @forelse($categories as $category)
            <div class="bg-white shadow rounded-xl p-6 mb-7">
                <h2 class="text-xl font-bold text-blue-700 mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke-width="2" />
                    </svg>
                    {{ $category->name }}
                </h2>
                @if($category->characteristics->count())
                    <ul class="mt-3 space-y-3">
                        @foreach($category->characteristics as $characteristic)
                            <li class="pl-3 border-l-4 border-blue-300">
                                <div class="font-medium text-gray-900">{{ $characteristic->name }}</div>
                                <div class="text-gray-600 text-sm">
                                    {{ $characteristic->meta_data['description'] ?? 'No description' }}
                                    <span class="ml-2 inline-block bg-blue-50 text-blue-800 text-xs px-2 py-0.5 rounded-full">
                                        Type: {{ $characteristic->meta_data['type'] ?? '-' }}
                                    </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="text-gray-400 italic mt-2">No characteristics for this category.</div>
                @endif
            </div>
        @empty
            <div class="text-center text-gray-500 py-10">No categories available.</div>
        @endforelse
    </div>
@endsection
