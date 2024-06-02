document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('input[name="buscar"]');
    const resultTable = document.getElementById('resultTable');

    function fetchResults(query = '') {
        const formData = new FormData();
        formData.append('buscar', query);

        fetch('Buscar.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            clearTable();
            data.forEach(row => {
                const newRow = resultTable.insertRow();
                Object.values(row).forEach(text => {
                    const cell = newRow.insertCell();
                    cell.textContent = text;
                });
            });
        })
        .catch(error => console.error('Error:', error));
    }

    function clearTable() {
        const headerRow = resultTable.querySelector('tr:first-child');
        resultTable.innerHTML = '';
        resultTable.appendChild(headerRow);
    }

    fetchResults();

    searchInput.addEventListener('input', function() {
        const query = searchInput.value;
        fetchResults(query);
    });
});