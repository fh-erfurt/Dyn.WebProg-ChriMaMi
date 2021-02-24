document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll("#itemDisplay .item").forEach(function (item) {
      initializeItemListeners(item);
    })

})
function initializeItemListeners(item) {

    var amountBox = item.querySelector(".counter .box[data-type='amount']");
    item.querySelectorAll(".counter .box:not(.disabled)").forEach(function (box) {
        box.addEventListener('click', function () {
            var type = box.getAttribute("data-type");
            var amount = parseInt(amountBox.textContent);
            if (type === "decrease") {
                amount--;
                if (amount < 0) {
                    amount = 0;
                }
                amountBox.textContent = amount;
            } else if (type === "increase") {
                amount++;
                amountBox.textContent = amount;
            }
        })
    })

    var btn =  item.querySelector(".btn:not(.disabled)");
    if(btn) {
        btn.addEventListener('click', function () {
            var amount = parseInt(amountBox.textContent);
            var id = this.getAttribute('data-id');
            if (amount == 0) {
                return;
            }
            window.location = "index.php?c=shop&a=add&product=" + id + "&amount=" + amount;
        })
    }

}
