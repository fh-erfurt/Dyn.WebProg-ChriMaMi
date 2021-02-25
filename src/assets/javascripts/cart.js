/**
 * @author Christoph Frischmuth
 * @copyright Christoph Frischmuth, Matthias Gabel, Mickey Knop
 * @team ChriMaMi
 * @function redirect to myData and printView
 */
addEventListener('DOMContentLoaded', function() {
    var printView = document.getElementById('printView');
    printView.addEventListener('click', function (redirect) {
        redirect.preventDefault();
        window.print();
    });

    var btnData = document.getElementById('changeData');
    btnData.addEventListener('click', function (redirect) {
        redirect.preventDefault();
        window.location = 'index.php?c=administration&a=myData';
    });
});