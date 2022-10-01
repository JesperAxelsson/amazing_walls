@extends('layout')

@section('content')

<div class="bg-gray-800 shadow sm:rounded-lg">
    <div class="md:p-6">
        <div class=" md:grid  sm:grid-cols-2 lg:grid-cols-3  2xl:grid-cols-4 md:gap-4">
            @each('partials._articlecard', $articles, 'article')

        </div>
    </div>
</div>
@endsection