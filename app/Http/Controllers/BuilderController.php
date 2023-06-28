<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Builder\Cars\CarBuilder;
use App\Models\Builder\Cars\Director;
use App\Models\Builder\Cars\Parts\Car;
use App\Models\Builder\Products\ProductBuilder;
use App\Models\Builder\Users\UserBuilder;
use Illuminate\Http\Request;

class BuilderController extends Controller
{
    public function createProduct()
    {
        $builder = new ProductBuilder();

        $builder->setName("Camiseta personalizada");
        $builder->setDescription("Esta camiseta está diseñada a tu gusto");
        $builder->setPrice(80000);

        $product = $builder->getProduct();

        print_r($product);
    }

    public function createUser()
    {
        $builder = new UserBuilder();

        $builder->setName("Leonardo");
        $builder->setPassword("123456789");
        $builder->setEmail("leoordev@gmail.com");

        $user = $builder->getUser();

        print_r($user);
    }

    public function createCar()
    {
        $builder = new CarBuilder();

        $builder->setMake("Colombia");
        $builder->setModel("2023");
        $builder->setYear("2023");
        $builder->setColor("White");

        $car = $builder->build();

        print_r($car);
    }
}
