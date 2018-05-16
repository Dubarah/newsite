
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (isset($job_id)){ ?>
        <meta property="og:url"         content="<?php echo base_url().'job/'. $job_id; ?>" />
		<meta property="og:type"        content="website" />
		<meta property="og:title"       content="Dubarah -<?php echo $dubarah->row()->title; ?>" />
		<meta property="og:description" content='<?php /*echo $dubarah->row()->description;*/ ?>' />
		<meta property="og:image"       content="<?php echo $dubarah->row()->img ? base_url()."uploads/jobslogo/".$dubarah->row()->img : base_url().'ass/images/defult.png' ?>" />
    <?php } else {?>
    	<meta property="og:url"         content="<?php echo base_url()?>" />
		<meta property="og:type"        content="website" />
		<meta property="og:title"       content="Dubarah" />
		<meta property="og:description" content="<?php echo trans('about_dubarah')?>" />
		<meta property="og:image"       content="<?php echo base_url().'ass/images/share.png'?>" />
		<?php } ?>
    
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" >
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/sweetalert.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/select2.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/select2-bootstrap.css">
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="<?php echo base_url() ?>ass/images/5.png">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

	<style>
	.modal-dialog{
   		 overflow-y: initial !important
		}
		.modal-body{
   		 height: 250px;
    		overflow-y: auto;
		}
        .user-images {
        margin-top:20px;
        margin-right:20px;
        width:20%;
        width:100%;
   		}
   		.my_img_upload{
			background-image:url('');
		    background-size:cover;
		    background-position: center;
		    height: 125px; width: 125px;
		   
		    position:relative;
		  border-radius:250px;
		  overflow:hidden;
   		}


        #profile-upload , #cover-upload {
		    background-image:url('');
		    background-size:cover;
		    background-position: center;
		    height: 125px; width: 125px;
		   
		    position:relative;
		  border-radius:250px;
		  overflow:hidden;
		}
		#profile-upload:hover input.upload , #cover-upload:hover input.upload{
		  display:block;
		}
		#profile-upload:hover .hvr-profile-img , #cover-upload:hover .hvr-COVER-img 
		.my_img_upload{
		  display:inline-block;
		 }
		#profile-upload .fa , #cover-upload .fa{   margin: auto;
		    position: absolute;
		    bottom: -4px;
		    left: 0;
		    text-align: center;
		    right: 0;
		    padding: 6px;
		   opacity:1;
		  transition:opacity 1s linear;
		   -webkit-transform: scale(.75); 
		 
		 
		}
		#profile-upload:hover .fa , #cover-upload:hover .fa{
		   opacity:1;
		   -webkit-transform: scale(1); 
		}
		#profile-upload input.upload , #cover-upload input.upload  {
		    z-index:1;
		    left: 0;
		    margin: 0;
		    bottom: 0;
		    top: 0;
		    padding: 0;
		    opacity: 0;
		    outline: none;
		    cursor: pointer;
		    position: absolute;
		    background:#ccc;
		    width:100%;
		    display:none;
		}

		#profile-upload .hvr-profile-img ,#cover-upload .hvr-cover-img {
		  width:100%;
		  height:100%;
		  display: none;
		  position:absolute;
		  vertical-align: middle;
		  position: relative;
		  background: transparent;
		 }
		#profile-upload .fa:after , #cover-upload .fa:after  {
		    content: "";
		    position:absolute;
		    bottom:0; left:0;
		    width:100%; height:0px;
		    background:rgba(0,0,0,0.3);
		    z-index:-1;
		    transition: height 0.3s;
		    }

		#profile-upload:hover .fa:after , #cover-upload:hover .fa:after   { height:100%; }

		/* css for the user 8 images*/
		.img-thumbnail:hover{
		    border: 3px solid rgba(255, 0, 0, 0.6);
		}
		/*css for logo delete button*/
		#logo-del{
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		    width: 100px;
		}
		#cover-del{
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		    width: 100px;
		}
    </style>