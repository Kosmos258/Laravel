<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getNews(int $id = null): array
    {
        $news = [];
        if ($id === null) {
            for ($i=0; $i<10; $i++) {
                $news[] = [
                    'id' => ($i === 0) ? ++$i : $i,
                    'title' => fake()->jobTitle(),
                    'image' => fake()->imageUrl(),
                    'author' => fake()->userName(),
                    'status' => 'ACTIVE',
                    'description' => fake()->text(100),
                    'created' => now()->format('d-m-Y H:i'),
                ];
            }

            return $news;
        }

        return [
            'id' => $id,
            'title' => fake()->title(),
            'image' => fake()->imageUrl(),
            'author' => fake()->userName(),
            'status' => 'ACTIVE',
            'description' => fake()->text(100),
            'created' => now(),
        ];
    }
}
