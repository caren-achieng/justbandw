<?php

namespace App\Controllers;
use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('login', $data);
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'firstname' => 'required|min_length[3]|max_length[20]',
            'lastname' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'confirm-pass' => 'matches[password]',
            'gender' => 'required'
        ];

        if ($this->validate($rules))
        {
            //store user in DB
            $model = new UserModel();

            $newData = [
                'email'    => $this->request->getVar('email'),
                'firstname'     => $this->request->getVar('firstname'),
                'lastname'    => $this->request->getVar('lastname'),
                'password' => $this->request->getVar('password'),
                'gender'    => $this->request->getVar('gender')
            ];

            $model->save($newData);
            $session = session();
            $session->setFlashdata('success', 'Successful Registration!');
            return redirect()->to('/login');
        }
        else
        {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}

