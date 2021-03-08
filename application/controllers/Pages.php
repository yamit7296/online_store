<?php

class Pages extends CI_Controller{

    public function view($page = 'about'){
        
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
           
            // whoops.. page does not exits
            show_404();
        }

        $data['title'] = ucfirst($page); //Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}

?>