<?php

class Orders_model_p extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    public function ordersCount($onlyNew = false)
    {
        if ($onlyNew == true) {
            $this->db->where('status', 0);
        }
        return $this->db->count_all_results('orders_clients_by_p');
    }

    public function orders($limit, $page, $order_by)
    {
        if ($order_by != null) {
            $this->db->order_by($order_by, 'DESC');
        } else {
            $this->db->order_by('id', 'DESC');
        }
        $this->db->select('id,full_name,'
                . 'phone , processed, sub_time, '
                . 'address, status, image');
       

        $result = $this->db->get('orders_clients_by_p', $limit, $page);
        $result = $result->result_array();
        if(!count($result)) return $result;
        
        foreach($result as $k => $v) {
            $result[$k] = array_map(function($v) {
                $d = $this->encryption->decrypt($v);
                return $d !== false ? $d : $v;
            }, $v);
        }

        return $result;
    }

    public function changeOrderStatus1($id, $to_status)
    {
        $this->db->where('id', $id);
        $this->db->select('processed');
        $result1 = $this->db->get('orders_clients_by_p');
        $res = $result1->row_array();

        $result = true;
        if ($res['processed'] != $to_status) {
            $this->db->where('id', $id);
            $result = $this->db->update('orders_clients_by_p', array('processed' => $to_status, 'status' => '1'));

        }
        return $result;
    }

    

}
