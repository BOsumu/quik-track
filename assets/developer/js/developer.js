document.addEventListener('DOMContentLoaded', function () {
    const searchBox = document.querySelector('.search-box');
    const dropdownList = document.querySelector('.dropdown-list');
    const options = Array.from(dropdownList.children);

    searchBox.addEventListener('input', function () {
        const filter = searchBox.value.toLowerCase();

        options.forEach(option => {
            const optionText = option.textContent.toLowerCase();
            option.style.display = optionText.includes(filter) ? 'block' : 'none';
        });

        dropdownList.style.display = 'block';
    });

    options.forEach(option => {
        option.addEventListener('click', function () {
            searchBox.value = option.textContent;
            dropdownList.style.display = 'none';
        });
    });

    // Close the dropdown if the user clicks outside of it
    document.addEventListener('click', function (event) {
        if (!event.target.matches('.searchable-dropdown')) {
            dropdownList.style.display = 'none';
        }
    });
});
