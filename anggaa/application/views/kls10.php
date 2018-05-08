<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Angga purnamajaya</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	</header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						 <?php echo anchor('a','Home');?>
					</li>
          <li class="active">
             <?php echo anchor('Dashboard','back');?>
          </li>
				</ul>
			</div>
		</div>
	</nav>
  <div class="container">
  		<?php $this->load->view($content);?>
  	</div>

</body>
</html>
