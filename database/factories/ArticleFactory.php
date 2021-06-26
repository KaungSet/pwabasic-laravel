<?php



namespace Database\Factories;

use App\Models\Article;
use Faker\Generator as Faker;


// protected $model = \App\Models\Article::class;

$factory->define(Article::class,function (Faker $faker){
    return[
        'title'=>$faker->sentence,
        'body'=>$faker->paragraph,
        'category-id'=>rand(1,5),
    ];
});

// protected $model = \App\Models\Article::class;

// class ArticleFactory extends Factory
// {
//     /**
//      * The name of the factory's corresponding model.
//      *
//      * @var string
//      */
//     protected $model = \App\Models\Article::class;

//     *
//      * Define the model's default state.
//      *
//      * @return array
     
//     public function definition()
//     {
//         return [
//            'title'=>this->$faker->sentence,
//             'body'=>this->$faker->paragraph,
//             'category-id'=>rand(1,5),
//         ];
//     }
// }
