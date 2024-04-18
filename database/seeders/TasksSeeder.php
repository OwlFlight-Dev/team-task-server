<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project_ids = Project::all()->pluck('id')->toArray();

        $now = now();
        $tasks = [];
        $project_priorities = [];

        $nameLists = ['John Doe', 'Alice Smith', 'Bob Johnson', 'Emily Brown', 'Michael Wilson', 'Sarah Lee', 'David Jones', 'Olivia Davis', 'James Taylor', 'Emma Martinez'];

        $imageDirectory = public_path('images/');
        $images = File::files($imageDirectory); // Get an array of files in the directory
        
        // Shuffle the array to randomize the order
        shuffle($images);
        
        // Take the first 5 files
        $selectedImages = array_slice($images, 0, 5);
        
        $imageAttachments = [];
        
        foreach ($selectedImages as $image) {
            // Read the content of each image file and add it to the array
            $imageAttachments[] = file_get_contents($image);
        }
        
        foreach ($project_ids as $project_id) {
            $project_priorities[$project_id] = 0;
        }

        for ($i = 1; $i <= 10; $i++) {
            $project_id = $project_ids[array_rand($project_ids)];
            $project_priorities[$project_id]++;
           
            $tasks[] = [
                'project_id' => $project_id,
                'title' => "Task " . $project_priorities[$project_id],
                'description' => "Description for Task " . $project_priorities[$project_id],
                'image_attachment' =>  $imageAttachments[array_rand($imageAttachments)], // Randomly select one of the 5 images
                'author' => $nameLists[array_rand($nameLists)],
                'assignee' => $nameLists[array_rand($nameLists)],
                'priority' => $project_priorities[$project_id],

                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        Task::insert($tasks);
    }
}
