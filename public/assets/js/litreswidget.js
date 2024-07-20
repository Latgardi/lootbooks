var litresWidget = {
    init: function () {
        var dataWidgetLitresAuthorSelector = document.querySelectorAll('[data-widget-litres-author]');
        var dataWidgetLitresBookSelector = document.querySelectorAll('[data-widget-litres-book]');
        var dataWidgetLitresAuthor = (dataWidgetLitresAuthorSelector.length > 0) ? dataWidgetLitresAuthorSelector[0].innerHTML : undefined;
        var dataWidgetLitresBook = (dataWidgetLitresBookSelector.length > 0) ? dataWidgetLitresBookSelector[0].innerHTML : undefined;
        if (dataWidgetLitresBook) {
            function convertGetParams(obj) {
                var params = [];
                for (var key in obj) {
                    params.push(key + '=' + obj[key]);
                }
                return params.join('&');
            }

            var litresScriptSelector = document.querySelectorAll('script[type="text/litres"]');
            litresScriptSelector.forEach(function (litresScriptElem) {
                var litresLfrom = '', litresCountry, litresGetParam, litresUtmParam = [];
                try {
                    var innerJSON = litresScriptElem.childNodes[0].textContent.trim().replace(/(['"])?([a-z0-9A-Z_]+)(['"])?:/g, '"$2": ').replace(/[^:]\/\/.*/g, "");
                    var envObject = JSON.parse('{' + innerJSON + '}');
                    if (envObject.lfrom) {
                        litresLfrom = '&lfrom=' + envObject.lfrom;
                    }
                    litresCountry = envObject.country;
                    litresGetParam = envObject.litresGetParam;
                    if (envObject.litres_utm_tags) {
                        litresUtmParam = '&' + convertGetParams(envObject.litres_utm_tags[0]);
                    }
                } catch (e) {
                }
                var url = 'https://www.litres.ru/ref_widget_art_alltypes/?q=' + encodeURIComponent(dataWidgetLitresBook) + '&q_author=' + encodeURIComponent(dataWidgetLitresAuthor ? dataWidgetLitresAuthor : '') + litresLfrom + litresUtmParam;
                if (litresCountry) {
                    url += '&country=' + litresCountry;
                }
                if (litresGetParam) {
                    url += litresGetParam;
                }
                litresWidget.loadHTML(url, function (resultHTML) {
                    litresWidget.drawWidget(resultHTML, litresScriptElem);
                });
            });
        }
    },
    loadHTML: function (url, successCallback) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var responseText = xhttp.responseText;
                successCallback(responseText);
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    },
    drawWidget: function (resultHTML, litresScriptElem) {
        if (!resultHTML) {
            return;
        }
        var newElem = document.createElement('div');
        newElem.innerHTML = resultHTML;
        litresScriptElem.parentNode.insertBefore(newElem, litresScriptElem.nextSibling);
        litresScriptElem.remove();
        $(document).find('tr:contains("Абонемент")').remove()
    }
};
if (document.readyState !== "loading") {
    litresWidget.init();
} else {
    document.addEventListener("DOMContentLoaded", litresWidget.init);
}
