<div class="row-fixed">
	<div class="page-header">	
		<?php echo "

		<div>
			<a href='" . URL . "project/project_all' class='btn' id='activities'><i class='icon-list'></i> List View</a>			
			<a href='" . URL . "project/project_gitter' class='btn btn-primary' id='activities'><i class='icon-th'></i> Grid View</a>											
			<hr width='100%'>
		</div>	
		"; ?>
	</div>
<div>
<ul class="thumbnails">


							
<?php
	foreach($this->project_all as $key => $value) {
		echo '						
	<li class="span3"><div class="thumbnail"><div><div class="row"><div class="span3"><div class="row">
		<div class="span1"><img src="http://placehold.it/60x60" alt=""></div>
			<div class="span2"><h4><strong><a href="'. URL . 'project/intro/' . $value['idProject'].'" class="btn btn-success"><i class="icon-zoom-in"></i> ' . $value['name'] . '</a></strong></h4></div></div>
		<div class="row"><div class="span3"><p>' . $value['description'] . '</p></div></div>
		<div class="row"><div class="span3">				
				<p></p>
				<p>
				  <i class="icon-user"></i> Owner <a href="'. URL . 'user/profile/' . $value['idUser'].'">' . $value['login'] . '</a></a> 
				  | <i class="icon-calendar"></i> '.$value['date_from'].'<p>
				  
		</div></div></li>		';
		}
						?>				  
				</ul>
</div>		
</div>		