


<?php foreach($articles as $item):?>
	<div class="articles">
		<p style="margin: 50px 50px;"><b><?=$item['title'];?>  </b></p>
		<p><?=$item['content'];?>  </p>
		<p>Дата публикацiї : <?=$item['date'];?>  </p>
	</div>									
	<div>	
		<?php //  $this->load->view('view_all_comments');	//Для просмотра комментов которые уже есть в базе ?>	
		<?php //  $this->load->view('/templates/comment-form');			//добавление блока(формы) для отправки комментариев ?>	
	</div>			
		
	<?php //$article_id = $item['id'];	?>
	
	<?php endforeach;	?>

	
	<span style="text-align:center">   
		<?=$this->pagination->create_links(); ?>
		

	</span>
	
	
