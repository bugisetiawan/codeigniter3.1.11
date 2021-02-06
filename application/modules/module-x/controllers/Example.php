<?php
class Example extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
    }

    function index()
    {
        echo "Module-X";
    }
}