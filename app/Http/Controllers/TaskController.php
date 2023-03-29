<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function all(){
        $tasks = Task::all();
        return view("tasks.all",compact("tasks"));
    }
    
    public function add(){
        $users = User::where("role",0)->get();
        return view("tasks.add",compact("users"));
    }
    
    public function save(Request $request){
        $getusers = $request->users;
        $users = array();
        $email = array();
        for($i=0; $i<count($getusers); $i++){
            $u = User::where("id", $getusers[$i])->get();
            $u = $u[0];
            array_push($users, $u->name);
            array_push($email, $u->email);
        }
        $task = new Task();
        $task->users = implode(" , ",$users);
        $task->email = implode(" , ",$email);
        $task->details = $request->details;
        $task->status = $request->status;
        $task->save();
        return redirect()->route("tasks.all");
    }
}
