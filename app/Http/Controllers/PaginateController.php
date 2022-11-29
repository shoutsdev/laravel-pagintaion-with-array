<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class PaginateController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $myArray = [
            ['id'   =>  1,    'title' =>  'Laravel'],
            ['id'   =>  2,    'title' =>  'Symfony'],
            ['id'   =>  3,    'title' =>  'CodeIgniter'],
            ['id'   =>  4,    'title' =>  'CakePHP'],
            ['id'   =>  5,    'title' =>  'Yii'],
            ['id'   =>  6,    'title' =>  'Zend'],
            ['id'   =>  7,    'title' =>  'Slim'],
            ['id'   =>  8,    'title' =>  'Phalcon'],
            ['id'   =>  9,    'title' =>  'FuelPHP'],
            ['id'   =>  10,   'title' =>  'Kohana'],
            ['id'   =>  11,   'title' =>  'Fat-Free Framework']
        ];

        $stacks = $this->paginate($myArray);

        return view('welcome', compact('stacks'));
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
