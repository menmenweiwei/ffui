<?php

/**
 * User 模型
 */
class UserModel extends BaseModel{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_one($email)
    {
        return $this->db->table('user')->where("email = '{$email}'")->fRow();
    }

    public function get_one_test($email)
    {
        echo $email;
        //var_dump($this->db->query("select password_hash from `user` where `email` = '{$email}'"));
        // $tOpt['where'] = empty($tOpt['where'])? '': ' WHERE ' . $tOpt['where'];
        // $tOpt['order'] = empty($tOpt['order'])? '': ' ORDER BY ' . $tOpt['order'];
        // $tSql = "SELECT {$tOpt['field']} FROM `{$tOpt['table']}` {$tOpt['where']} {$tOpt['order']}  LIMIT 0,1";
        var_dump($this->db->table('user')->where("email = '{$email}'")->fRow());
    }
}
