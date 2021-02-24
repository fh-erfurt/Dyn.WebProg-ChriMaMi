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