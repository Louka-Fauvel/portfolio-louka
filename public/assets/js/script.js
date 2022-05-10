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

function boutonActive() {
    const b = document.getElementById("contact-envoyez");
    const recap = document.getElementById("recaptcha-verify-button");

    if (recap == null) {
        alert("test vide");
    } else {
        alert("test non vide");
    }

    b.classList.add("bouton-active");
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
        console.log('handleIntersect');
    }
    const observer = new IntersectionObserver(handleIntersect, options);
    document.querySelectorAll('[class*="reveal-invisible-"]').forEach(function (r) {
        observer.observe(r)
    })

}
apparitionText();
x = document.getElementById("recaptcha-anchor-label");
x.onclick = boutonActive;