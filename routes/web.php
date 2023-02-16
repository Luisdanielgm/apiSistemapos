<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::apiResource('/marcas', 'MarcaController');
    Route::apiResource('/medidas', 'MedidaController');
    Route::apiResource('/categorias', 'CategoriaController');
    Route::apiResource('/articulos', 'ArticuloController');
    Route::apiResource('/monedaImages', 'MonedaImageController');
    Route::apiResource('/cajaCompras', 'CajaCompraController');
    Route::apiResource('/series', 'SerieController');
    Route::apiResource('/compraInventarios', 'CompraInventarioController');
    Route::apiResource('/cajaMovimientos', 'CajaMovimientoController');
    Route::get('/inventarios/kardex/{articulo}', 'InventarioController@kardex');
    Route::apiResource('/inventarios', 'InventarioController');
    Route::apiResource('/metodos', 'MetodoController');
    Route::apiResource('/sucursals', 'SucursalController');
    Route::apiResource('/comprobantes', 'ComprobanteController');
    Route::apiResource('/cajas', 'CajaController');
    Route::apiResource('/monedas', 'MonedaController');
    Route::apiResource('/ventas', 'VentaController');
    Route::apiResource('/ventaInventarios', 'VentaInventarioController');
    Route::apiResource('/images', 'ImageController');
    Route::apiResource('/cajaVentas', 'CajaVentaController');
    Route::apiResource('/documentos', 'DocumentoController');
    Route::apiResource('/compras', 'CompraController');
});

Route::get('/', function () {
    return view('welcome');
});
