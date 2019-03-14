<?php
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 ********************************************************
 * Date: 2019.03.14.
 * Time: 20:59
 */

namespace App\Http\Controllers;

use function view;

class NewsletterController extends Controller
{
 
    public function index()
    {
        return view('dashboard');
    }
    
    
    public function create()
    {
        return view('partial.form');
    }
}