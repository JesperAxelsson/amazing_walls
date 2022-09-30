import './bootstrap';
import MyTestComponent from "./components/MyTestComponent.svelte";
import FoldableText from "./components/FoldableText.svelte";

customElements.define('my-test-component', MyTestComponent);

function init_text() {
    console.log("Init foldable")

    const articleElement = document.getElementById("article-text");
new FoldableText({
	target: articleElement,
	props: {
		data:JSON.parse( articleElement.getAttribute('data-text'))
	}
})
}
init_text();

console.log("Does this run?", MyTestComponent)

// new MyTestComponent({
// 	target: document.getElementById("mywidget"),
// 	props: {
// 		name: 'world, test compnent'
// 	}
// });
export default MyTestComponent;