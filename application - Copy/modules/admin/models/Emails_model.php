<?php

class Emails_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function emailsCount()
    {
        return $this->db->count_all_results('users_public');
    }

    public function getSuscribedEmails($limit, $page)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->select('*')->get('users_public', $limit, $page);
        return $query;
    }

    public function deleteEmail($id)
    {
        if (!$this->db->where('id', $id)->delete('users_public')) {
            log_message('error', print_r($this->db->error(), true));
            show_error(lang('database_error'));
        }
    }
    public function editUser($post)
    {
        if ($post['edit'] > 0) {
            if (trim($post['password']) == '') {
                unset($post['password']);
            } else {
                $post['password'] = md5($post['password']);
            }
            $this->db->where('id', $post['edit']);
            unset($post['id'], $post['edit']);
            if (!$this->db->update('users_public', $post)) {
                log_message('error', print_r($this->db->error(), true));
                show_error(lang('database_error'));
            }
        } 
        
    }
    public function getUsers($user = null)
    {
        if ($user != null && is_numeric($user)) {
            $this->db->where('id', $user);
        } else if ($user != null && is_string($user)) {
            $this->db->where('name', $user);
        }
        $query = $this->db->get('users_public');
        if ($user != null) {
            return $query->row_array();
        } else {
            return $query;
        }
    }
}
