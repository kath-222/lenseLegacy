// input

const Price = document.getElementById('Price'); // Photos Price
const number = document.getElementById('number'); // Photos number

// calculateFinalPrice function for calclate the final price for the user

function calculateFinalPrice() {
    let p, n, finalPrice; 
    p = (Number(Price.value)); // get the Photos Price for the user
    n = parseInt(Number(number.value)); // get the Photos number for the user
    if (n>10){ // if condetion for 20% discount for more than 10 photos
        finalPrice = (80/100)*(p);
        document.getElementById("result").value = finalPrice;
    } else{
        finalPrice = p;
        document.getElementById("result").value = finalPrice;
    }
    
}
// reset function for reset the price and the number of the photos and the cost result
function reset() { 
    Price.value =""
    number.value =""
    document.getElementById("result").value ="_________";
}