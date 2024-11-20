// Get all modal elements
var modals = document.querySelectorAll('.modal');

// Get all circle buttons that open the modals
var btns = document.querySelectorAll('.circle');

// Get all close buttons
var closes = document.querySelectorAll('.close');

// Get all proceed buttons
var nextBtns = document.querySelectorAll('.next-btn');

// When the user clicks on any circle button, open the corresponding modal
btns.forEach(function(element) {
    element.onclick = function(event) {
        event.preventDefault();
        var modalId = this.getAttribute('href');
        var modal = document.querySelector(modalId);
        modal.classList.add('show');
        modal.classList.remove('hide');
        setTimeout(function() {
            modal.style.display = 'block';
        }, 500); // Ensuring the animation runs smoothly
    };
});

// When the user clicks on a close button, close the corresponding modal
closes.forEach(function(element) {
    element.onclick = function() {
        var modalId = this.getAttribute('data-modal');
        var modal = document.querySelector(modalId);
        modal.classList.add('hide');
        modal.classList.remove('show');
        setTimeout(function() {
            modal.style.display = 'none';
        }, 500); // Ensuring the animation runs smoothly
    };
});

// When the user clicks on a proceed button, close the corresponding modal
nextBtns.forEach(function(element) {
    element.onclick = function() {
        var modalId = this.getAttribute('data-modal');
        var modal = document.querySelector(modalId);
        modal.classList.add('hide');
        modal.classList.remove('show');
        setTimeout(function() {
            modal.style.display = 'none';
        }, 500); // Ensuring the animation runs smoothly
        // Add functionality to proceed to next question or part of the quiz if needed
    };
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    modals.forEach(function(modal) {
        if (event.target == modal) {
            modal.classList.add('hide');
            modal.classList.remove('show');
            setTimeout(function() {
                modal.style.display = 'none';
            }, 500); // Ensuring the animation runs smoothly
        }
    });
}
