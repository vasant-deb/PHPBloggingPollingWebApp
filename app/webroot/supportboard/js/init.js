
/*
 * ==========================================================
 * INIT SCRIPT
 * ==========================================================
 *
 * Initialization script.
 * 
 */

'use strict';

(function ($) {
    var url_full = getScriptUrl();
    var url = url_full.substr(0, url_full.lastIndexOf('supportboard'));
    var parameters = getScriptParameters(url_full);
    var xhr = sbCorsRequest('GET', url + 'supportboard/include/init.php' + ('lang' in parameters ? '?lang=' + parameters['lang'] : ''));

    if (!xhr) {
        console.log('Support Board: Init Error - CORS not supported.');
    } else {
        xhr.onload = function () {
            $('body').append(xhr.responseText);
            var head = document.getElementsByTagName('head')[0];
            var link = document.createElement('link');
            link.id = 'support-board';
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = url + 'supportboard/css/min/main.min.css';
            link.media = 'all';
            head.appendChild(link);

            var script = document.createElement('script');
            script.src = url + 'supportboard/js/main.js';
            head.appendChild(script);
        };
        xhr.onerror = function () {
            console.log('Support Board: Init Error - CORS error.');
        };
        xhr.send();
    }

    function sbCorsRequest(method, url) {
        var xhr = new XMLHttpRequest();
        if ('withCredentials' in xhr) {
            xhr.open(method, url, true);
        } else if (typeof XDomainRequest != 'undefined') {
            xhr = new XDomainRequest();
            xhr.open(method, url);
        } else {
            xhr = null;
        }
        return xhr;
    }

    function getScriptUrl(a) {
        var b = document.getElementsByTagName('script');
        for (var i = 0; i < b.length; i++) {
            if (b[i].src.indexOf('/supportboard/js/init.js') > -1 || b[i].src.indexOf('/supportboard/js/min/init.min.js') > -1) {
                return b[i].src;
            }
        }
        return '';
    }

    function getScriptParameters(url) {
        var c = url.split('?').pop().split('&');
        var p = {};
        for (var i = 0; i < c.length; i++) {
            var d = c[i].split('=');
            p[d[0]] = d[1]
        }
        return p;
    }
}(jQuery));