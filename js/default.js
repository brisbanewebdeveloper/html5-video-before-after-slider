
"use strict";

(function ($) {
    $(document).ready(function () {
        function trackLocation(e) {
            var $container = $(e.target).parents(".video-compare-container");
            var container = $container[0];
            var rect = container.getBoundingClientRect();
            var position = ((e.pageX - rect.left) / container.offsetWidth) * 100;
            if (position <= 100) {
                var $clipper = $container.find(".video-clipper");
                $clipper[0].style.width = position + "%";
                var videoClipped = $clipper.find("video")[0];
                videoClipped.style.width = ((100 / position) * 100) + "%";
                videoClipped.style.zIndex = "3";
            }
        }

        $(".video-compare-container").each(function () {
            this.addEventListener("mousemove", trackLocation, false);
            this.addEventListener("touchstart", trackLocation, false);
            this.addEventListener("touchmove", trackLocation, false);
        });
    });
})(jQuery);
