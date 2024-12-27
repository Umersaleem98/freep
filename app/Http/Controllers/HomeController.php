<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
{
    // Base query for projects
    $projects = Project::query();

    // Check if there's a search term and filter the projects by name or description (adjust the columns as needed)
    if ($request->has('search') && $request->input('search') != '') {
        $search = $request->input('search');
        $projects->where('name', 'like', '%' . $search . '%')
                 ->orWhere('description', 'like', '%' . $search . '%');
    }

    // Handle category filtering if categories are selected
    if ($request->has('categories')) {
        $categories = $request->input('categories');
        $projects->whereIn('category_id', $categories);
    }

    // Handle location filtering if locations are selected
    if ($request->has('locations')) {
        $locations = $request->input('locations');
        $projects->whereIn('location', $locations);
    }

    // Get the projects with the applied filters
    $projects = $projects->get();

    // Fetch all categories and count the number of projects in each
    $categories = Category::withCount('projects')->get();

    // Fetch unique locations from the projects table
    $locations = Project::select('location')->distinct()->get();

    // Pass the data to the view
    return view('welcome', compact('projects', 'categories', 'locations'));
}



}
