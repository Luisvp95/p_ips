<?php

namespace App\Http\Controllers;

use App\Models\Ip;
use App\Models\Area;
use App\Models\Categories;
use Illuminate\Http\Request;

/**
 * Class IpController
 * @package App\Http\Controllers
 */
class IpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ips = Ip::paginate();

        return view('ip.index', compact('ips'))
            ->with('i', (request()->input('page', 1) - 1) * $ips->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $ip = new Ip();
    $areas = Area::pluck('name', 'id')->map(function ($name, $id) {
        $area = Area::find($id);
        return $name . ' - ' . $area->range;
    });
    return view('ip.create', compact('ip', 'areas'));
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ip::$rules);

        $ip = Ip::create($request->all());

        return redirect()->route('ips.index')
            ->with('success', 'Ip created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ip = Ip::find($id);

        return view('ip.show', compact('ip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ip = Ip::find($id);

        $areas = Area::pluck('name', 'id')->map(function ($name, $id) {
            $area = Area::find($id);
            return $name . ' - ' . $area->range;
        });

        return view('ip.edit', compact('ip', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ip $ip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ip $ip)
    {
        request()->validate(Ip::$rules);

        $ip->update($request->all());

        return redirect()->route('ips.index')
            ->with('success', 'Ip updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ip = Ip::find($id)->delete();

        return redirect()->route('ips.index')
            ->with('success', 'Ip deleted successfully');
    }
}
