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

function highlightPeriod()
{
    $(".period").animate({ color: "#ffe63b" }, 700).animate({color: "#6c757d"}, 500);
}

$(document).ready(function() {
    if($("#self_host").is(":checked")) {
        $(".self-host").hide();
        $(".cloud-host").show();
    } else {
        $(".self-host").show();
        $(".cloud-host").hide();
    }

    $("#self_host").click(function() {
        if($(this).is(":checked"))
        {
            $(".self-host").hide();
            $(".cloud-host").show();
            highlightPeriod();
        } else {
            $(".self-host").show();
            $(".cloud-host").hide();
            highlightPeriod();
        }
    });
});