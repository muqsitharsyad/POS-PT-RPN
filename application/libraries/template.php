<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template
{
    var $ci;
    function __construct()
    {
        $this->ci =& get_instance();
        $this->page_title = '';
		$this->navbar_menu = array();
    }
    function load($tpl_view, $body_view = '', $data = array())
    {
        $data['page_title'] = $this->page_title;
        $data['navbar_menu'] = $this->navbar_menu;
        $data['body'] = ($body_view=='') ? '' : $this->ci->load->view($body_view, $data, TRUE);
        $this->ci->load->view('template/'.$tpl_view, $data);
    }
}