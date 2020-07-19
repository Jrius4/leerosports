<?php

use App\Career;
use App\CareerCategory;
use App\ClientTestimony;
use App\Comment;
use App\FieldIndustry;
use Illuminate\Database\Seeder;

class controllerValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $careCat = new CareerCategory();
        $care = new Career();
        $clieTestimony = new ClientTestimony();
        $comment = new Comment();
        $fielInd = new FieldIndustry();

        $careCat->create([
            'title'=>'coaching',
            'slug'=>str_slug('coaching'),
            'description'=>'training new coaches',
        ]);
        $careCat->create([
            'title'=>'branding',
            'slug'=>str_slug('branding'),
            'description'=>'branding',
        ]);
        $careCat->create([
            'title'=>'ungrouped',
            'slug'=>str_slug('ungrouped'),
            'description'=>'ungrouped',
        ]);

        $careCat->find(1)->careers()->create([
            'title'=>'Coaching',
            'slug'=>str_slug('Coaching'),
            'excerpt'=>'excerpt',
            'body'=>'body',
        ]);
    }
}
