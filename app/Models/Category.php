<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//phan trang
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','status'];
    public static function getAll()
{
    return [
        ['id' => 1, 'name' => 'Áo nam', 'status' => 1],
        ['id' => 2, 'name' => 'Áo nữ', 'status' => 0],
        ['id' => 3, 'name' => 'Quần bò', 'status' => 0],
        ['id' => 4, 'name' => 'Túi xách', 'status' => 1],
        ['id' => 5, 'name' => 'Ví da','status' => 1],
        ['id' => 6, 'name' => 'Giày dép', 'status' => 1],
        ['id' => 7, 'name' => 'Dây lưng','status' => 1],
        ['id' => 8, 'name' => 'Đồng hồ','status' => 1]
        ];
        $resault = [];
        foreach ($data as $item) {
            $resault[] = (new static)-> filla($item);
        }
        return collect($resault);
    }

    //phan trang
    public static function paginate($perPais = 5, $page = null, $count = []){
         $item = (new static)->getAll(); //lay dl methods getAll
         $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
         $items = $item instanceof Collection ? $item : Collection::make($item);
         return new LengthAwarePaginator($items->forPage($page, $perPais), $items->count(), $perPais, $page, $count); 
    }

}
