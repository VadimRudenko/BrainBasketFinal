<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<hr>
<p> 
</p>

<?php echo form_fieldset('Добавьте свой комментарий'); ?>

<?php echo form_open('Add_comments', 'class="email" id="myform"') ; ?> <!-- открытие формы и создание дополнительных ээлементов разметки -->
	<?php if (validation_errors()) : ?>
	<h3>Whoops! There was an error:</h3>
	<p><?php echo validation_errors(); ?></p>
	<?php endif; ?>
							 
	<table border="0">
		<tr>
			<td>Ваше им'я або нiк:</td>
			<td><?php echo form_input('author', 'Не меньше 3 символов'); ?></td>    
		</tr>
		<tr>
			<td>Ваш комментарий</td>
			<td><?php echo form_textarea('comment_text'); ?></td>  
		</tr>
	</table>
	
	
	
	<?php form_hidden('article_id', '2'); ?>     		<!--  $_SESSION['article_id']) для закрепления коммента за опред статьей -->

	<?php echo  $_SESSION['article_id']; ?>

	<?php echo form_submit('add', 'Отправить'); ?>

	<?php    echo  form_reset('','Очистить форму');?>     <!--  echo anchor('comments/index', 'cancel'); // очистка формы -->
<?php echo form_close(); ?>

<?php echo form_fieldset_close(); ?>


	

