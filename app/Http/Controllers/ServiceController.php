<?php

// app/Http/Controllers/ServiceController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($service)
    {
        // Validate that the service exists and return a view
        if (view()->exists('services.' . $service)) {
            return view('services.' . $service);
        }
        
        abort(404); // Return a 404 page if the service view does not exist
    }
}


