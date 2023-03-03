<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::orderBy('name', 'ASC')->get();
        return view('tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // FAKE TOOL
        $tool = new Tool();
        return view('tools.create', compact('tool'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:tools',
            'thumb' => 'nullable|string',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'release_year' => 'nullable|string',
            'download_link' => 'nullable|string',
            'supported_os' => 'nullable|string',
            'vote' => 'nullable|string',
        ], [
            // PERSONALIZZAZIONE DEI MESSAGGI ERRORE
            'name.required' => 'The Name field is required!',
        ]);

        $data = $request->all();
        $tool = new Tool();

        $tool->fill($data);
        $tool->save();

        return to_route('tools.show', $tool->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view('tools.show', compact('tool'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view('tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'name' => 'required|string|unique:tools',
            'thumb' => 'nullable|string',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'release_year' => 'nullable|string',
            'download_link' => 'nullable|string',
            'supported_os' => 'nullable|string',
            'vote' => 'nullable|string',
        ], [
            // PERSONALIZZAZIONE DEI MESSAGGI ERRORE
            'name.required' => 'The Name field is required!',
        ]);

        // REQUEST PER CAMPI FORM come lo STORE
        $data = $request->all();
        $tool = Tool::findOrFail($id);

        $tool->update($data);

        return to_route('tools.show', $tool->id)
            ->with('message', "Change made successfully")
            ->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tool = Tool::findOrFail($id);
        $tool->delete();
        return to_route('tools.index')
            ->with('message', "$tool->name successfully Deleted")
            ->with('type', 'success');
    }
}
