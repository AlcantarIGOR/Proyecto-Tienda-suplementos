document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('.button');
    const Ticketenviado = document.getElementById('Ticketenviado');

    button.addEventListener('click', function() {
        Ticketenviado.style.display = 'block';
        setTimeout(() => {
            Ticketenviado.style.display = 'none';
        }, 3000); 
    });
});
