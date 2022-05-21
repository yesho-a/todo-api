<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoApiController extends Controller
{
    public function getAllTasks() {
        return response('Hello welcome');
      }
    
      public function createTask(Request $request) {
        // logic to create a student record goes here

        $task = new Task;
        // $task->task = $request->task;
        $task->task = $request->task;
        $task->completed = false;
        $task->save();
        
        return response()->json([
        "message" => "student record created"], 201);
      }
  
      public function getTask($id) {
        // logic to get a student record goes here
      }
  
      public function updateTask(Request $request, $id) {
        // logic to update a student record goes here
      }
  
      public function deleteTask ($id) {
        // logic to delete a student record goes here
      }
    
    
    
    
    
    
    
    }
