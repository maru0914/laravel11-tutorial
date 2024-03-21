<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'ディレクター',
                'salary'=> '750万円'
            ],
            [
                'id' => 2,
                'title' => 'プログラマー',
                'salary' => '150万円'
            ],
            [
                'id' => 3,
                'title' => '教師',
                'salary' => '600万円'
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
