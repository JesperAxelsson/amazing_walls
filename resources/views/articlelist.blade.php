@extends('layout')

@section('content')

<div class="bg-gray-800 shadow sm:rounded-lg">
    {{-- <div class="grid grid-cols-1 md:grid-cols-2"> --}}
        <div class="p-6">
            <div class="grid grid-cols-4 gap-4">
                @each('partials._articlecard', $articles, 'article')
                {{-- @foreach ($articles as $article)
                <div class="m-3">
                    <div class="  text-lg   font-semibold">
                        <a href="/article/{{$article->id}}">
                            {{ $article->productName; }}
                        </a>
                    </div>
                    <p class="p-1">
                        @if(strlen( $article->descriptionText) > 3)
                        {{substr($article->descriptionText, 0, 3).'...';}}
                        @else
                        {{$article->descriptionText;}}
                        @endif
                    </p>
                </div>
                @endforeach --}}
            </div>
            {{--
        </div> --}}
    </div>
</div>
@endsection