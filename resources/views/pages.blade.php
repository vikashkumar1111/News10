<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Express</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/element.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
	
	
   <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>

<body>
<section id="header">
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.html">N<span class="well_4">e</span>ws Express</br><span class="well_1">Inceptos Ad</span><span class="well_2"> Massa</span><span class="well_3"> One</span></a>
	</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-center">
					<li><a href="index.html">HOME</a></li>
					<li><a href="blog.html">BLOG</a></li>
					<li><a href="details.html">DETAILS</a></li>
					<li><a href="team.html">TEAM</a></li>
					<li><a href="gallery.html">GALLERY</a></li>
					<li class="active"><a href="pages.html">PAGES</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">DROPDOWN <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="details.html">DETAILS</a></li>
							<li><a href="team.html">TEAM</a></li>
							<li><a href="gallery.html">GALLERY</a></li>
						</ul>
					</li>
				</ul>
				<ul class="navbar-right">
				   <li class="dropdown"><a class="text_1 pad_1" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span></a>
                    <ul class="dropdown-menu drop_inner" style="min-width:100%;">
                        <li>
                            <div class="row_1">
                                <div class="col-md-12">
                                    <form class="navbar-form navbar-left" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                Go!</button>
                                        </span>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</section>
<section id="pages">
  <div class="pages">
  <div class="container" role="main">
    <div class="pages">
	</div>
  <div class="page-header">
    <h1>How to use with Bootstrap</h1>
  </div>
  <div class="well">
    <p>
      Add this to your head section, make sure it is last .css file linked.
    </p>
    <ol>
      <li>create a .css file withthe lavish css in it - call it lavish-theme.css</li>
      <li>in your  link to that file in your .htm file as shown below</li>
    </ol>
    <code>
      <!-- Custom styles for this template --><br>
      <link href="./Create Beautiful Themes From Images - Bootsnipp.com_files/lavish-theme.css" rel="stylesheet">
    </code>
  </div>
  <div class="page-header">
    <h1>Buttons</h1>
  </div>
  <p>
    <button type="button" class="btn btn-lg btn-default">Default</button>
    <button type="button" class="btn btn-lg btn-primary">Primary</button>
    <button type="button" class="btn btn-lg btn-success">Success</button>
    <button type="button" class="btn btn-lg btn-info">Info</button>
    <button type="button" class="btn btn-lg btn-warning">Warning</button>
    <button type="button" class="btn btn-lg btn-danger">Danger</button>
    <button type="button" class="btn btn-lg btn-link">Link</button>
  </p>
  <p>
    <button type="button" class="btn btn-default">Default</button>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-link">Link</button>
  </p>
  <p>
    <button type="button" class="btn btn-sm btn-default">Default</button>
    <button type="button" class="btn btn-sm btn-primary">Primary</button>
    <button type="button" class="btn btn-sm btn-success">Success</button>
    <button type="button" class="btn btn-sm btn-info">Info</button>
    <button type="button" class="btn btn-sm btn-warning">Warning</button>
    <button type="button" class="btn btn-sm btn-danger">Danger</button>
    <button type="button" class="btn btn-sm btn-link">Link</button>
  </p>
  <p>
    <button type="button" class="btn btn-xs btn-default">Default</button>
    <button type="button" class="btn btn-xs btn-primary">Primary</button>
    <button type="button" class="btn btn-xs btn-success">Success</button>
    <button type="button" class="btn btn-xs btn-info">Info</button>
    <button type="button" class="btn btn-xs btn-warning">Warning</button>
    <button type="button" class="btn btn-xs btn-danger">Danger</button>
    <button type="button" class="btn btn-xs btn-link">Link</button>
  </p>
  <div class="page-header">
    <h1>Tables</h1>
  </div>
  <div class="row">
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2">1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
   <div class="page-header">
    <h1>Thumbnails</h1>
  </div>
  <img src="img/26.jpg" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">
  <div class="page-header">
    <h1>Labels</h1>
  </div>
  <h1>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </h1>
  <h2>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </h2>
  <h3>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </h3>
  <h4>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </h4>
  <h5>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </h5>
  <h6>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </h6>
  <p>
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
  </p>
   <div class="page-header">
    <h1>Badges</h1>
  </div>
  <p>
    <a href="#">Inbox <span class="badge">42</span></a>
  </p>
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
  </ul>
  <div class="page-header">
    <h1>Dropdown menus</h1>
  </div>
  <div class="dropdown theme-dropdown clearfix">
    <a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      <li class="active" role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
    </ul>
  </div>
  <div class="page-header">
    <h1>Navs</h1>
  </div>
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul>
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul>
  <div class="page-header">
    <h1>Alerts</h1>
  </div>
  <div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
  <div class="alert alert-info" role="alert">
    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
  </div>
  <div class="alert alert-warning" role="alert">
    <strong>Warning!</strong> Best check yo self, you're not looking too good.
  </div>
  <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>
  <div class="page-header">
    <h1>Progress bars</h1>
  </div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span></div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
    <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
    <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
  </div>
  <div class="page-header">
    <h1>List groups</h1>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          Cras justo odio
        </a>
        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item">Morbi leo risus</a>
        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item">Vestibulum at eros</a>
      </div>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
      </div>
    </div><!-- /.col-sm-4 -->
  </div>
  <div class="page-header">
    <h1>Panels</h1>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div>
    </div><!-- /.col-sm-4 -->
  </div>
  <div class="page-header">
    <h1>Wells</h1>
  </div>
  <div class="well">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
    <hr>
    <p><a href="#" target="_blank"><small>HTML</small><sup>5</sup></a></p>  
  </div>
