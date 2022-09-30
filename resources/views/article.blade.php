@extends('layout')
{{--
@push('scripts')
<script type="module" src="../resources/js/banana.js"></script>
@endpush --}}

@push('scripts')
@vite('resources/js/app.js')
{{-- @vite('MyTestComponent.js') --}}
{{-- @vite('resources/js/MyTestComponent.js') --}}
{{-- @vite('resources/js/banana.js') --}}
{{-- @vite('resources/js/article.svelte') --}}
<script defer>
    const json = @json($article->images ) ;
    console.log("Foo", json);
    // console.log("Foo", window._, " comp: ", MyTestComponent);
// console.log("Codes", MyTestComponent);
// new MyTestComponent({
// 	target: document.getElementById("mywidget"),
// 	props: {
// 		name: 'world'
// 	}
// });
// let colour = 'red';
	
// function handleMouseOver(e) {
//     colour = 'green';
// }
// function handleMouseOut(e) {
//     colour = 'red';
// }
</script>
@endpush

@section('content')

<div class="bg-gray-800 shadow rounded h-full md:flex p-5">
    <div class="mr-5 p-3 bg-gray-900 rounded shadow sm:w-full md:w-1/2 flex flex-col   ">
        <div class="flex-1 flex ">
            <img id="main-image" src="{{$article->images[0]->url}}" alt="{{$article->images[0]->alt}}"
                class="object-cover pb-1" />
        </div>
        <div class="pt-3 flex overflow-auto">
            @foreach ($article->images as $image)
            <img id="thumb" src="{{$image->thumbnail}}" alt="{{$article->images[0]->alt}}"
                class="object-cover w-20 h-20 mr-4" />

            @endforeach
        </div>
    </div>

    <div class="sm:w-full md:w-1/2 flex flex-col">
        <div class="p-3 bg-gray-900 rounded shadow ">
            <div class="mx-auto sm:px-6 lg:px-8 ">
                <div class="flex justify-between">
                    <div class="font-bold text-2xl">
                        {{ $article->productName }}
                    </div>
                    <div class="text-amber-600">
                        {{ $article->price->Formatted() }}
                    </div>
                </div>
            </div>
        </div>



        <div class="p-3 mt-5 bg-gray-900 rounded shadow ">
            <div class="m-3 text-xl">
                {{ $article->descriptionTitle }}
            </div>
            <hr class="border-gray-600">
            <div class=" m-3 text-sm">

            {{-- <p class="">
                @if(strlen( $article->descriptionText) > 3)
                {{substr($article->descriptionText, 0, 3).'...';}}
                <br>
                <a class="cursor-pointer">See more</a>
                @else

                {{$article->descriptionText;}}
                @endif
            </p> --}}
            {{-- <div id="article-text" data-text="@json($article->descriptionText)"></div> --}}
            @php
            $articleData['text'] = $article->descriptionText;
            $articleData['maxLength'] = 40;
            @endphp

            <div id="article-text" data-text='@json($articleData)'></div>



            {{-- <my-test-component></my-test-component> --}}
            {{-- <div id="mywidget"></div> --}}
        </div>
    </div>
</div>
</div>
@endsection