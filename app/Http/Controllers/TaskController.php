<?php


namespace App\Http\Controllers;


use App\Models\Task;

class TaskController extends Controller
{

    public function getNewTasksByTableId($id) {

        $tasks = Task::where("table_id", "=", $id)->where("column_name", "=", "new")->get();


        return json_encode($tasks);


    }
    public function getInProgressByTableId($id) {

        $tasks = Task::where("table_id", "=", $id)->where("column_name", "=", "in progress")->get();


        return json_encode($tasks);
    }
    public function getFinishedByTableId($id) {

        $tasks = Task::where("table_id", "=", $id)->where("column_name", "=", "finished")->get();


        return json_encode($tasks);
    }


}
