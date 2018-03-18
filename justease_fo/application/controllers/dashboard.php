<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* 
 * This class contain of viewer that used on URL
 * author : Parama Fadli Kurnia
 */

class Dashboard extends CI_Controller {
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
    
    function donasi() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "Sign In";
        $data["title"] = "Dashboard";
        $data["title_table"] = "Detail Donasi";
        $data["name"] = "justease Admin";
        $data["username"] = "@justeaseAdmin";
        $data["id_user"] = "88888888";
        $data["active_menu"] = "donasi";
        $data["campaign"] = number_format("12345678", 0, '.', ',');
        $data["donasi"] = number_format("5678", 0, '.', ',');
        
        $json = '[{"campaign":"Nenek Minah","donasi":"12000","tanggal":"2018-02-10","status":"pending"},
                {"campaign":"Penggusuran Rusun","donasi":"100000","tanggal":"2018-01-10","status":"done"},
                {"campaign":"Apartement Kalibata","donasi":"1250000","tanggal":"2017-12-15","status":"done"},
                {"campaign":"Kisruh Lahan","donasi":"3500000","tanggal":"2016-10-09","status":"done"},
                {"campaign":"Apartemen Pramuka","donasi":"100000","tanggal":"2018-01-10","status":"cancel"},
                {"campaign":"TKI Hongkong","donasi":"15000","tanggal":"2018-01-01","status":"done"},
                {"campaign":"Relokasi Pabrik","donasi":"700000","tanggal":"2017-08-05","status":"done"},
                {"campaign":"Penggusuran Rusun","donasi":"1000000","tanggal":"2015-01-10","status":"done"},
                {"campaign":"Tunggakan Gaji Buruh","donasi":"1000000","tanggal":"2018-07-17","status":"done"},
                {"campaign":"Aksi Rohingnya","donasi":"1000000","tanggal":"2018-07-17","status":"done"},
                {"campaign":"Nenek Digugat","donasi":"270000","tanggal":"2017-11-10","status":"cancel"}]';
        $json_result = json_decode($json, true);
        $data['json_result'] = $json_result;
        $this->load->view("dashboard/main/board_view", $data);
    }
    
    function campaign() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "Sign In";
        $data["title"] = "Detail Campaign";
        $data["title_table"] = "Detail Campaign";
        $data["name"] = "justease Admin";
        $data["username"] = "@justeaseAdmin";
        $data["id_user"] = "88888888";
        $data["active_menu"] = "campaign";
        $data["campaign"] = number_format("12345678", 0, '.', ',');
        $data["donasi"] = number_format("5678", 0, '.', ',');
        
        $json = '[{"campaign":"Nenek Minah","donasi":"25000000","tanggal":"2018-03-25","status":"On Review"},
                {"campaign":"Penggusuran Rusun","donasi":"100000000","tanggal":"2018-05-10","status":"Rejected"},
                {"campaign":"Apartement Kalibata","donasi":"125000000","tanggal":"2017-12-15","status":"Done"},
                {"campaign":"Kisruh Lahan","donasi":"35000000","tanggal":"2016-10-09","status":"Started"},
                {"campaign":"Apartemen Pramuka","donasi":"10800000","tanggal":"2018-11-10","status":"Done"},
                {"campaign":"TKI Hongkong","donasi":"1500000","tanggal":"2018-04-01","status":"Rejected"},
                {"campaign":"Relokasi Pabrik","donasi":"700000","tanggal":"2017-08-05","status":"On Review"},
                {"campaign":"Penggusuran Rusun","donasi":"123000000","tanggal":"2015-01-10","status":"Done"},
                {"campaign":"Tunggakan Gaji Buruh","donasi":"17600000","tanggal":"2018-07-17","status":"Done"},
                {"campaign":"Aksi Rohingnya","donasi":"18000000","tanggal":"2018-07-17","status":"Done"},
                {"campaign":"Nenek Digugat","donasi":"27000000","tanggal":"2017-11-10","status":"Rejected"}]';
        $json_result = json_decode($json, true);
        $data['json_result'] = $json_result;
        $this->load->view("dashboard/main/board_view", $data);
    }
    
    function log() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "Sign In";
        $data["title"] = "Log Aktifitas";
        $data["title_table"] = "Log Aktifitas";
        $data["name"] = "justease Admin";
        $data["username"] = "@justeaseAdmin";
        $data["id_user"] = "88888888";
        $data["active_menu"] = "log";
        $data["campaign"] = number_format("12345678", 0, '.', ',');
        $data["donasi"] = number_format("5678", 0, '.', ',');
        
        $json = '[{"activities":"Create Campaign Nenek Minah","tanggal":"2018-03-25"},
                {"activities":"Create Campaign Penggusuran Rusun","tanggal":"2018-05-10"},
                {"activities":"Create Campaign Apartement Kalibata","tanggal":"2017-12-15"},
                {"activities":"Create Campaign Kisruh Lahan","tanggal":"2016-10-09"},
                {"activities":"Create Campaign Apartemen Pramuka","tanggal":"2018-11-10"},
                {"activities":"Create Campaign TKI Hongkong","tanggal":"2018-04-01"},
                {"activities":"Create Campaign Relokasi Pabrik","tanggal":"2017-08-05"},
                {"activities":"Create Campaign Penggusuran Rusun","tanggal":"2015-01-10"},
                {"activities":"Create Campaign Tunggakan Gaji Buruh","tanggal":"2018-07-17"},
                {"activities":"Create Campaign Aksi Rohingnya","tanggal":"2018-07-17"},
                {"activities":"Create Campaign Nenek Digugat","tanggal":"2017-11-10"}]';
        $json_result = json_decode($json, true);
        $data['json_result'] = $json_result;
        $this->load->view("dashboard/main/board_view", $data);
    }
    
    function profile() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "";
        $data["title"] = "Profile";
        
        $data["name"] = "justease Admin";
        $data["username"] = "@justeaseAdmin";
        $data["email"] = "justeaseid@gmail.com";
        $data["job_title"] = "Admin";
        $data["phone"] = "088888888";
        $data["bio"] = "Jadi #legalhero bersama kami di justease.id !!!";
        $data["is_male"] = "checked";
        $data["is_female"] = "";
        $data["password"] = "88888888";
        $data["birthday"] = "02/02/2018";
        $data["idcard"] = "12345678";
        $data["country"] = "Indonesia";
        $data["city"] = "Jakarta";
        $data["street"] = "Jl. Gunung Sahari";
        
        $data["id_user"] = "88888888";
        $data["active_menu"] = "profile";
        $data["campaign"] = number_format("12345678", 0, '.', ',');
        $data["donasi"] = number_format("5678", 0, '.', ',');
        
        $this->load->view("dashboard/main/board_view", $data);
    }
    
    function invoice() {
        $data = array();
        $data["email"] = "";
        $data["password"] = "";
        $data["status"] = "";
        $data["title"] = "Invoice";
        
        $data["name"] = "justease Admin";
        $data["username"] = "@justeaseAdmin";
        $data["id_user"] = "88888888";
        $data["active_menu"] = "invoice";
        $data["campaign"] = number_format("12345678", 0, '.', ',');
        $data["donasi"] = number_format("5678", 0, '.', ',');
        
        $this->load->view("dashboard/main/board_view", $data);
    }
    
}

?>