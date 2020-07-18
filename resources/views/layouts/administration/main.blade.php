<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title','Varovný systém ČR')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="../img/Varovny-System-Logo-Icon.png">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
      <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/administration/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/administration/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="/administration/css/custom.css">
  <link rel="stylesheet" href="/administration/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css">
  <link rel="stylesheet" href="/administration/plugins/simple-mde/simplemde.min.css">
  <link rel="stylesheet" href="/administration/plugins/tag-editor/jquery.tag-editor.css">
  <!-- Bulma MDE Editor conflict fix. -->
  <style type="text/css">
  	.content p:not(:last-child), .content dl:not(:last-child), .content ol:not(:last-child), .content ul:not(:last-child), .content blockquote:not(:last-child), .content pre:not(:last-child), .content table:not(:last-child){
  		margin-bottom: 0em;
  	}
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <!-- Header Navbar: style can be found in header.less -->

  @include('layouts.administration.header')

  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.administration.sidemenu')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>2019 <a href="#">Varovný systém ČR </a></strong> & open source AdminLTE <strong>| Administrace</strong>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
        <!-- Bootstrap 3.3.6 -->
<script src=" {{ asset('js/bootstrap.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="/administration/js/app.min.js"></script>
<script type="text/javascript" src="/administration/plugins/simple-mde/simplemde.min.js"></script>
<script type="text/javascript" src="/administration/plugins/moment/moment.min.js"></script>
<script type="text/javascript" src="/administration/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/administration/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="/administration/plugins/tag-editor/jquery.caret.min.js"></script>
<script type="text/javascript" src="/administration/plugins/tag-editor/jquery.tag-editor.min.js"></script>
@stack('removeCachedImage')
<script type="text/javascript">

    $("#addNewPostSidemenu").click(function(){
        localStorage.removeItem("imgUploaded");
    });

    $("#addNewPostTable").click(function(){
        localStorage.removeItem("imgUploaded");
    });

    $("#addNewPostDashboard").click(function(){
        localStorage.removeItem("imgUploaded");
    });

    $("#addPosts").click(function(){
      localStorage.removeItem("imgUploaded");
    });

    var options = {
      valueNames: [ 'post_title', 'author', 'category', 'created_at', 'published_at' ]
    };

    var userList = new List('table', options);

</script>

@stack('scripts')
</body>
</html>
