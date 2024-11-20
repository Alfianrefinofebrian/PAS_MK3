function handleSearch(event) {
    event.preventDefault();
    
    const searchInput = document.querySelector('input[name="search"]');
    const searchValue = searchInput.value.trim();

    if (searchValue) {
        // Redirect to the desired page
        window.location.href = 'descolor.html';
    } else {
        alert('Masukan index warna dengan benar');
    }
    
    // Clear the input only after handling the search (optional)
    searchInput.value = '';
}

// Event listener for the form submission
document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.querySelector('.search-container form');
    searchForm.addEventListener('submit', handleSearch);
});


// Single function to navigate to another page (Remove duplicate function)
function goToPage() {
    window.location.href = 'pktpalette';
}
