document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.botones');
    const cartMessage = document.getElementById('cart-message');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            cartMessage.style.display = 'block';
            setTimeout(() => {
                cartMessage.style.display = 'none';
            }, 3000); 
        });
    });
});