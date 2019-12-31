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

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');
require('../css/global.scss');
require('universal-parallax/dist/universal-parallax.css');
//require('mdbootstrap/css/mdb.min.css');
//require('../css/para.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
//const $ = require('jquery');
//const jQuery = require('jquery'); a
var $ = require('jquery');
window.$ = $;
window.jQuery = $;

//const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('popper.js');
require('bootstrap');
require('zurb-twentytwenty/js/jquery.event.move');
require('zurb-twentytwenty/js/jquery.twentytwenty');
require('zurb-twentytwenty/css/twentytwenty.css');
require('chart.js/dist/Chart.bundle.min');
require('font-awesome/css/font-awesome.min.css');
require('./sly.min');
require('./jquery-ui.min');
require('../css/jquery-ui.min.css');
//require('bootbox/dist/bootbox.all.min');
//import bootbox from 'bootbox';
//var x = bootbox;
//require('mdbootstrap/js/mdb.min.js');

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})