<script>

let colour = 'red';
	
function handleMouseOver(e) {
    console.log("Green")
    colour = 'green'
}
function handleMouseOut(e) {
    console.log("Red")
    colour = 'red'
}
</script>

<svg height="100" width="100">
    <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill={colour}
                      on:mouseover={handleMouseOver} on:mouseout={handleMouseOut} />
  </svg>