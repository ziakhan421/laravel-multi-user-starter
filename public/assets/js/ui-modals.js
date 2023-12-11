/**
 * UI Modals
 */

'use strict';

(function () {
    // On hiding modal, remove iframe video/audio to stop playing
    const youTubeModal = document.querySelector('#youTubeModal'),
        youTubeModalVideo = youTubeModal.querySelector('iframe');
    youTubeModal.addEventListener('hidden.bs.modal', function () {
        youTubeModalVideo.setAttribute('src', '');
    });

    // Function to get and auto play youTube video
    const autoPlayYouTubeModal = function () {
        const modalTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="modal"]'));
        modalTriggerList.map(function (modalTriggerEl) {
            modalTriggerEl.onclick = function () {
                const theModal = this.getAttribute('data-bs-target'),
                    videoSRC = this.getAttribute('data-theVideo'),
                    videoSRCauto = `${videoSRC}?autoplay=1`,
                    modalVideo = document.querySelector(`${theModal} iframe`);
                if (modalVideo) {
                    modalVideo.setAttribute('src', videoSRCauto);
                }
            };
        });
    };

    // Calling function on load
    autoPlayYouTubeModal();
})();

!function () {
    const e = document.querySelector("#animation-dropdown"), t = document.querySelector("#animationModal");
    e && (e.onchange = function () {
        t.classList = "", t.classList.add("modal", "animate__animated", this.value)
    });
    [].slice.call(document.querySelectorAll('[data-bs-toggle="modal"]')).map((function (e) {
        e.onclick = function () {
            const e = this.getAttribute("data-bs-target"), t = `${this.getAttribute("data-theVideo")}?autoplay=1`,
                a = document.querySelector(`${e} iframe`);
            a && a.setAttribute("src", t)
        }
    })), document.querySelectorAll(".carousel").forEach((e => {
        e.addEventListener("slide.bs.carousel", (t => {
            var a = $(t.relatedTarget).height();
            $(e).find(".active.carousel-item").parent().animate({height: a}, 500)
        }))
    }))
}();
