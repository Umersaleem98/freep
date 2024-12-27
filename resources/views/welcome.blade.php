<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        body {
            font-family: 'Inter';
            background-color: #F3F4F6;
        }

        .alert-section {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card-footer a {
            font-size: 0.9rem;
        }
    </style>
</head>

<body style="background-color: #F3F4F6;">
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="main-content">
        <div class="container p-5">
            <div class="row">
                <!-- Left Section -->
                <div class="col-lg-4 col-md-12 mb-4" style="background-color: #F3F4F6; border-right: 2px solid rgb(189, 181, 181); border-top: 2px solid rgb(189, 181, 181);">
                    <div class="alert-section bg-light p-4 rounded shadow-sm">
                        
                
                        <!-- Alert Form -->
                        <div class="d-flex align-items-center p-1 rounded mb-3" style="background-color: #5A67D8">
                            <!-- Icon -->
                            <i class="fas fa-bell me-2 text-white p-2" style="background-color: #424190; font-size: 16px;"></i>
                
                            <!-- Input Field -->
                            <input type="email" class="form-control me-2" placeholder="Your email address" style="height: 30px; font-size: 12px;" required>
                
                            <!-- Button -->
                            <button class="btn btn-light btn-sm text-nowrap" style="height: 30px; font-size: 10px; white-space: nowrap;">
                                Activeer alert
                            </button>
                        </div>
                        <form action="{{ url()->current() }}" method="GET">
                            <!-- Search Bar -->
                            <div class="mb-3">
                                <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request()->input('search') }}">
                            </div>
                        
                            <!-- Category Filter -->
                            <h5 class="mb-3 text-dark">Segment</h5>
                            @foreach($categories as $category)
                                <div class="form-check mb-2">
                                    <input class="form-check-input text-dark" type="checkbox" name="categories[]" value="{{ $category->id }}" id="category{{ $category->id }}" {{ in_array($category->id, request()->input('categories', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label text-dark" for="category{{ $category->id }}">
                                        {{ $category->name }} ({{ $category->projects_count }})
                                    </label>
                                </div>
                            @endforeach
                        
                            <!-- Province Filter -->
                            <h5 class="mb-3 text-dark mt-4">Province</h5>
                            @foreach($locations as $location)
                                <div class="form-check mb-2">
                                    <input class="form-check-input text-dark" type="checkbox" name="locations[]" value="{{ $location->location }}" id="location{{ $loop->index }}" {{ in_array($location->location, request()->input('locations', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label text-dark" for="location{{ $loop->index }}">
                                        {{ $location->location }}
                                    </label>
                                </div>
                            @endforeach
                        
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-sm">Apply Filters</button>
                        </form>
                        

                        
                    </div>
                </div>
                
                

                <!-- Right Section -->
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @foreach ($projects as $project)
                            <!-- Card Start -->
                            <div class="card mb-4">
                                <div class="row g-0">
                                    <!-- Left Section: Logo -->
                                    <div class="col-md-2 d-flex align-items-center justify-content-center">
                                        @if ($project->logo)
                                            <img src="{{ asset('storage/' . $project->logo) }}" alt="Logo" class="img-fluid" style="max-height: 80px;">
                                        @else
                                            <span>No Logo</span>
                                        @endif
                                    </div>
                
                                    <!-- Middle Section: Name and Description -->
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $project->project_name }}</h5>
                                            <p class="card-text text-center">{{ $project->tagline }}</p>
                                        </div>
                                    </div>
                
                                    <!-- Right Section: Freelance Tag -->
                                    <div class="col-md-2 d-flex flex-column justify-content-between align-items-end p-2">
                                        <span class="badge bg-success">Freelance</span>
                                    </div>
                                </div>
                
                                <!-- Card Footer -->
                                <div class="card-footer d-flex justify-content-around" style="border-top: none;">
                                    <a href="#" class="text-decoration-none">About the Assignment</a>
                                    <a href="#" class="text-decoration-none">max {{ $project->time_per_hour }} p/h</a>
                                    <a href="#" class="text-decoration-none">{{ $project->location }}</a>
                                    <a href="#" class="text-decoration-none">16 hours per week</a>
                                </div>
                            </div>
                            <!-- Card End -->
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
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
            url: "/fetch-assignments", // Update this to match your endpoint
            method: "POST",
            data: {
                search: searchQuery,
                segments: selectedSegments,
                provinces: selectedProvinces,
                _token: "{{ csrf_token() }}" // Add CSRF token for Laravel
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

    // Event listeners
    $("#searchInput").on("keyup", function () {
        fetchResults();
    });

    $("input[name='segment'], input[name='province']").on("change", function () {
        fetchResults();
    });
});
</script>
