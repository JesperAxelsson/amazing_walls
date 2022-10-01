import Carousel from "./components/Carousel.svelte";
import FoldableText from "./components/FoldableText.svelte";

function initText(elemtentId) {
    const articleElement = document.getElementById(elemtentId);
    new FoldableText({
        target: articleElement,
        props: {
            data: JSON.parse(articleElement.getAttribute('data-text'))
        }
    })
}

initText("article-text");

function initCarousel(elemtentId) {
    const articleElement = document.getElementById(elemtentId);
    new Carousel({
        target: articleElement,
        props: {
            images: JSON.parse(articleElement.getAttribute('data-images'))
        }
    })
}

initCarousel("carousel");
