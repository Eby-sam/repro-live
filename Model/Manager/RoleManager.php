<?php


namespace App\Model\Entity;
use App\Model\DB;
use AbstractEntity;

class RoleManager {

    private UserRoleManager $userRoleManager;

    public function __construct() {
        $this->userRoleManager = new UserRoleManager();
    }
    public function getRole_name(): array {
        $roles = [];
        $query = DB::getPDO()->query("SELECT * FROM role");
        if($query) {
            $roles = new Role();
            foreach ($query->fetchAll() as $roleData) {
                $roles[] = (new Role)
                    ->setId($roleData['id'])
                    ->setRoleName($value['role_name'])
                    ->setRoleName($roleData['role_name'])
                    ->setUser($this->userRoleManager->getUserById($value['id']));
            }
        }
        return $roles;
    }
}