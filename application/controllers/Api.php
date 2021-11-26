<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('irregular_model', 'irregular');
    }

    public function format_respond($success, $data = null, $msg, $error = null)
    {
        $error = [
            'success' => $success,
            'msg' => $msg,
            'error' => $error,
            'data' => $data
        ];
        return $this->response($error, 200);
    }

    public function irregular_get()
    {
        $id = $this->get('search');
        $irregular = $this->irregular->get_irregular();
        $this->format_respond(true, $irregular, 'irregular verb successfully loaded');
    }

    public function upload_irrengular_post()
    {
        $irregular = $this->irregular->get_irregular();
        $this->format_respond(true, $irregular, 'irregular verb successfully loaded');
    }



    public function users_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $id = $this->get('id');

        $irregular = $this->irregular->get_irregular();

        if ($id === null) {
            // Check if the users data store contains users
            if ($users) {
                // Set the response and exit
                $this->format_respond(true, $irregular);
            } else {
                // Set the response and exit
                $this->response([
                    'status' => false,
                    'message' => 'No users were found'
                ], 404);
            }
        } else {
            if (array_key_exists($id, $users)) {
                $this->response($users[$id], 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No such user found'
                ], 404);
            }
        }
    }
}
