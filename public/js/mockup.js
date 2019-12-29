/*
 * MIT License
 *
 * Copyright (c) 2019-2020 Julian B. Heuschen
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

var width = 765, height = 1361;
var transX = 11, transY = 16;
var backtrans = -290; //px

function Utils() {

}

Utils.prototype = {
    constructor: Utils,
    isElementInView: function (element, fullyInView) {
        var pageTop = $(window).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).height();

        if (fullyInView === true) {
            return ((pageTop < elementTop) && (pageBottom > elementBottom));
        } else {
            return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
        }
    },
    getElementEndpoint: function(element) {
        var elementTop = $(element).offset().top;
        return elementTop + $(element).height();
    },
    getElementBegin: function(element) {
        return $(element).offset().top;
    },
    resizeImages: function(maxWidth, maxHeight) {


        var $window = $(window);
        var width = $window.width();
        var height = $window.height();
        var scale;

        // early exit
        if(width >= maxWidth && height >= maxHeight) {
            $('.sc-img').css({'-webkit-transform': 'translate(' + transX + '%, ' + transY + '%)'});
            //$('.sc-img').css({ width: '', height: '' });
            return;
        }

        scale = Math.min(width/maxWidth, height/maxHeight);

        $('.sc-img').css({'-webkit-transform': 'scale(' + scale + ') translateX(' + backtrans + 'px)'});
        $(".zoom-out-bg").css({'-webkit-transform': 'translate(' + transX + '%, ' + transY + '%) scale(' + scale + ') translateX(' + backtrans + 'px)'})
        //$('#wrap').css({ width: maxWidth * scale, height: maxHeight * scale });

    }
};

var Utils = new Utils();

$(document).ready(function() {

    Utils.resizeImages(width, height);

    $(window).resize(function() {
       Utils.resizeImages(width, height);
    });

    var endpoint = Utils.getElementEndpoint($(".phone-container"));
    var begin = Utils.getElementBegin($(".phone-container"));
    /*$(window).scroll(function() {
        //console.log($(document).scrollTop());
        //console.log(endpoint);
        var st = $(document).scrollTop();
        if(st > endpoint || st < begin)
        {
            $(".phone-container").removeClass("container-fixed-state");
            return;
        }
        if(Utils.isElementInView($(".phone-container"), false))
        {
            $(".phone-container").addClass("container-fixed-state");
        }
    });*/
});