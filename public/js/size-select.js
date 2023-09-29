 // Get a reference to the size select element and the text input field
 const sizeSelect = document.getElementById('size-select');
 const selectedSizeText = document.getElementById('selected-size-text');

 // Add an event listener to the size select element
 sizeSelect.addEventListener('change', function() {
     // Get the selected option
     const selectedOption = sizeSelect.options[sizeSelect.selectedIndex];

     // Get the text of the selected option
     const selectedOptionText = selectedOption.text;

     // Update the value of the text input field
     selectedSizeText.value = selectedOptionText;
 });