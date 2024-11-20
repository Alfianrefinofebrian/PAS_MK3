// Fungsi untuk menangani pencarian
function handleSearch(event) {
    event.preventDefault();

    const searchInput = document.querySelector('input[name="search"]');
    const searchValue = searchInput.value.trim().toLowerCase();

    const colorContainers = document.querySelectorAll('.grid .container');

    if (searchValue) {
        // Filter elemen berdasarkan pencarian
        colorContainers.forEach(container => {
            const colorCode = container.querySelector('p').textContent.trim().toLowerCase();
            if (colorCode.includes(searchValue)) {
                container.style.display = 'block';
            } else {
                container.style.display = 'none';
            }
        });
    } else {
        // Tampilkan semua elemen jika input kosong
        colorContainers.forEach(container => {
            container.style.display = 'block';
        });
    }
}

// Event listener untuk form submission
document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.querySelector('.search-container form');
    searchForm.addEventListener('submit', handleSearch);
});




// Single function to navigate to another page (Remove duplicate function)
function goToPage() {
    window.location.href = 'pktpalette';
}
