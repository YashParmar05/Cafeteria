document.addEventListener("DOMContentLoaded", function() {
    // Get the input field and buttons
    var quantityInput = document.getElementById("quantity");
    var minusButton = document.querySelector(".quantity-left-minus");
    var plusButton = document.querySelector(".quantity-right-plus");
 

    

    // Add event listeners for minus button
    minusButton.addEventListener("click", function() {
        var currentValue = parseInt(quantityInput.value);
        if (!isNaN(currentValue) && currentValue > parseInt(quantityInput.min)) {
            quantityInput.value = currentValue - 1;
        }
    });

    // Add event listeners for plus button
    plusButton.addEventListener("click", function() {
        
        var currentValue = parseInt(quantityInput.value);
        if (!isNaN(currentValue) && currentValue < parseInt(quantityInput.max)) {
            quantityInput.value = currentValue + 1;
        }

        // if(currentValue >= quantityInput.max){
        //     // $this.val(quantityInput.max);
        //     $plusButton.attr('disabled', true);
        // } else {
        //     $this.val(currentValue);
        //     $plusButton.attr('disabled', false);
        // }
        
    });
});
