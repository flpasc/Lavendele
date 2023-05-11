<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Posuere imperdiet volutpat blandit sollicitudin neque class et mus sem facilisis placerat lacus, orci phasellus nam malesuada metus hendrerit cursus suscipit venenatis turpis dui hac, etiam amet varius faucibus aliquam maximus vivamus quam nostra augue curae.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Posuere imperdiet volutpat blandit sollicitudin neque class et mus sem facilisis placerat lacus, orci phasellus nam malesuada metus hendrerit cursus suscipit venenatis turpis dui hac, etiam amet varius faucibus aliquam maximus vivamus quam nostra augue curae.'
            ]
        ];
    }


    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
