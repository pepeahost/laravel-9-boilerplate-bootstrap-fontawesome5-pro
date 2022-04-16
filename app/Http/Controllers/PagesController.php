<?php

namespace App\Http\Controllers;
use romanzipp\Seo\Facades\Seo;
use romanzipp\Seo\Services\SeoService;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        seo()->title('Velmax Laravel Boilerplate 1.0');
        seo()->description('Laravel boilerplate with seo & scss');	
        seo()->meta('author', 'Velmax Technologies');
        seo()->csrfToken();
        return view('pages.index');
    }
}
