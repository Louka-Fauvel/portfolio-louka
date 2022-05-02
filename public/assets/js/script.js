function modalRGPD(fmodal) {
    $(fmodal)
        .modal('show')
    ;
}
function rainActive() {

    const testFonction = document.getElementById('particule');

    setInterval(rainFall, 30);

    function rainFall() {

        const waterDrop = document.createElement('i');

        waterDrop.classList.add('circle');
        waterDrop.classList.add('icon');
        waterDrop.style.fontSize = Math.random() * 3 + 'px';
        waterDrop.style.animationDuration = Math.random() * 30 + 's';
        waterDrop.style.opacity = Math.random() + 0.3;
        waterDrop.style.left = Math.random() * window.innerWidth + 'px';

        testFonction.appendChild(waterDrop);

        setTimeout(() => {
            waterDrop.remove();
        }, 6000)
    }
}

function apparitionText() {

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: .1
    };

    const handleIntersect = function() {
      console.log('handleIntersect')
    }
    const observer = new IntersectionObserver(callback, options);
    observer.observe(document.querySelector('.reveal'))

}