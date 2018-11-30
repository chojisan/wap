<?php

namespace Modules\Template\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Template\Entities\Template;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $templates = Template::all();
        return view('template::index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('template::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Template::create($request->all());

        return redirect()->route('template.index')->with('success','Template created successfully.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Template $template)
    {
        return view('template::show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Template $template)
    {
        return view('template::edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, Template $template)
    {
        $request->validate([
            'title' => 'required',
        ]);
  
        $template->update($request->all());
  
        return redirect()->route('template.index')
                        ->with('success','Template updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Template $template)
    {
        $template->delete();

        return redirect()->route('template.index')
                        ->with('success','Template deleted successfully');
    }
}
