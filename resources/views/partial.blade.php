<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Function to fetch filtered results
    function fetchResults() {
        // Get the search query
        let searchQuery = $("#searchInput").val();

        // Get selected checkboxes for segments and provinces
        let selectedSegments = [];
        $("input[name='segment']:checked").each(function () {
            selectedSegments.push($(this).val());
        });

        let selectedProvinces = [];
        $("input[name='province']:checked").each(function () {
            selectedProvinces.push($(this).val());
        });

        // Perform AJAX request
        $.ajax({
            url: "{{ route('projects.fetch') }}", // Your AJAX endpoint
            method: "GET", // Change to GET or POST based on your preference
            data: {
                search: searchQuery,
                segments: selectedSegments,
                provinces: selectedProvinces,
                _token: "{{ csrf_token() }}" // Laravel CSRF token
            },
            success: function (data) {
                // Replace content with the updated results
                $("#resultsContainer").html(data);
            },
            error: function () {
                alert("An error occurred while fetching results.");
            }
        });
    }

    // Event listeners for search input and checkboxes
    $("#searchInput").on("keyup", function () {
        fetchResults();
    });

    $("input[name='segment'], input[name='province']").on("change", function () {
        fetchResults();
    });
});
</script>
