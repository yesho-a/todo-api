<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TodoApiController extends Controller
{
    public function getAllTasks() {
      return Task::all();

      }
    
      public function createTask(Request $request) {

        $task = new Task;
        // $task->task = $request->task;
        $task->task = $request->input('task');
        $task->completed = $request->input('completed');
        $task->save();
  
        return response()->json([
        "message" => "student record created"], 201);
      }
  
      public function getTask($id) {
        return Task::find($id);

      }
  
      public function updateTask(Request $request, $id) {
        $task = Task::findOrFail($id);
        $task->update($request->all());
    
        return $task;
      }
  
      public function deleteTask ($id) {
        Task::find($id)->delete();

        return 204;      }
    
    
    
    
    
    
    
    }
