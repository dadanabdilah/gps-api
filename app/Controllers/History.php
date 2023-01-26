<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class History extends ResourceController
{
    protected $modelName = 'App\Models\History';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'title' => 'History',
            'sub-title' => 'History',
        ];
        return view('history/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        // cek token 
        $request = \Config\Services::request();

        // ambil token dari tabel token di db
        $token = "qwertyuiop";

        if( $request->header('Token')->getValue() == $token) {

            if($this->model->save([
                'user_id' => $this->request->getPost('user_id'), 
                'latitude' => $this->request->getPost('latitude'), 
                'longitude' => $this->request->getPost('longitude'), 
            ]) ){
                echo json_encode([
                    'status' => true,
                    'message' => 'Data berhasil disimpan'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Data gagal disimpan'
                ]);
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Your token is fail'
            ]);
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
