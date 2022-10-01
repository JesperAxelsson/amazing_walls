<script>
    export let data = { text: "", maxLength: 10 };
    let expand = false;

    function handleExpandClicked(e) {
        expand = true;
    }

    function handleCollapseClicked(e) {
        expand = false;
    }
</script>

<div>
    {#if data.text.length > data.maxLength}
        {#if !expand}
            {data.text.substring(0, data.maxLength)}...
            <br />
            <div
                class="cursor-pointer mt-2 text-sm"
                on:click={handleExpandClicked}
            >
                See more
            </div>
        {:else}
            {data.text}
            <br />
            <div
                class="cursor-pointer mt-2 text-sm"
                on:click={handleCollapseClicked}
            >
                See less
            </div>
        {/if}
    {:else}
        {data.text}
    {/if}
</div>
