<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('Register');
    }


    public function store() {

        $validation = \Config\Services::validation();
        $validator = [
            'first_name'           => 'required|min_length[2]|max_length[50]',
            'middle_name'          => 'permit_empty|min_length[1]|max_length[50]',
            'last_name'            => 'required|min_length[2]|max_length[50]',
            'username'             => 'required|is_unique[users.username]',
            'password'             => 'required|min_length[6]',
            'confirm_password'     => 'matches[password]'
        ];
        
        
        if (!$this->validate($validator)) {
            return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
        }
        

        $userModel = new UserModel();
        $userData = [
            'first_name'      => $this->request->getPost('first_name'),
            'middle_name'     => $this->request->getPost('middle_name'),
            'last_name'       => $this->request->getPost('last_name'),
            'username'           => $this->request->getPost('username'),
            'password'        => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];
    
        if ($userModel->save($userData)) {
            return redirect()->to('login')->with('success', 'User Created Successfully');
        } else {
            return redirect()->to('/register')->with('error', 'Failed to create user.');
        }
       
    }

    public function loginForm() {
        return view('login');
    }

    public function authenticate() {

        $session = session();
        $userModel = new UserModel();


        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        if (!$this->validate([
            'username'    => 'required',
            'password' => 'required|min_length[6]'
        ])) {
            return redirect()->to('/login')->withInput()->with('errors', $this->validator->getErrors());
        }

   
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                
                $sessionData = [
                    'user_id'   => $user['id'],
                    'username'     => $user['username'],
                    'logged_in' => true
                ];
                $session->set($sessionData);

                return redirect()->to('/dashboard')->with('success', 'Login Successful');
            } else {
                return redirect()->to('/login')->with('error', 'Incorrect Password');
            }
        } else {
            return redirect()->to('/login')->with('error', 'username Not Found');
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logged Out Successfully');
    }
}   
