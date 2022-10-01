<script>
    export let images = [];
    let current = 0;

    function handleMouseOver(index) {
        current = index;
    }
</script>

<div class="flex-1 flex">
    <img
        src={images[current].url}
        alt={images[current].alt}
        class="object-cover pb-1 h-full w-full"
    />
</div>
<div class="pt-3 flex overflow-auto">
    {#each images as image, index}
        <img
            on:mouseover={() => handleMouseOver(index)}
            on:focus={() => handleMouseOver(index)}
            on:click={() => handleMouseOver(index)}
            src={image.thumbnail}
            alt={image.alt}
            class="object-cover w-20 h-20 mr-5 pb-1 border-solid border-b-4 + {index ==
            current
                ? 'border-gray-700 '
                : 'border-transparent'}"
        />
    {/each}
</div>
