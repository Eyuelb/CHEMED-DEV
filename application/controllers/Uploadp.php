<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadp extends MY_Controller
{

    private $orderId;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Public_model');
       
    }

    public function index()
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Public_model->getSeo('uploadp');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $data['picture_list'] = $this->Public_model->get_all_pics();

        $this->render('uploadp', $head, $data);
    }

    public function file_data(){
        //validate the form data 
        $head = array();
        $arrSeo = $this->Public_model->getSeo('uploadp');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $orderId = $this->Public_model->get_max_id($_POST);
        $this->orderId = $orderId;
        
            //get the form values
            $data['full_name'] = $this->input->post('full_name', TRUE);
            $data['phone'] = $this->input->post('phone', TRUE);
            $data['address'] = $this->input->post('address', TRUE);
            
            //file upload code 
            //set file upload settings 
       
            $config['upload_path']          = APPPATH. '../attachments/shop_images/';
            $config['allowed_types']        = 'jpge|jpg|png';
            $config['max_size']             = 2000;

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('pic_file')){
            $error = array('error' => $this->upload->display_errors());  
            $this->render('uploadp', $head, $error);
            }

            else{

                //file is uploaded successfully
                //now get the file uploaded data 
                $upload_data = $this->upload->data();

                //get the uploaded file name
                $data['pic_file'] = $upload_data['file_name'];
                $data['orderId'] = $this->orderId;
                //store pic data to the dbstore_pic_data
                $this->Public_model->store_pic_data($data);
                $_SESSION['orderId'] = $this->orderId;
                $this->render('checkout_parts/upload_success', $head, $data);
           
            }
            
            
        
    }
    
}
