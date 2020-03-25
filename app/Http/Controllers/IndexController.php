<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * トップページController
 *
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * トップページ
     *
     * @return Factory|View
     */
    public function index()
    {
        return view('welcome');
    }
}
