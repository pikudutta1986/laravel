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

    public function ListingPage4ColumnCars() {
        $collection = DB::table('cars')->orderBy('year', 'ASC')->limit(20)->get();
        return $collection->toArray();
    }

    public function ListingPage3ColumnCars() {
        $collection = DB::table('cars')->orderBy('year', 'ASC')->limit(21)->get();
        return $collection->toArray();
    }
}
