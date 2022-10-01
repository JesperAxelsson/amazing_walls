@extends('layout')

@section('content')

<div class="bg-gray-800 shadow rounded">
    <div class="p-3 md:p-6">
        <div class="lg:px-3 lg:pt-3 pb-1 sm:grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 sm:gap-4">
            @each('partials._articlecard', $articles, 'article')
        </div>
    </div>
</div>
@endsection