document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('searchForm').onsubmit = function (event) {
        var searchbar = document.getElementById('search');
        if (searchbar.value == "") {
            console.log('Sorry, not completed!');
            event.preventDefault()
        } else {
            event.preventDefault()

            const productsRequest = new XMLHttpRequest();
            productsRequest.open("GET", "assets/json/products.json", true);

            productsRequest.responseType = 'json';

            productsRequest.onload = () => {
                var products = productsRequest.response;
                for (var index = 0; index < products.length; index++) {
                    if (products[index].name.match(searchbar.value)) {
                        console.log('Hit: '+index);
                        console.log('Produkt : ' + products[index].name);
                        console.log('Kategorie : ' + products[index].category);
                        console.log('Beschreibung : ' + products[index].deascription);
                        console.log('Price : ' + products[index].std_price);
                    } else if(products[index].category.match(searchbar.value)) {
                        console.log('Hit: '+index);
                        console.log('Produkt : ' + products[index].name);
                        console.log('Kategorie : ' + products[index].category);
                        console.log('Beschreibung : ' + products[index].deascription);
                        console.log('Price : ' + products[index].std_price);

                    } else if (products[index].deascription.match(searchbar.value)) {
                        console.log('Hit: '+index);
                        console.log('Produkt : ' + products[index].name);
                        console.log('Kategorie : ' + products[index].category);
                        console.log('Beschreibung : ' + products[index].deascription);
                        console.log('Price : ' + products[index].std_price);

                    } else if (products[index].std_price.match(searchbar.value)) {
                        console.log('Hit: '+index);
                        console.log('Produkt : ' + products[index].name);
                        console.log('Kategorie : ' + products[index].category);
                        console.log('Beschreibung : ' + products[index].deascription);
                        console.log('Price : ' + products[index].std_price);

                    } else {
                        console.log('No Products found');
                    }

                    /*switch()*/
                }
            }
            productsRequest.send();
        }
    }
});


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
