<?php

namespace Modules\Menu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Entities\MenuItem;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menu::menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('menu::menus.create');
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
            'type' => 'required'
        ]);

        //Menu::create(request(['title', 'type', 'description', 'parameters', 'active']));
        Menu::create($request->all());

        return redirect()->route('menu.index')->with('success','Menu created successfully.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Menu $menu)
    {
        return view('menu::menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Menu $menu)
    {
        return view('menu::menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required'
        ]);

        //$menu->update(request(['title', 'type', 'description', 'parameters', 'active']));
        $menu->update($request->all());
  
        return redirect()->route('menu.index')
                        ->with('success','Menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Menu $menu)
    {
        // delete also associated menu items
        $menu->allMenuItems()->delete();

        $menu->delete();

        return redirect()->route('menu.index')
                        ->with('success','Menu deleted successfully');
    }
}
