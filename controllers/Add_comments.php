<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_comments extends CI_Controller {  // потом же это в окно под статьями надо
	
 	public function index() {	
	
		
	//  Получить коммент из формы
		$article_id = $this->input->post('article_id');
		$author = $this->input->post('author');
		$comment_text = $this->input->post('comment_text');
		//$com_date = date('Y-m-d');
		// $new_comment = array( $author, $comment_text );		
	
	//  Отправка коммента в модель 
			
		 $this->load->model('My_model');
		// $article_id  = $GLOBALS['article_id']	; //Эта хрень не работает
		 
		 //$this->My_model->add_comment($article_id, $author, $comment_text );
		 $this->My_model->add_comment($author, $comment_text );
		
		// $this->load->view('view_all_comments', $data);	// 	only $data is array // 	$data['query'] is object
	}
									
	
	
}
