<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    // Dashboard listing
    public function index()
    {
        $clients = Client::where('is_active', true)->get(); // Filter active clients
        return view('user.pages.client.index', compact('clients'));
    }
    public function create()
    {
        return view('user.pages.client.create');
    }
    // ProductController.php
    public function show(Client $client)
    {
        return view('user.pages.client.show', compact('client'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description' => 'required|string|max:500',
            'icon' => 'nullable|string|max:50',
            'is_active' => 'boolean'
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('clients', 'public');
        }

        Client::create($data);

        return redirect()->route('client.index')
            ->with('success', 'client created successfully.');
    }

    public function edit(Client $client)
    {
        return view('user.pages.client.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description' => 'required|string|max:500',
            'is_active' => 'boolean'
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($client->image) {
                Storage::disk('public')->delete($client->image);
            }
            $data['image'] = $request->file('image')->store('clients', 'public');
        }

        $client->update($data);

        return redirect()->route('client.index')
            ->with('success', 'client updated successfully.');
    }

    public function destroy(Client $client)
    {
        if ($client->image) {
            Storage::disk('public')->delete($client->image);
        }

        $client->delete();

        return redirect()->route('client.index')
            ->with('success', 'Client deleted successfully.');
    }
}
