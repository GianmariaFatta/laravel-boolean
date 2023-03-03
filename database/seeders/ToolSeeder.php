<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = config('tools');

        foreach ($tools as $tool) {
            $new_tool = new Tool();
            $new_tool->fill($tool);
            $new_tool->save();
        }
    }
}
