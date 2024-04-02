<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// INJECT THE MODEL
//use App\Car;
use App\Models\Car;

class CarController extends Controller
{
    // GET HOME PAGE.
    function homePageCars()
    {
        // CREATE AN OBJECT OF THE CAR MODEL CLASS.
        $car = new Car();

        // GET THE CARS FOR HOME PAGE.
        $carList = $car->homePageCars();

        // LOAD THE VIEW WITH DATA.
        return view('home', [
            'carList' => $carList
        ]);
    }

    // LISTING PAGE CARS WITH TOP FILTER.
    function ListingPageCarsWithTopFilter()
    {
        // CREATE AN OBJECT OF THE CAR MODEL CLASS.
        $car = new Car();

        // GET THE CARS.
        $carList = $car->ListingPageCars();

        // LOAD THE VIEW WITH DATA.
        return view('vehicles', [
            'carList' => $carList
        ]);
    }

    // LISTING PAGE CARS WITH LEFT SIDEBAR.
    function ListingPageCarsWithLeftSidebar()
    {
        // CREATE AN OBJECT OF THE CAR MODEL CLASS.
        $car = new Car();

        // GET THE CARS.
        $carList = $car->ListingPageCars();

        // LOAD THE VIEW WITH DATA.
        return view('vehicles-left-sidebar', [
            'carList' => $carList
        ]);
    }

    // LISTING PAGE CARS WITH RIGHT SIDEBAR.
    function ListingPageCarsWithRightSidebar()
    {
        // CREATE AN OBJECT OF THE CAR MODEL CLASS.
        $car = new Car();

        // GET THE CARS.
        $carList = $car->ListingPageCars();

        // LOAD THE VIEW WITH DATA.
        return view('vehicles-right-sidebar', [
            'carList' => $carList
        ]);
    }
}
