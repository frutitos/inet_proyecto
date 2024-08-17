document.addEventListener('DOMContentLoaded', function() {
    var carouselElement = document.querySelector('#carouselVideoExample');
    var carouselInstance = new bootstrap.Carousel(carouselElement, {
        interval: false, // Desactiva el cambio automático por tiempo
    });

    var videos = document.querySelectorAll('#carouselVideoExample .carousel-item video');

    videos.forEach(function(video, index) {
        video.addEventListener('ended', function() {
            carouselInstance.next(); // Pasa al siguiente slide cuando el video termina
        });
    });
});