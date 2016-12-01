<?php

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        $this->factoryCategory();

        return $app;
    }

    public function setUp()
    {
        $this->factoryCategory();
        $this->factoryInventory();
    }

    public function factoryCategory()
    {
        $category = factory(App\Category::class)->create([
            'id'   => 1,
            'name' => 'Food',
        ]);
    }

    public function factoryInventory()
    {
        $category = factory(App\Inventory::class)->create([
            'category_id'   => 1,
            'product_name'  => 'rice',
            'quantity'      => '40',
            'amount'        => '2000'
        ]);
    }
}
