export function initSearchAndPagination(options) {
    const {
        searchRoute,
        tableContainerId,
        searchInputId = 'searchInput',
        perPageSelectId = 'perPageSelect',
        defaultPerPage = 10,
        searchDelay = 500
    } = options;

    const searchInput = document.getElementById(searchInputId);
    const perPageSelect = document.getElementById(perPageSelectId);
    const tableContainer = document.getElementById(tableContainerId);

    if (!tableContainer) {
        console.error(`Element #${tableContainerId} not found!`);
        return;
    }

    function fetchData(url) {
        tableContainer.innerHTML = '<div class="text-center py-4">جاري التحميل...</div>';
        
        fetch(url, {
            headers: { 
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'text/html'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.text();
        })
        .then(html => {
            tableContainer.innerHTML = html;
            bindPaginationEvents();
        })
        .catch(error => {
            console.error('Error:', error);
            tableContainer.innerHTML = `
                <tr>
                    <td colspan="100%" class="text-danger">حدث خطأ أثناء جلب البيانات</td>
                </tr>`;
        });
    }

    function handleSearch() {
        const query = searchInput ? searchInput.value.trim() : '';
        const perPage = perPageSelect ? perPageSelect.value : defaultPerPage;
        const url = searchRoute  + "?query=" + encodeURIComponent(query) +
        "&per_page=" + perPage;
        
        fetchData(url);
    }

    function bindPaginationEvents() {
        document.querySelectorAll('.pagination a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const pageUrl = this.getAttribute('href');
                const currentQuery = searchInput ? searchInput.value.trim() : '';
                const currentPerPage = perPageSelect ? perPageSelect.value : defaultPerPage;
                
                const url = new URL(pageUrl, window.location.origin);
                url.searchParams.set('query', currentQuery);
                url.searchParams.set('per_page', currentPerPage);
                
                fetchData(url.toString());
            });
        });
    }

    if (searchInput) {
        let searchTimer;
        searchInput.addEventListener("keyup", function() {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(handleSearch, searchDelay);
        });
    }

    if (perPageSelect) {
        perPageSelect.addEventListener("change", handleSearch);
    }

    bindPaginationEvents();
}
