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
    public function store(Menu $menu)
    {

        $menu->addMenuItem($this->validateAttributes());

        //MenuItem::create($attributes);

        return redirect()->route('menuitems.index', compact('menu'))->with('success','Menu Item created successfully.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(Menu $menu, $menuItem)
    {
        $menuItem = $menu->menuItems()->where('id', $menuItem)->first();
        return view('menu::menuitems.show', compact('menuItem'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(Menu $menu, $menuItem)
    {
        $menuItem = $menu->menuItems()->where('id', $menuItem)->first();
        return view('menu::menuitems.edit', compact('menu', 'menuItem'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, MenuItem $menuItem)
    {

        $menuItem->update($this->validateAttributes());
  
        return redirect()->route('menuitems.index')
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

    public function validateAttributes()
    {
        return request()->validate([
            'menu_id' => 'required',
            'title' => 'required',
            'description' => '',
            'slug' => 'required',
            'url' => '',
            'level' => 'required',
            'order' => 'required',
            'parent_id' => 'required',
            'type' => 'required',
            'parameters' => '',
            'status' => '',
        ]);
    }
}