</div>
  </div>
 </section>
<section id="footer">
   <div class="col-sm-12 padding_all">
    <div class="footer_main clearfix">
	 <div class="col-sm-4">
	 <div class="footer_1">
	  <h3>DAPIBUS DIAM</h3>
	  <p><a href="#"><i class="fa fa-star-half-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-half-o"></i> Integer</a></p>
	 </div>
	 <div class="footer_2">
	  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed dignissim lacinia nunc. </p>
	 </div>
	</div>
	 <div class="col-sm-4">
	  <div class="footer_3">
	   <h3>NOSTRA</h3>
	   <p><a href="#"><img src="img/17.jpg"></a></p>
	   <h4><a href="#">Nibh Elementum Imperdiet. Duis Sagittis?</a></h4>
	  </div>
	  <div class="footer_3">
	   <p><a href="#"><img src="img/18.jpg"></a></p>
	   <h4><a href="#"> Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odionec Odio</a></h4>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="footer_4">
	   <h3>SEMPER PORTA:</h3>
	  </div>
	  <div class="col-sm-12">
	   <div class="col-sm-4">
	    <div class="footer_5">
		 <p><a href="#"><img src="img/19.jpg"></a></p>
		</div>
	   </div>
	   <div class="col-sm-8">
	    <div class="footer_6">
		 <h5><a href="#">Praesent Mauris. Fusce Nec Tellus Sed Augue Semper</a></h5>
		 <p>MARCH 11, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="col-sm-4">
	    <div class="footer_5">
		 <p><a href="#"><img src="img/20.jpg"></a></p>
		</div>
	   </div>
	   <div class="col-sm-8">
	    <div class="footer_6">
		 <h5><a href="#">Nulla Quis Sem At Nibh Elementum Imperdiet. Duis</a></h5>
		 <p>MARCH 11, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="col-sm-4">
	    <div class="footer_5">
		 <p><a href="#"><img src="img/21.jpg"></a></p>
		</div>
	   </div>
	   <div class="col-sm-8">
	    <div class="footer_6">
		 <h5><a href="#">Augue Semper Porta. Mauris Massa. Vestibulum Lacinia Arcu</a></h5>
		 <p>MARCH 11, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="col-sm-4">
	    <div class="footer_5">
		 <p><a href="#"><img src="img/22.jpg"></a></p>
		</div>
	   </div>
	   <div class="col-sm-8">
	    <div class="footer_6">
		 <h5><a href="#">Praesent Mauris. Fusce Nec Tellus Sed Augue Semper Porta.</a></h5>
		 <p>MARCH 11, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="footer_7">
	    <p><i class="fa fa-arrow-right"></i><a href="#">Dignissim Lacinia Ad</a></p>
	   </div> 
	  </div>
	 </div>
	</div>
   </div>
   <div class="col-sm-12 padding_all">
    <div class="footer_inner clearfix">
	 <div class="col-sm-10">
	 <div class="footer_8"><p>© 2013 Your Website Name. All Rights Reserved. Design by<a href="http://www.TemplateOnWeb"> Template On Web</a> </p></div>
	</div>
	<div class="col-sm-2">
	</div>
	</div>
   </div>
</section>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/classie.js"></script> 
</body>
</html>