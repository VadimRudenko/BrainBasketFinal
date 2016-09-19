<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
		function index(){
			$data['FirstL_header'] = 'I_I_I A II K A';
			$this->load->view('templates/header', $data  );// подключение шапки
			
			$this->load->library('pagination');
			$config['base_url'] = 'http://rudi.ua/index.php/articles/index'; // Это урл именно для пагинации, к общему не относится
			$config['total_rows'] = 4;// вашпе сюда наверное количество должно прилетать из БД
			$config['per_page'] = 1;
			$config['first_link'] = '1';
			$config['cur_tag_open'] = '<b style=" padding:5px ">';
			$config['cur_tag_close'] = '</b>';
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config);

			$this->load->model('my_model' );
			
			$data['articles']= $this->my_model->get_articles($config['per_page'], $this->uri->segment(3));
		
			$this->load->view('articles_view',$data);	
						
			//  просмотр комментов которые уже есть в базе 
			$data['query'] =  $this->my_model->get_all_comments();	
			$this->load->view('view_all_comments', $data);	// 	only $data is array // 	$data['query'] is object
			
			
			// показать форму для отправки комментариев		
			$this->load->view('/templates/comment-form');
			
	
			// подключение подвала
			$this->load->view('templates/footer' );
		}
}
	
	
	
	
	

