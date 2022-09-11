<?php

/*
 * @Author:    Kiril Kirkov
 *  Gitgub:    https://github.com/kirilkirkov
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Emails extends ADMIN_Controller
{

    private $num_rows = 20;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Emails_model');
    }

    public function index($page = 0)
    {
        $this->login_check();
        if (isset($_GET['delete'])) {
            $data = $this->Emails_model->deleteEmail($_GET['delete']);
            $this->session->set_flashdata('emailDeleted', 'Email addres is deleted!');
            redirect('admin/emails');
        }
        if (isset($_GET['edit']) && !isset($_POST['name'])) {
            $_POST = $this->Emails_model->getUsers($_GET['edit']);
        }
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Subscribed Emails';
        $head['description'] = '!';
        $head['keywords'] = '';
        $rowscount = $this->Emails_model->emailsCount();
        $data['links_pagination'] = pagination('admin/emails', $rowscount, $this->num_rows, 3);
        $data['emails'] = $this->Emails_model->getSuscribedEmails($this->num_rows, $page);
        if ($_POST) {
            $this->Emails_model->editUser($_POST);
            redirect('admin/emails');
        }
        $this->load->view('_parts/header', $head);
        $this->load->view('settings/emails', $data);
        $this->load->view('_parts/footer');
        if ($page == 0) {
            $this->saveHistory('Go to Subscribed Emails');
        }
    }

}
