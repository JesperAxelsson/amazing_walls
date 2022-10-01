<div class="w-auto sm:w-64 sm:h-64 mx-auto sm:mx-5 mb-5 sm:mb-5 bg-gray-900 rounded shadow">
    <a href="/article/{{$article->id}}">
        <img src="{{$article->images[0]->thumbnail}}" alt="{{$article->images[0]->alt}}"
            class="object-cover w-full sm:w-64 h-54 sm:h-44 p-1" />

        <div class="mx-auto p-1 px-2 sm:px-5 text-amber-600">
            <div class="flex justify-between">
                <div class="pb-1 font-bold">
                    {{ $article->productName }}
                </div>
                <div class="text-amber-600">
                    {{ $article->price->Formatted() }}
                </div>
            </div>

            <div class="pb-1 text-amber-600 text-sm">
                {{ $article->descriptionTitle }}
            </div>
        </div>
    </a>
</div>