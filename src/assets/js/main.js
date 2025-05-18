// Fungsi untuk memuat file komponen HTML
function loadComponent(id, file) {
    fetch(file)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Failed to load ${file}`);
            }
            return response.text();
        })
        .then(data => {
            document.getElementById(id).innerHTML = data;
        })
        .catch(error => {
            console.error("Error loading component:", error);
        });
}

// Panggil fungsi untuk memuat header dan footer
window.addEventListener('DOMContentLoaded', () => {
    loadComponent('header', 'components/header.html');
    loadComponent('footer', 'components/footer.html');
    loadComponent('navbar', 'components/navbar.html'); // jika Anda punya navbar.html
});
