const dOptions = document.querySelectorAll('.dOptions');

function applyStylesToOption(selectedOption) {
    // Remove styles
    dOptions.forEach(option => {
        option.style.backgroundColor = '';
        option.style.color = '';
        option.style.boxShadow = '';
    });

    // Apply styles
    selectedOption.style.backgroundColor = '#fff';
    selectedOption.style.color = '#000';
    selectedOption.style.boxShadow = '1px 1px 5px #000';
}


dOptions.forEach(option => {
    option.addEventListener('click', function() {
        applyStylesToOption(this); // 'this' is the clicked option
    });
});