document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('searchForm').onsubmit = function (event) {
        var searchbar = document.getElementById('search');
        if (searchbar.value == "") {
            console.log('Sorry, not completed!');
            event.preventDefault()
        } else {
            requestProducts();
            event.preventDefault()
        }
    }
});

function requestProducts() {
    const productsRequest = new XMLHttpRequest();
    productsRequest.open('GET', '/src/')
}

/*
var actionSearchbar = document.getElementById('search');
window.onload = function send() {
    actionSearchbar.addEventListener('', function (event) {
        if (event.key == Enter) {
            event.preventDefault();
            document.getElementById('searchSubmit').click();
        }
    });
}
*/


/*    let request = new XMLHttpRequest();

})*/

/*
actionSearchbar.addEventListener('keyup', function () {
    let value = document.getElementById('search').value;
    console.log(value);

});
*/
