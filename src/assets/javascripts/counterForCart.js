document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll(".cartDisplay .cartItem").forEach(function (item){
        var amountBox = item.querySelector(".counter .box[data-type='amount']");
        item.querySelectorAll(".counter .box").forEach(function (box){
            box.addEventListener('click', function(){
                var type = box.getAttribute("data-type");
                var amount = parseInt(amountBox.textContent);
                if (type === "decrease")
                {
                    amount--;
                    if (amount < 1)
                    { amount = 1;}
                    amountBox.textContent = amount;
                }
                else if (type === "increase")
                {
                    amount++;
                    amountBox.textContent = amount;
                }
            })
        })
    })
})
