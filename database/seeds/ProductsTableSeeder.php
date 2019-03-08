<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Product::create([
        'name' => 'MacBook Pro',
        'slug' => 'macbook-pro',
        'details' => '15 inch, 1TB SSD, 32GB RAM',
        'price' => '249999',
        'description' => 'loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dol',
        ]);

        Product::create([
            'name' => 'laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 1TB SSD, 32GB RAM',
            'price' => '149999',
            'description' => 'loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dol',

            ]);

            Product::create([
                'name' => 'laptop 3',
                'slug' => 'laptop-3',
                'details' => '15 inch, 1TB SSD, 32GB RAM',
                'price' => '223999',
                'description' => 'loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dol',
    
                ]);

                Product::create([
                    'name' => 'laptop 4',
                    'slug' => 'laptop-4',
                    'details' => '15 inch, 1TB SSD, 32GB RAM',
                    'price' => '225999',
                    'description' => 'loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dol',
                    ]);

                    Product::create([
                        'name' => 'laptop 6',
                        'slug' => 'laptop-6',
                        'details' => '15 inch, 1TB SSD, 32GB RAM',
                        'price' => '249999',
                        'description' => 'loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dol',
            
                        ]);
    }
}
