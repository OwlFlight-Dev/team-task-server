<?php

namespace App\Services;

use App\Definitions\TaskStatus;
use App\Entities\CreateTaskEntity;
use App\Entities\TaskEntity;
use App\Entities\UpdateTaskEntity;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskService
{
    /**
     * Creates a new task based on the provided CreateTaskEntity
     * @param CreateTaskEntity $createTaskEntity
     * @return Task
     */
    public static function create(CreateTaskEntity $createTaskEntity): Task
    {
        // create new task
        $task = new Task();
        $task->title = $createTaskEntity->title;
        $task->author = $createTaskEntity->author;
        // Set other properties dynamically if given
        foreach ($createTaskEntity as $property => $value) {
            if ($value !== null && property_exists($task, $property)) {
                $task->{$property} = $value;
            }
        }
        // save task
        $task->save();

        // return created task
        return $task;
    }

    /**
     * List all the tasks
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function list(): \Illuminate\Database\Eloquent\Collection
    {
        return Task::all();
    }

    /**
     * Update task based on provided UpdateTaskEntity
     * @param int $id
     * @param UpdateTaskEntity $updateTaskEntity
     * @return Task
     */
    public static function updateTask(int $id, UpdateTaskEntity $updateTaskEntity): Task
    {
        $task = Task::findOrFail($id);

        // Update properties dynamically if given
        foreach ($updateTaskEntity as $property => $value) {
            if ($value !== null) {
                $task->{$property} = $value;
            }
        }
        if ($task->isDirty()) {
            // save task if any field is changed
            $task->save();
        }

        // return task
        return $task;
    }

    /**
     * Update task status 
     * @param int $id
     * @param string $status
     * @return Task
     */
    public static function updateTaskStatus(int $id, string $status): Task
    {
        $task = Task::findOrFail($id);

        // update status
        $task->status = $status;

        // save status if there is changes
        if($task->isDirty()) 
        {
            $task->save();
        }
        // return task
        return $task;
    }

    /**
     * Delete a task
     * @param int $id
     * @return bool
     */
    public static function delete(int $id)
    {
        // delete and return bool if successfully deleted
        return Task::findOrFail($id)->delete();
    }


}