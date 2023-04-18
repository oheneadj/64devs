<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            'heading' => "Latest Listings",
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(6)
                ->withQueryString()
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'heading' => "Listing",
            'listing' => $listing
        ]);
    }

    // Show create form
    public function create()
    {
        return view('listings.create', [
            'heading' => "Create Listings",
        ]);
    }

    // Store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')
                ->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')
            ->with('success', 'Listing Created Successfully!');
    }

    // Show edit listing page
    public function edit(Listing $listing)
    {
        if (auth()->user()->id == $listing->user_id) {
            return view('listings.edit', [
                'listing' => $listing,
                'heading' => 'Edit Listing'
            ]);
        }

        abort(404);
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => ['required', 'url'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')
                ->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()
            ->with('success', 'Listing Updated Successfully!');
    }

    // Delete listing
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect('/')
            ->with('success', 'Listing Deleted Successfully!');;
    }

    //      Manage Listings
    public function manage()
    {
        return view('listings.manage', [
            'listings' => auth()
                ->user()
                ->listings()
                ->get(),
            'heading' => 'Manage Your Listings'
        ]);
    }

    // Show about page

    public function about()
    {
        return view('about', [
            'heading' => 'About 64Devs'
        ]);
    }
}
