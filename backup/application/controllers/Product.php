<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

    private $num_rows = 20;

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('admin/Brands_model');
    }

    public function index($page = 0)
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Public_model->getSeo('product_grid');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);


        $head['categories'] = $this->Public_model->getbuildTree($this->Public_model->getShopCategories());
        $data['products'] = $this->Public_model->getProducts($this->num_rows, $page, $_GET);
        $data['links_pagination'] = pagination('product_grid_P', $this->Public_model->productsCount($_GET), $this->num_rows);
        $this->render('product_grid', $head, $data);
    }

    /*
     * Used from greenlabel template
     * shop page
     */
    
    public function getauto_fill_search()
    {

        $products = $this->Public_model->getProducts();
        $result = array();
        foreach ($products as $product) {
           $productpass = $product[ "title" ];
              array_push( $result, $productpass );
        
        }
        echo json_encode( $result );
    }


}