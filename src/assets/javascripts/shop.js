document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('searchForm').onsubmit = function (event) {
        var searchbar = document.getElementById('search');
        if (searchbar.value == "") {
            console.log('Sorry, not completed!');
            event.preventDefault()
        } else {
            event.preventDefault()

            var searchForm = document.getElementById('searchForm');
            var formData = new FormData(searchForm);
            formData.append('c', 'shop');
            formData.append('a', 'categories');
/*            formData.append('search', searchbar.value);*/
            var targetURL = buildGetString(formData);
            if (window.history.replaceState) {
                window.history.replaceState(null, '', targetURL);
            }

            function buildGetString(formData) {
                var getString = 'index.php?';
                for (var pair of formData.entries()) {
                    //prevent adding empty hidden parameters to get string
                    if (pair[1] != '') {
                        getString += pair[0] + '=' + pair[1] + '&';
                    }
                }
                //remove last & from the string
                getString = getString.substring(0, getString.length - 1);
                //encode string for url
                getString = encodeURI(getString);
                console.log(getString);
                return getString;
            }

            const productsRequest = new XMLHttpRequest();
            productsRequest.open("GET", "assets/json/products.json", true);

            productsRequest.responseType = 'json';


            /**
             * Suchfunktion für Produkte
             */

            var productName = document.getElementById('productName');
            var productDescription = document.getElementById('productDescription');
            var productCat = document.getElementById('productCat');
            var productPrice = document.getElementById('productPrice');
            var productView = document.getElementById('productView');
            var productItemDisplay = document.getElementById('itemDisplay');



            if(productItemDisplay.firstChild != null) {
                while (productItemDisplay.firstChild) {
                    productItemDisplay.removeChild(productItemDisplay.firstChild);
                }
            }

            /* productsRequest.onload = () => {
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

                     /!*switch()*!/
                 }
             }*/


            var searchResults = [];
/*            console.clear();*/
            productsRequest.onload = () => {
                var products = productsRequest.response;
                for (var index = 0; index < products.length; index++) {
                    if (products[index].name.match(searchbar.value)) {
                        console.log('Hit: ' + index);
                        searchResults[index] = products[index];

                    } else if (products[index].category.match(searchbar.value)) {
                        console.log('Hit: ' + index);
                        searchResults[index] = products[index];

                    } else if (products[index].description.match(searchbar.value)) {
                        console.log('Hit: ' + index);
                        searchResults[index] = products[index];

                    } else if (products[index].std_price.match(searchbar.value)) {
                        console.log('Hit: ' + index);
                        searchResults[index] = products[index];
                    } else {
                        console.log('No Products found');
                    }
                }



                if (productView) {
                    for (var i = 0; i < searchResults.length; i++) {
                        console.log('zähler' + i)
                        if (searchResults[i] !== undefined) {
                            var newProduct = productView.cloneNode(true);
                            newProduct.style.display = 'block';
                            console.log(searchResults.length);
                            newProduct.querySelector('#productName').innerHTML = searchResults[i].name;
                            newProduct.querySelector('#productCat').innerHTML = 'Kategorie: ' + searchResults[i].category;
                            newProduct.querySelector('#productDescription').innerHTML = searchResults[i].description;
                            newProduct.querySelector('#productPrice').innerHTML = 'Preis: ' + searchResults[i].std_price + '€';
                            var data_id = newProduct.querySelector('#buttonEnabled');
                            if(data_id){
                                console.log(data_id);
                                data_id.setAttribute('data-id', searchResults[i].id);
                            }
                            var prodPicPath = 'assets/images/products/'+searchResults[i].picture;
                            console.log('Pfad'+prodPicPath);
                            newProduct.querySelector('#productPic').setAttribute('src', prodPicPath)
                            initializeItemListeners(newProduct);
                            productItemDisplay.appendChild(newProduct);
                        }
                    }
                    /*window.location = 'index.php?c=shop&a=categories&search';*/
                }
                console.log(searchResults.length);
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
