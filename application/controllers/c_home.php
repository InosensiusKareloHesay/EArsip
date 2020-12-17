<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
    
	public function loadDashboard()
	{
        if (($this->session->userdata("login") == TRUE) && ($this->session->userdata("level")) == 1){
            $data['dokumen'] = $this->model_data->get_jumlahDokumen();
            $data['user'] = $this->model_data->get_jumlahUser();
            $data['total'] = $this->model_data->get_jumlahTrans();
            $this->load->view('header');
            $this->load->view('view_admin',$data);
            $this->load->view('footer');
        } else if(($this->session->userdata("login") == TRUE) && ($this->session->userdata("level")) == 0){
            $data['user'] = $this->model_data->getUserData($this->session->userdata("id"));
            $this->load->view('header2');
            $this->load->view('index_user',$data);
            $this->load->view('footer');
        }
        else {
            $this->load->view('login');
        }
	}
    public function loadRuang(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadRuang');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahRuang();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['ruang'] = $this->model_data->get_ruang($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_ruang',$data);
            $this->load->view('footer');
    }
    public function loadInputRuang(){
            $this->load->view('header');
            $this->load->view('input_ruang');
            $this->load->view('footer');
    }
    public function loadRak(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadRak');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahRak();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['rak'] = $this->model_data->get_rak($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_rak',$data);
            $this->load->view('footer');
    }
    public function loadInputRak(){
            $this->load->view('header');
            $this->load->view('input_rak');
            $this->load->view('footer');
    }
    public function loadBox(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadBox');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahBox();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['box'] = $this->model_data->get_box($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_box',$data);
            $this->load->view('footer');
    }
    public function loadInputBox(){
            $this->load->view('header');
            $this->load->view('input_box');
            $this->load->view('footer');
    }
    public function loadMap(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadMap');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahMap();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['map'] = $this->model_data->get_map($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_map',$data);
            $this->load->view('footer');
    }
    public function loadInputMap(){
            $this->load->view('header');
            $this->load->view('input_map');
            $this->load->view('footer');
    }
    public function loadUrut(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadUrut');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahUrut();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['urut'] = $this->model_data->get_urut($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_urut',$data);
            $this->load->view('footer');
    }
    public function loadInputUrut(){
            $this->load->view('header');
            $this->load->view('input_urut');
            $this->load->view('footer');
    }
    public function loadApproval(){
            $data['req'] = $this->model_data->get_requestFile();
            $this->load->view('header');
            $this->load->view('view_approval',$data);
            $this->load->view('footer');
    }
    public function loadPengembalian(){
            $data['back'] = $this->model_data->get_pengembalianFile();
            $this->load->view('header');
            $this->load->view('view_pengembalian', $data);
            $this->load->view('footer');
    }
    public function loadReport(){
            $data['row'] = $this->model_data->getReport();
            $this->load->view('header');
            $this->load->view('v_reportpeminjaman',$data);
            $this->load->view('footer');
    }
    public function loadPageUser(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadPageUser');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahUser();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['user'] = $this->model_data->get_user($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_peminjam',$data);
            $this->load->view('footer');
    }
    public function loadInputUser(){
            $this->load->view('header');
            $this->load->view('input_peminjam');
            $this->load->view('footer');
    }
    public function loadPageDokumen(){
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['base_url'] = base_url('c_home/loadPageDokumen');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->model_data->get_jumlahDokumen();
            $offset = $this->uri->segment(3);
            $this->pagination->initialize($config);     
            $data['doc'] = $this->model_data->get_doc($config['per_page'],$offset);
            $this->load->view('header');
            $this->load->view('view_dokumen',$data);
            $this->load->view('footer');
    }
    public function loadInputDokumen(){
            $data['ruang'] = $this->model_data->getDataRuang();
            $data['rak'] = $this->model_data->getDataRak();
            $data['box'] = $this->model_data->getDataBox();
            $data['map'] = $this->model_data->getDataMap();
            $data['urut'] = $this->model_data->getDataUrut();
            $this->load->view('header');
            $this->load->view('input_dokumen',$data);
            $this->load->view('footer');
    }

    public function loadAbout(){
            $this->load->view('header');
            $this->load->view('aboutus');
            $this->load->view('footer');
    }
}