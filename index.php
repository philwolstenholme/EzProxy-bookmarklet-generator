<!DOCTYPE html>
<html>
<head>
    <title>EzProxy Bookmarklet Generator - one click access to journal articles through your university or college's EzProxy service</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="script.js"></script>
    <link href="styles.css" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
</head>

<body>


<nav id="topnav" class="navbar navbar-default navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a class="navbar-brand" href="http://wolstenhol.me/sites/projects/ezproxy">EzProxy Bookmarklet generator</a>
  </div>
  
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li><a href="http://wolstenhol.me">Back to wolstenhol.me</a></li>
		<li><a href="https://twitter.com/intent/user?screen_name=philw_">Follow @philw_ on Twitter</a></li>
	</ul>
	</div><!-- /.navbar-collapse -->
	</nav>

    <div class="container">
        <div class="starter-template">
            <p class="lead">Access journal articles and other subscription only content with one click by logging in via your University.</p>

            <p>Enter the full URL to your EzProxy service below. Include any numbers, but no slash at the end please.</p>

            <div>
                <form class="form-inline lead fadeIn">
                    
                    
                
                <div class="row">
		  <div class="col-xs-8"><input class="form-control URLinput" id="URL" name="URL" placeholder="Enter your EzProxy URL here" type="text" value="<?php if(isset($_GET["URL"])) { echo htmlspecialchars($_GET["URL"]); } ?>"/></div>
		  <div class="col-xs-4"><button id="submit" class="btn btn-default btn-submit btn-primary" type="submit"><span class="glyphicon glyphicon-arrow-right"></span> Make bookmarklet!</button></div>
		</div>
                
                </form>
            </div>
            
            <p>e.g. <a href="http://ezproxy.liv.ac.uk" target="_blank">http://ezproxy.liv.ac.uk</a>, <a href="http://ezproxy.stanford.edu:2048" target="_blank">http://ezproxy.stanford.edu:2048</a> or <a href="https://login.ezproxy.lib.monash.edu.au">https://login.ezproxy.lib.monash.edu.au</a></p>
            
            <div class="well well-lg">
            <p class="advice text">Drag the link below to your bookmarks bar. Clicking it will take you to the current page through EzProxy.</p>
				<p class="advice">
					<a href="#" class="bookmarklet btn btn-default btn-lg disabled"><span class="glyphicon glyphicon-download"></span> via EzProxy</a>
				</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>EzProxy is a web based proxy server that's used to allow researchers to access electronic resources from anywhere as if they were logged into a institutional computer. It prevents researched from being faced with paywalls and 'purchase this article' links when trying to carry out research outside of their university.</p>

                    <p>This EzProxy bookmarklet makes using EzProxy much easier. The EzProxy bookmarklet can be dragged to your browser's shortcuts or bookmarks bar and will give one click access to the current page through your university's EzProxy service.</p>
                </div>

                <div class="col-md-4">
                    <p>To use it, paste in the address of your institution's EzProxy service. There are some examples given to help you recognise the correct URL. You can find this URL by searching your university or university library's website for information on EzProxy. After entering in the correct EzProxy URL, drag the link to your bookmarks bar, or save it as a regular bookmark to create an EzProxy bookmarklet.</p>

                </div>
                <div class="col-md-4">
                    <p>Now, you can navigate to a page that requires EzProxy, such as a journal article on ScienceDirect or <span class="caps">JSTOR</span>, and click the EzProxy bookmarklet to access the page as if you were on campus. If you get errors, you may have entered an incorrect EzProxy service URL. Leave a comment and I'll try to help you find the correct URL to fix your EzProxy bookmarklet.</p>
                    <p>You can <a href="http://wolstenhol.me/blog/ezproxy-bookmarklet-generator-any-institutions-library">leave comments on this EzProxy bookmarklet generator here</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-38577108-2', 'wolstenhol.me');
	  ga('send', 'pageview');
	</script>
	<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
	<?php if(isset($_GET["URL"])) {echo "<script type=\"text/javascript\">generateLink();</script>";}?>
</body>
</html>