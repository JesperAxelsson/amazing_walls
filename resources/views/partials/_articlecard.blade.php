<div class="w-48 h-48 mx-5 mb-5 bg-gray-900 rounded shadow">
    <a href="/article/{{$article->id}}">
        <img class="w-100" />

        <div class="mx-auto sm:px-6 lg:px-8 text-amber-600">

            <div class=" ">

                {{ $article->productName }}
            </div>

            <div class=" text-amber-600">
                {{ $article->descriptionTitle }}
            </div>
        </div>
    </a>
</div>