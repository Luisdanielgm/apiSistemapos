<?php

namespace App\Http\Controllers;

use App\Models\VentaInventario;
use Illuminate\Http\Request;

class VentaInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ["Venta Inventarios"];
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
     * @param  \App\Models\VentaInventario  $ventaInventario
     * @return \Illuminate\Http\Response
     */
    public function show(VentaInventario $ventaInventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VentaInventario  $ventaInventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VentaInventario $ventaInventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VentaInventario  $ventaInventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(VentaInventario $ventaInventario)
    {
        //
    }
}
