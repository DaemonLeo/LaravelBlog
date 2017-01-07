<?php

namespace App\Http\Controllers;

use App\Http\Model\Admin\Menu;
use Illuminate\Http\Request;
//use Illuminate\Contracts\View\Factory;


class AdminController extends Controller
{

    public function __construct()
    {
        $menuHtml = '';
        $modelsMenu = new Menu();
        $menuListAvailable = $modelsMenu->viewMenu();
        //echo '<pre>'; print_r($menuListAvailable); exit;
        foreach ($menuListAvailable as $urlName => $menuUnits) {
            //foreach ($menuUnits as $columnName => $value){
                if($menuUnits['type'] == '0')
                {
                    $menuHtml .= '<li>
                            <a href="/adminzone/'.$urlName.'"><i class="'.$menuUnits['icon'].'"></i> '.$menuUnits['name'].'</a>
                        </li>';
                }
            //}
        }

        view()->share('leftMenu', $menuHtml);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
