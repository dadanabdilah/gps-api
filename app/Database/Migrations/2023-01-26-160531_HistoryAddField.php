<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistoryAddField extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ],
        ];
        $this->forge->addColumn('histories', $fields);
    }

    public function down()
    {
        //
    }
}
