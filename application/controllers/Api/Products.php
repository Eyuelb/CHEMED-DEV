<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Products extends REST_Controller
{

    private $allowed_img_types;

    function __construct()
    {
        parent::__construct();
        $this->methods['all_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['one_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['set_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['productDel_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->load->model(array('Api_model', 'admin/Products_model'));
        $this->allowed_img_types = $this->config->item('allowed_img_types');
    }

    /*
     * Get All Products
     */

    public function all_get()
    {

        $products = $this->Api_model->getProducts();
      
        // Check if the products data store contains products (in case the database result returns NULL)
        if ($products)
         {

    $products = $this->Api_model->getProducts();
    $this->response($products, REST_Controller::HTTP_OK); 

        } else {
            // Set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No products were found'
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }
    public function aut_get()
    {
        $this->Validation('');
    }

    /*
     * Get One Product
     */

    public function one_get($key)
    {
        
        $val = $this->Api_model->loginCheck($key);
        if($val){
            $product = $this->Api_model->getProducts();
            if ($product) {
                // Set the response and exit
                $this->response($product, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            } else {
                // Set the response and exit
                $this->response([
                    'status' => FALSE,
                    'message' => 'Invalid Login'
                        ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
        else
        {
            $this->Validation('Incorrect Api Key'); 
        }
        // Check if the products data store contains products (in case the database result returns NULL)

    }
    

    /*
     * Set Product
     */
    
    public function users_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com'],
        ];

        $id = $this->get( 'id' );

        if ( $id === null )
        {
            // Check if the users data store contains users
            if ( $users )
            {
                // Set the response and exit
                foreach($users as $user){
                   $name =  $user['name'];
 
                    
                }
                
            }
            else
            {
                // Set the response and exit
                $this->response( [
                    'status' => false,
                    'message' => 'No users were found'
                ], 404 );
            }
        }
        else
        {
            if ( array_key_exists( $id, $users ) )
            {
                $this->response( $users[$id], 200 );
            }
            else
            {
                $this->response( [
                    'status' => false,
                    'message' => 'No such user found'
                ], 404 );
            }
        }
    }

    public function set_post()
    {
        $errors = [];
        $_POST['image'] = $this->uploadImage();
        if (!isset($_POST['translations']) || empty($_POST['translations'])) {
            $errors[] = 'No translations array or empty';
        }
        if (!isset($_POST['title']) || empty($_POST['title'])) {
            $errors[] = 'No title array or empty';
        }
        if (!isset($_POST['basic_description']) || empty($_POST['basic_description'])) {
            $errors[] = 'No basic_description array or empty';
        }
        if (!isset($_POST['description']) || empty($_POST['description'])) {
            $errors[] = 'No description array or empty';
        }
        if (!isset($_POST['price']) || empty($_POST['price'])) {
            $errors[] = 'No price array or empty';
        }
        if (!isset($_POST['old_price']) || empty($_POST['old_price'])) {
            $errors[] = 'No old_price array or empty';
        }
        if (!isset($_POST['shop_categorie'])) {
            $errors[] = 'shop_categorie not found';
        }
        if (!isset($_POST['quantity'])) {
            $errors[] = 'quantity not found';
        }
        if (!isset($_POST['in_slider'])) {
            $errors[] = 'in_slider not found';
        }
        if (!isset($_POST['position'])) {
            $errors[] = 'position not found';
        }
        if (!empty($errors)) {
            $error = implode(", ", $errors);
            $message = [
                'message' => $error
            ];
        } else {
            $this->Api_model->setProduct($_POST);
            $message = [
                'message' => 'Added a resource'
            ];
        }
        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    private function uploadImage()
    {
        $config['upload_path'] = './attachments/shop_images/';
        $config['allowed_types'] = $this->allowed_img_types;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('userfile')) {
            log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
        }
        $img = $this->upload->data();
        return $img['file_name'];
    }

    public function productDel_delete($id)
    {
        $id = (int) $id;
        // Validate the id.
        if ($id <= 0) {
            // Set the response and exit
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }
        $this->Api_model->deleteProduct($id);
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];
        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
    }

}