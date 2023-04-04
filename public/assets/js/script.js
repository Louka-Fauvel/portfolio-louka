function modalRGPD(fmodal) {
    $(fmodal)
        .modal('show')
    ;
}

function rainActive() {

    const testFonction = document.getElementById('particule');
    if (screen.width > 1000 && screen.height > 1000) {
        setInterval(rainFall, 30);
    }

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

    const ratio = .1;
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: .1
    };

    const handleIntersect = function(entries, observer) {
        entries.forEach(function (entry) {

            if(entry.intersectionRatio > ratio) {

                entry.target.classList.add('reveal-visible')
                observer.unobserve(entry.target)

            }

        })
        //console.log('handleIntersect');
    }
    const observer = new IntersectionObserver(handleIntersect, options);
    document.querySelectorAll('[class*="reveal-invisible-"]').forEach(function (r) {
        observer.observe(r)
    })

}

$('.message .close')
    .on('click', function() {
        $(this)
            .closest('.message')
            .transition('fade')
        ;
    })
;
if(window.location.origin.valueOf()+"/" !== window.location.href.valueOf()) {
    apparitionText();
} else {

    const loader = document.querySelector('.loader-accueil');

    window.addEventListener('load', () => {

        setTimeout(function () {
            loader.classList.add('circulaire-accueil');
        }, 1000);
        setTimeout(function () {
            loader.classList.add('fondu-accueil');
        }, 2000);
        setTimeout(rainActive, 2500);
        setTimeout(apparitionText, 2500);
        setTimeout(function () {
            loader.remove();
        }, 5000);

    });

}