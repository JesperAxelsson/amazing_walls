@extends('layout')

@push('scripts')
@vite('resources/js/article.js')
@endpush

@section('content')

<div class="bg-gray-800 shadow rounded h-full lg:flex p-5">

    <div id="carousel" data-images='@json($article->images)'
        class="mr-5 p-3 bg-gray-900 rounded shadow w-full md:w-1/2 flex flex-col"></div>

    <div class="w-full md:w-1/2  flex flex-col">
        <div class="p-3 bg-gray-900 rounded shadow ">
            <div class="m-3">
                <div class="flex justify-between">
                    <div class="font-bold text-3xl">
                        {{ $article->productName }}
                    </div>
                    <div class="text-amber-600">
                        {{ $article->price->Formatted() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="p-3 mt-5 bg-gray-900 rounded shadow ">
            <div class="m-3 text-xl font-semibold">
                {{ $article->descriptionTitle }}
            </div>
            <hr class="border-gray-600">
            <div class=" m-3">
                @php
                $articleData['text'] = $article->descriptionText;
                $articleData['maxLength'] = 40;
                @endphp

                <div id="article-text" data-text='@json($articleData)'></div>
            </div>
        </div>
    </div>
</div>
@endsection