<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Users extends BaseController
{
    public function register()
    {
        if ($this->request->isAJAX()) {
            $email = $this->request->getPost('email');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $name = $this->request->getPost('name');

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $usersModel = new UsersModel();

            $data = [
                'email' => $email
            ];

            $checkUsers = $usersModel->checkUsers($data);
            if ($checkUsers) {
                return $this->response->setJSON(['success' => false, 'message' => 'email telah terdaftar !!']);
            }

            $data = [
                'username' => $username
            ];

            $checkUsers = $usersModel->checkUsers($data);
            if ($checkUsers) {
                return $this->response->setJSON(['success' => false, 'message' => 'username telah terdaftar !!']);
            }


            $data = [
                'email' => $email,
                'username' => $username,
                'nama' => $name,
                'password' => $hashedPassword,
                'id_role' => 2,
                'is_active' => 0,
            ];
            $insertedId = $usersModel->insertUser($data);

            if ($insertedId) {
                $this->sendRegistrationEmail($email, $name, $insertedId, 'register');
                return $this->response->setJSON(['success' => true, 'inserted_id' => $insertedId]);
            } else {
                return $this->response->setJSON(['success' => false, 'error' => 'Failed to insert user']);
            }
        } else {
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
    }

    public function resendpassword($id)
    {
        return view('login/resetpass', ['id' => $id]);
    }

    public function resetpassword()
    {
        if ($this->request->isAJAX()) {
            $email = $this->request->getPost('email');
            $usersModel = new UsersModel();

            $data = [
                'email' => $email
            ];

            $checkUsers = $usersModel->checkUsers($data);
            // var_dump($checkUsers);
            if ($checkUsers) {
                $this->sendRegistrationEmail($email, $checkUsers->nama,  $checkUsers->id_users, 'link_password');
                return $this->response->setJSON(['success' => true, 'message' => 'resend password is good']);
            } else {
                return $this->response->setStatusCode(400)->setJSON(['success' => false, 'message' => 'email not found']);
            }
        }
    }

    public function updatepassword()
    {
        if ($this->request->isAJAX()) {
            $password = $this->request->getPost('password');
            $id = $this->request->getPost('user_id');
            $usersModel = new UsersModel();

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $updateData = [
                'password' => $hashedPassword
            ];

            // Update the user's password
            $updateResult = $usersModel->updateUser($id, $updateData);

            if ($updateResult) {
                return $this->response->setJSON(['success' => true, 'message' => 'Password updated']);
            } else {
                return $this->response->setStatusCode(400)->setJSON(['success' => false, 'message' => 'Password update failed']);
            }
        }
    }

    public function isactived($id)
    {
        $model = new UsersModel();
        if ($model->isUserActive($id)) {
            $updateData = [
                'is_active' => 1
            ];
            $model->updateUser($id, $updateData);
            return view('register/registration_success');
        } else {
            return view('register/registration_unsuccess');
        }
    }

    private function sendRegistrationEmail($recipientEmail, $name, $id, $type)
    {
        $emailConfig = [
            'protocol' => 'smtp',
            'SMTPHost' => 'smtp.gmail.com',
            'SMTPPort' => 465,
            'SMTPUser' => 'raytesprometheus@gmail.com', // Replace with your Gmail email
            'SMTPPass' => 'vddpxlyvbilwtpbu', // Replace with your Gmail password
            'SMTPCrypto' => 'ssl',
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $emailLib = \Config\Services::email();
        $emailLib->initialize($emailConfig);

        // Set email parameters
        $emailLib->setFrom('registerdata@siweb.com', 'Ray');
        $emailLib->setTo($recipientEmail);

        // Generate the activation link


        switch ($type) {
            case 'register':
                $emailLib->setSubject('Registration Success');
                $activationLink = base_url("actived/$id");
                $emailLib->setMessage("
                        <p>Hello $name,</p>
                        <p>Your registration was successful. Welcome to our website!</p>
                        <p><a href=\"$activationLink\">Activate Your Account</a></p>
                    ");
                break;
            case 'link_password':
                $emailLib->setSubject('Reset Password Success');
                $activationLinkPassword = base_url("reset-password/$id");
                $emailLib->setMessage("
                        <p>Hello $name,</p>
                        <p>hi, this link for the password verify!</p>
                        <p><a href=\"$activationLinkPassword\">Change Password</a></p>
                    ");
                break;
            default:
                break;
        }

        // $emailLib->setMessage("
        //     <p>Hello $name,</p>
        //     <p>Your registration was successful. Welcome to our website!</p>
        //     <p><a href=\"$activationLink\">Activate Your Account</a></p>
        // ");

        // Send the email
        if ($emailLib->send()) {
            // echo 'Email sent successfully.';
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'Failed to insert user']);
        }
    }

    public function login()
    {

        if ($this->request->isAJAX()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $memberModel = new UsersModel();

            $data = [
                'email' => $email
            ];

            $user = $memberModel->checkUsers($data);

            // var_dump($user,"dsadsa");

            if (!$user) {
                return $this->response->setJSON(['success' => false, 'error' => 'user belum terdaftar']);
            }


            if ($user && isset($user->password) && password_verify($password, $user->password)) {
                return $this->response->setJSON(['success' => true, 'user_id' => $user->id_users]);
            } else {
                // Invalid credentials
                return $this->response->setJSON(['success' => false, 'error' => 'salah password']);
            }
        } else {
            // Method not allowed for non-AJAX requests
            return $this->response->setStatusCode(405)->setJSON(['error' => 'Method not allowed']);
        }
    }

    public function forgot(): string
    {
        return view('login/forgot');
    }
}
