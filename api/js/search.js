// const citiesEndpoint = "./api/js/cities.json";

// const cities = [];

// fetch(citiesEndpoint)
// .then(blob => blob.json())
// .then(data => cities.push(...data));



// function findCity(wordToMatch, cities){
//     return cities.filter(place => {
//         const regex = new RegExp(wordToMatch, 'gi');
//         return place.name.match(regex);
//     });
// }

// function displayCity(){
//     const matchCityArray = findCity(this.value, cities);
//     const html = matchCityArray.map(place => {
//         return `<li><span class="cityname">${place.name}</span></li>`;
//     }).join('');
//     if(this.value != ''){
//         cityAutoComplete.innerHTML = html;
//     }else{
//         cityAutoComplete.innerHTML = '';
//     };
// }

// function selectCity(){
//     console.log(this.value);
// }

//  const searchInput = document.querySelector('#city');
// const cityAutoComplete = document.querySelector('#city-result');
// const cityItem = document.querySelector('#city-result');

// searchInput.addEventListener('keyup', displayCity);



$(document).ready(function () {
    serverurl = "./api/js/cities.json";
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
    serverurlCountry = "./api/js/countries.json";
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


