
     <div id="container">
		<h1>Super Pagination with CodeIgniter</h1>
		
		<?php echo $this->table->generate($records); ?>
		<?php echo $this->pagination->create_links(); ?>
	 </div>
     
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	

<script type="text/javascript" charset="utf-8">
	$('tr:odd').css('background', '#e3e3e3');
</script>
