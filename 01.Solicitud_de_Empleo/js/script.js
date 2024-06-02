window.addEventListener('load', function() {
    // Verificar si la página se ha recargado
    if (performance.navigation.type === 1) {
        // Redirigir a otra página
        window.location.href = 'Index.html';
    }
});