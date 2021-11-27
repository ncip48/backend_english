<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('irregular_model', 'irregular');
        $this->load->model('regular_model', 'regular');
    }

    private function format_respond($success, $data = null, $msg, $error = null)
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

    public function regular_get()
    {
        $id = $this->get('search');
        $irregular = $this->regular->get_regular();
        $this->format_respond(true, $irregular, 'regular verb successfully loaded');
    }

    public function upload_irregular_post()
    {
        $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
        $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
        $config['file_name']        = 'doc' . time(); //rename file yang diupload
        $this->load->library('upload', $config);
        $cekarr = $this->db->get('irregular')->result_array();
        $arr = array_column($cekarr, 'verb_one');

        if ($this->upload->do_upload('excel')) {
            $file   = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
            $reader->open('./temp_doc/' . $file['file_name']); //open file xlsx yang baru saja diunggah    
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                $save   = array();
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $cells = $row->getCells();
                        $sinc = in_array($cells[0], $arr);
                        if (!$sinc) {
                            $data = array(
                                'verb_one' => $cells[0],
                                'verb_two' => $cells[1],
                                'verb_three' => $cells[2],
                                'verb_ing' => $cells[3],
                                'translate' => $cells[4],
                                'hit' => '0'
                            );
                            array_push($save, $data);
                        }
                    }
                    $numRow++;
                }
                $this->irregular->insert_irregular($save);
                $reader->close();
                unlink('./temp_doc/' . $file['file_name']);

                $this->format_respond(true, null, 'success uploading files');
            }
        } else {
            $this->format_respond(false, null, 'error while uploading files', $this->upload->display_errors());
        }
    }

    public function upload_regular_post()
    {
        $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
        $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
        $config['file_name']        = 'doc' . time(); //rename file yang diupload
        $this->load->library('upload', $config);
        $cekarr = $this->db->get('regular')->result_array();
        $arr = array_column($cekarr, 'verb_one');

        if ($this->upload->do_upload('excel')) {
            $file   = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
            $reader->open('./temp_doc/' . $file['file_name']); //open file xlsx yang baru saja diunggah    
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                $save   = array();
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $cells = $row->getCells();
                        $sinc = in_array($cells[0], $arr);
                        if (!$sinc) {
                            $data = array(
                                'verb_one' => $cells[4],
                                'verb_two' => $cells[5],
                                'verb_three' => $cells[6],
                                'translate' => $cells[7],
                                'hit' => '0'
                            );
                            array_push($save, $data);
                        }
                    }
                    $numRow++;
                }
                $this->regular->insert_regular($save);
                $reader->close();
                unlink('./temp_doc/' . $file['file_name']);

                $this->format_respond(true, null, 'success uploading files');
            }
        } else {
            $this->format_respond(false, null, 'error while uploading files', $this->upload->display_errors());
        }
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
