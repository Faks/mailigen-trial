<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class Controller
 *
 * @category PHP
 * @package  App\Http\Controllers
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://laravel.com/
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
