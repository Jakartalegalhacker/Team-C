<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* 
 * This class contain of viewer that used on URL
 * author : Parama Fadli Kurnia
 */

class Campaign extends CI_Controller {
    /* put your code here */

    // constructor
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('functional');
    }

    function get_url() {
        $uri = array();
        $uri["enc_email"] = ($this->uri->segment(3) ? $this->uri->segment(3) : "NULL");
        $uri["group"] = ($this->uri->segment(4) ? $this->uri->segment(4) : "0");
        return $uri;
    }
    
    function index() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "Sign In";
        $data["title"] = "justease - Campaign List";
        $this->load->view("content/campaign/campaign_view", $data);
    }
    
}

?>