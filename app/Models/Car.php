<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function homePageCars() {
        $collection = DB::table('cars')->orderBy('year', 'ASC')->limit(20)->get();
        return $collection->toArray();
    }

    public function ListingPageCars() {
        $collection = DB::table('cars')->orderBy('year', 'ASC')->limit(20)->get();
        return $collection->toArray();
    }
}
