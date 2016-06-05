<?php
  header('Content-Type: text/html; charset=UTF-8');
?>
<htmnl>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php echo $titulo ?> | SCA</title>
    <link rel="icon" href="<?php echo base_url();?>files/media/imagen/interface/favicon.png" sizes="32x32">
	<link rel="stylesheet" href="<?php echo base_url();?>files/css/dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>files/css/cbtis.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>files/materialize/css/materialize.css" media="screen,projection">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<script src="<?php echo base_url();?>files/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>files/js/Jquery.DataTables.js"></script>
	<script src="<?php echo base_url();?>files/js/scripts.js"></script>
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="<?php echo base_url();?>files/js/traductor.js"></script>
</head>
<body id="body">
