<?php

namespace App\Http\Controllers;

use App\Entities\CreateTaskEntity;
use App\Entities\TaskEntity;
use App\Entities\UpdateTaskEntity;
use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Requests\Task\DeleteTaskRequest;
use App\Http\Requests\Task\ListTasksRequest;
use App\Http\Requests\Task\ReorderTasksRequest;
use App\Http\Requests\Task\UpdateTaskRequest;
use App\Http\Requests\Task\UpdateTaskStatus;
use App\Services\ProjectService;
use App\Services\TaskService;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    /**
     * Endpoint to create a new task
     * @param CreateTaskRequest $request
     * @return JsonResponse
     */
    public function create(CreateTaskRequest $request): JsonResponse
    {
        // get input from request
        $title = $request->input("title");
        $author = $request->input("author");

        $createTaskEntity = new CreateTaskEntity($title, $author);
        $task = TaskService::create($createTaskEntity);

        return response()->json([
            'success' => true,
            'tasks' => $task,
            'message' => "Tasks created successfully.",
        ]); // 200
    }
    /**
     * Endpoint to list all the tasks
     * @param ListTasksRequest $request
     * @return JsonResponse
     */
    public function list(ListTasksRequest $request): JsonResponse
    {
        $tasks = TaskService::list();

        return response()->json([
            'success' => true,
            'tasks' => $tasks,
            'message' => "Tasks retrieved successfully.",
        ]); // 200
    }

    /**
     * Endpoint to update task details
     * @param UpdateTaskRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function updateTask(UpdateTaskRequest $request, int $id): JsonResponse
    {
        // Get all input data from the request
        $requestInput = $request->all();

        // Create an instance of the UpdateTaskEntity
        $updateTaskEntity = new UpdateTaskEntity();

        // Set the properties of the entity using the request data
        foreach ($requestInput as $property => $value) {
            // Check if the property exists in the entity before setting its value
            if (property_exists($updateTaskEntity, $property)) {
                $updateTaskEntity->{$property} = $value;
            }
        }

        TaskService::updateTask($id, $updateTaskEntity);

        return response()->json([
            'success' => true,
            'message' => "Task updated successfully.",
        ], 201);
    }
    /**
     * Endpoint to update task status
     * @param UpdateTaskStatus $request
     * @param int $id
     * @return JsonResponse
     */
    public function updateTaskStatus(UpdateTaskStatus $request, int $id): JsonResponse
    {
        // get input from request
        $status = $request->input("status");

        TaskService::updateTaskStatus($id, $status);

        return response()->json([
            'success' => true,
            'message' => "Task Status updated successfully.",
        ], 201);
    }

    /**
     * Endpoint to delete a task
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        TaskService::delete($id);

        return response()->json([
            'success' => true,
            'message' => "Task deleted successfully.",
        ], 201);
    }
}