const imageDivider = document.getElementById('image-divider');
const imageDividerImage = imageDivider.querySelector('img');

function parallax() {
    requestAnimationFrame(() => {
        const calc = (window.scrollY + window.innerHeight / 2) / (imageDivider.offsetTop + window.innerHeight / 2) * -50;
        imageDividerImage.style.transform = `translate(-50%, ${calc < 25 ? (calc > -50 ? calc : -50) : 25}%)`;
    })
}

window.addEventListener('load', parallax);
window.addEventListener('scroll', parallax);
window.addEventListener('resize', parallax);
