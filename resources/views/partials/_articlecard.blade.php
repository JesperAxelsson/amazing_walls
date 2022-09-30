<div class="w-64 h-64 mx-5 mb-5 bg-gray-900 rounded shadow">
    <a href="/article/{{$article->id}}">
        <img src="{{$article->images[0]->thumbnail}}" alt="{{$article->images[0]->alt}}" class="object-cover w-64 h-40 pb-1" />

        <div class="mx-auto sm:px-6 lg:px-8 text-amber-600">
            <div class="font-bold ">
                {{ $article->productName }}
            </div>

            <div class=" text-amber-600 text-sm">
                {{ $article->descriptionTitle }}
            </div>

            <div class=" text-amber-600">
                {{ $article->price->Formatted() }}
            </div>
        </div>
    </a>
</div>