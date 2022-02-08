<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function update()
    {
        $result=Category::where('id',1)->update([
            'id'=>10
        ]);

        if($result)
        {
            dump('up');
            $relation=User::where('catid',1)->update([
                'catid'=>10
            ]);

            return $relation ? back() : dd('relation fail');
        }
        dd('güncellenmedi');
    }
}
