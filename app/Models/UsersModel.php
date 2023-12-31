<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_users';

    public function insertUser($data)
    {
        $this->db->table('users')->insert($data);
        return $this->db->insertID();
    }

    public function checkUsers($data)
    {
        $conditions = [];

        foreach ($data as $key => $value) {
            $conditions[$key] = $value;
        }

        $existingUser = $this->db->table('users')
            ->where($conditions)
            ->get()
            ->getRow();

        return $existingUser;
    }

    public function isUserActive($id)
    {
        $user = $this->find($id);

        if ($user && $user['is_active'] == 0) {
            return true;
        }

        return false;
    }

    public function joinListUsersWithRole()
    {
        $builder = $this->db->table('users');
        $builder->select('users.id_users, users.nama, users.email, users.username,users.is_active, role.nama_role');
        $builder->join('role', 'users.id_role = role.id_role');

        $query = $builder->get();

        return $query->getResult();
    }

    public function updateUser($id, $data)
    {
        if (!$this->find($id)) {
            return false; // User not found
        }

        $this->db->table('users')
            ->where('id_users', $id)
            ->update($data);

        return true; // User updated successfully
    }
}
