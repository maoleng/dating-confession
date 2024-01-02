/* Custom settings for Flickity */
var slider = document.getElementById('slider'),
    sliderTrigger = document.querySelector('.section-scrollable .section-featured');

if (sliderTrigger) {

    if (!slider.hasAttribute('data-flickity-initialized')) {

        var flkty = new Flickity(slider, {
            wrapAround: true,
            contain: true,
            adaptiveHeight: true,
            accessibility: false,
            prevNextButtons: false,
            pageDots: false,
            selectedAttraction: .025,
            friction: .3,
            dragThreshold: 5
        });
        slider.setAttribute('data-flickity-initialized', 'true');

    }

    /* Next button */
    var nextButton = document.getElementById('next');
    nextButton.addEventListener('click', function() {
        flkty.next();
    });

    /* Add class to "loop" when is slider */
    var loop = document.getElementById('loop');
    if (flkty.cells.length > 0) {
        loop.classList.remove('no-featured');
        loop.classList.add('is-featured');
    }

    /* iOS 12 & 13 fix */
    var tapArea, startX;
    tapArea = document.querySelectorAll('.section-scrollable');
    startX = 0;
    for (var item of tapArea) {
        item.ontouchstart = function(e) {
            startX = e.touches[0].clientX;
        };
        item.ontouchmove = function(e) {
            if (Math.abs(e.touches[0].clientX - startX) > 5 && e.cancelable) {
                e.preventDefault();
            }
        };
    }
}
