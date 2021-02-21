var actionSearchbar = document.getElementById('search');
window.onload = function send() {
    actionSearchbar.addEventListener('keyup', function (event) {
        if (event.key == Enter) {
            event.preventDefault();
            document.getElementById('searchSubmit').click();
        }
    });
}


/*    let request = new XMLHttpRequest();

})*/

actionSearchbar.addEventListener('keyup', function () {
    let value = document.getElementById('search').value;
    console.log(value);

});
