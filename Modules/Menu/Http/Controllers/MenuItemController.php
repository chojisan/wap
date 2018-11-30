<?php

namespace Modules\Menu\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Menu\Entities\Menu;
use Modules\Menu\Entities\MenuItem;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Menu $menu)
    {
        return view('menu::menuitems.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Menu $menu)
    {
        return view('menu::menuitems.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request, $menu)
    {
        $request->validate([
            'menu_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'level' => 'required',
            'order' => 'required',
            'parent_id' => 'required',
            'type' => 'required',
        ]);

        MenuItem::create($request->all());

        return redirect()->route('menuitems.index', compact('menu'))->with('success','Menu Item created successfully.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(MenuItem $menuItem)
    {
        return view('menu::menuitems.show', compact('menuItem'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(MenuItem $menuItem)
    {
        return view('menu::menuitems.edit', compact('menuItem'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'menu_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'level' => 'required',
            'order' => 'required',
            'parent_id' => 'required',
            'type' => 'required',
        ]);

        $menuItem->update($request->all());
  
        return redirect()->route('menu.index')
                        ->with('success','Menu Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(Menu $menu, $menuItem)
    {
        $menu->menuItems()->where('id', $menuItem)->delete();

        return redirect()->route('menuitems.index', compact('menu'))
                        ->with('success','Menu Item deleted successfully');
    }
}
