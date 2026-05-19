let unitPrice = 1000;

let quantity = document.getElementById("quantity");
let total = document.getElementById("total");

quantity.addEventListener("input", function(){

    let q = parseInt(quantity.value);

    if(q < 0){
        q = 0;
        quantity.value = 0;
    }

    let result = unitPrice * q;

    total.value = result;

    if(result > 1000){
        alert("You are eligible for a gift coupon!");
    }

});