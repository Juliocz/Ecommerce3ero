<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        '/super_admin/api/register_user',
        '/super_admin/api/mod_user',
        '/super_admin/api/delete_user',
        '/user/upload_file_user',
        '/super_admin/api/registrarCategoria',
        '/super_admin/api/modificarCategoria',
        '/super_admin/api/eliminarCategoria'
    ];
}
