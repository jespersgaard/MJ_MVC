<div class="row-fixed">
	<div class="page-header">	
		<?php echo "
		<div>
			<a href='" . URL . "project' class='btn'><i class='icon-list'></i> List View</a>			
			<a href='" . URL . "project/index_gitter' class='btn btn-primary'><i class='icon-th'></i> Grid View</a>											
			<hr width='100%'>
		</div>	
		"; ?>
	</div>
<div>
<ul class="thumbnails">
<?php
	foreach($this->project_list_mine as $key => $value) {
		echo '						
	<li class="span3"><div class="thumbnail"><div><div class="row"><div class="span3"><div class="row">
		<div class="span1"><a href="#" class="thumbnail"><img src="http://placehold.it/60x60" alt=""></a></div>
			<div class="span2"><h4><strong><a href="'. URL . 'project/intro/' . $value['idProject'].'" class="btn btn-success"><i class="icon-zoom-in"></i> ' . $value['name'] . '</a></strong></h4></div></div>
		<div class="row"><div class="span3"><p>' . $value['description'] . '</p></div></div>
		<div class="row"><div class="span3">				
			<small>
				<p></p>
				<p>
				  <i class="icon-user"></i> Owner <a href="'. URL . 'user/profile/' . $value['idUser'].'">' . $value['login'] . '</a> 
				  | <i class="icon-calendar"></i> '.$value['date_from'].'<p>
				  <i class="icon-comment"></i> <a href="#">3 Comments</a>
				  | <i class="icon-share"></i> <a href="#">39 Tasks</a><p>
				  <i class="icon-tags"></i> Tags : 
						  <a href="#"><span class="label label-info">Snipp</span></a> 
						  <a href="#"><span class="label label-info">Bootstrap</span></a> 
						  <a href="#"><span class="label label-info">UI</span></a> 
			</small>			
			<h6>Members <small>(10)</small></h6>						
				<a href="1#"><img src="<?php echo URL ?>/public/img/demo/user-avatar.jpg" class="img-circle"></a>
				<a href="1#"><img src="<?php echo URL ?>/public/img/demo/user-avatar.jpg" class="img-circle"></a><P>
		</div></div></li>		';
		}?>				  
</ul>
</div>		
</div>		