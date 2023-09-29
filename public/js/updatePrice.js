

document.addEventListener('DOMContentLoaded', function() {
    // Get references to the elements
    const unitInput = document.getElementById('unit');
    const sizeSelect = document.getElementById('size-select');
    const calculatedPrice = document.getElementById('calculated-price');

    // Add event listeners to the unit and size elements
    unitInput.addEventListener('input', updateCalculatedPrice);
    sizeSelect.addEventListener('change', updateCalculatedPrice);

    // Function to update the calculated price
    function updateCalculatedPrice() {
        // Get the values of unit and selected size
        const unit = parseInt(unitInput.value, 10);
        const selectedSize = parseFloat(sizeSelect.options[sizeSelect.selectedIndex].value);

        // Calculate the price based on the unit and size
        const totalPrice = unit * selectedSize;

        // Update the displayed price
        calculatedPrice.textContent = '₱' + totalPrice.toFixed(2);
       
    }
});