/**
 * @author Christoph Frischmuth
 * @copyright Christoph Frischmuth, Matthias Gabel, Mickey Knop
 * @function ajax-request to a JSON-File, matching values with inputs, generate shop items from requested JSON-File
 */

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('searchForm').onsubmit = function (event) {
        var searchbar = document.getElementById('search');
        if (searchbar.value == "") {
            console.log('Sorry, not completed!');
            event.preventDefault()
        } else {
            event.preventDefault()

            /**
             * Validation of the search string and push the value to the GET-Variable
             * @type {HTMLElement}
             */
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

            /**
             * Initializing the ajax request
             * @type {XMLHttpRequest}
             */

            const productsRequest = new XMLHttpRequest();
            productsRequest.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {


                    /**
                     * Declaration of the variables to listen on
                     * @type {HTMLElement}
                     */
                    var productView = document.getElementById('productView');
                    var productItemDisplay = document.getElementById('itemDisplay');
                    var searchNoHits = document.getElementById('noResults');


                    /**
                     * Deletes the php generated elements in the shop if they are exists
                     */
                    if (productItemDisplay.firstChild != null) {
                        while (productItemDisplay.firstChild) {
                            productItemDisplay.removeChild(productItemDisplay.firstChild);
                        }
                    }

                    /**
                     * compares the values of the JSON-File(cloned from product_view) and input value
                     * the values will be compared in UpperCase, so capitalization isn't important
                     * objects of matching values will be pushed into the searchResults-Array
                     */
                    var searchResults = [];
                    productsRequest.onload = () => {
                        var products = productsRequest.response;
                        for (var index = 0; index < products.length; index++) {
                            if (products[index].name.toUpperCase().match(searchbar.value.toUpperCase())) {
                                searchResults[index] = products[index];

                            } else if (products[index].category.toUpperCase().match(searchbar.value.toUpperCase())) {
                                searchResults[index] = products[index];

                            } else if (products[index].description.toUpperCase().match(searchbar.value.toUpperCase())) {
                                searchResults[index] = products[index];

                            } else if (products[index].std_price.toUpperCase().match(searchbar.value.toUpperCase())) {
                                searchResults[index] = products[index];
                            }
                        }

                        /**
                         * Read matches from array and generate new products for the shop
                         */
                        if (productView) {
                            for (var i = 0; i < searchResults.length; i++) {
                                if (searchResults[i] !== undefined) {
                                    var newProduct = productView.cloneNode(true);
                                    newProduct.style.display = 'block';
                                    newProduct.querySelector('#productName').innerHTML = searchResults[i].name;
                                    newProduct.querySelector('#productCat').innerHTML = 'Kategorie: ' + searchResults[i].category;
                                    newProduct.querySelector('#productDescription').innerHTML = searchResults[i].description;
                                    newProduct.querySelector('#productPrice').innerHTML = 'Preis: ' + searchResults[i].std_price + '€';
                                    var data_id = newProduct.querySelector('#buttonEnabled');
                                    if (data_id) {
                                        data_id.setAttribute('data-id', searchResults[i].id);
                                    }
                                    var prodPicPath = 'assets/images/products/' + searchResults[i].picture;
                                    newProduct.querySelector('#productPic').setAttribute('src', prodPicPath)
                                    initializeItemListeners(newProduct);
                                    productItemDisplay.appendChild(newProduct);
                                }
                            }
                            /**
                             * If there are no matches, the array will be empty
                             * so display the hidden message in the shop
                             */
                            if (searchResults.length === 0) {
                                searchNoHits.style.display = 'block';
                            } else {
                                searchNoHits.style.display = 'none';
                            }

                            /*window.location = 'index.php?c=shop&a=categories&search';*/
                        }
                    }
                }
            }
            /**
             * Response type of the request will be a JSON file
             * Open the Request and set it to an async task
             * Send the request
             * @type {string}
             */
            productsRequest.responseType = 'json';
            productsRequest.open("GET", "assets/json/products.json", true);
            productsRequest.send();
        }
    }
});
