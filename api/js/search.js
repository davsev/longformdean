$(document).ready(function () {
    serverurl = "../api/js/cities.json";
    $.getJSON(serverurl, function (data) {
        var autocompleteData = $.map(data, function (v, i) {
            return {
                label: v.name
            };
        });
        $("#city").autocomplete({
            source: autocompleteData,
            minLength: 2

        });
    });

});

$(document).ready(function () {
    serverurlCountry = "../api/js/countries.json";
    $.getJSON(serverurlCountry, function (data) {
        var autocompleteDataCountry = $.map(data, function (v, i) {
            return {
                label: v.name
            };
        });
        $("#birth_country").autocomplete({
            source: autocompleteDataCountry,
            minLength: 2

        });
    });

});


