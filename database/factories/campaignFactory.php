<?php

namespace Database\Factories;

use App\Models\Campaign;
use Illuminate\Database\Eloquent\Factories\Factory;

class campaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Campaign::class;

    public function definition()
    {
        return [
            'campaign_name' => $this->faker->name(),
            'user_id' =>  1,
            'date_from' =>  now(),
            'date_to' => now(),
            'total_budget' =>'450000.15',
            'daily_budget' => '35000.23',
            'creative_uploads_path' => 'testing.jpg'
        ];
    }
}
