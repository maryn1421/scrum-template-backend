<?php


namespace App\Http\Controllers;


use App\Models\ScrumTable;
use Illuminate\Http\Request;

class ScrumTableController
{

    public function getTableByID($id)
    {
        $table = ScrumTable::where("id", "=", $id)->first();

        return json_encode($table);
    }

    public function saveNewTable(Request $request)
    {
        $data = (object)$request->json()->all();

        if ($data) {
            $table = new ScrumTable();

            $table->name = $request->name;
            $table->project_id = 1;
            $table->scrum_master_id = 1;


            $table->save();

        }


        return json_encode($data);
    }
}
