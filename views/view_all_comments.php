<?php foreach ($query->result()as $row):?>
			<p style="border:dotted 3px green "> 
			Автор:  
					<?php echo $row->author;?> <br>
					<?php echo $row->comment_text;?><br>
					
					<?php echo $row->com_date;?><br>
					
					
					
			<?php endforeach ?>
</p>	 					
			 
