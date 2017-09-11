<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>WordCamp US 2017</title>

		<meta name="description" content="Lies, Damn Lies, and Statistics">
		<meta name="author" content="Mika 'Ipstenu' Epstein">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="../reveal.js/css/reveal.css">
		<link rel="stylesheet" href="style.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="../reveal.js/lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = '../reveal.js/css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>

		<!--[if lt IE 9]>
		<script src="../reveal.js/lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h1>Lies, Damn Lies, and Statistics</h1>
					<h3>(Or: How Sara Lance Made Me Cry)</h3>
					<h4 style="text-align:center">Created for <a href="https://2017.us.wordcamp.org/">WordCamp US 2017</a></h4>
					<p><small><a href="http://helf.us/wcus2017">http://helf.us/wcus2017</a></small></p>
					<!-- Using WordPress to queery data and generate statistics based on the entire history of television and understand the impact of fictional death in the media on real life people. -->
				</section>

				<section data-markdown="markdown.md" data-separator="^\n\n\n" data-separator-vertical="^\n\n" data-separator-notes="^Note:"></section>

				<section>
					<h1>THE END</h1>

					<h3>Mika "Ipstenu" Epstein</h3>
					<h4>DreamHost WordPress & DreamPress Guru</h4>

					<p>My tech blog: <a href="http://halfelf.org" target="_blank">http://halfelf.org</a></p>

					<p>These slides: <a href="http://helf.us/wcus2017" target="_blank">http://helf.us/wcus2017</a>
				</section>

			</div>

		</div>

		<script src="../reveal.js/lib/js/head.min.js"></script>
		<script src="../reveal.js/js/reveal.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'slide', // default/cube/page/concave/zoom/linear/fade/none

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: '../reveal.js/lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: '../reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: '../reveal.js/plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: '../reveal.js/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: '../reveal.js/plugin/markdown/marked.js', condition: function () { return document.querySelector('[data-markdown]'); } },
					{ src: '../reveal.js/plugin/markdown/markdown.js', condition: function () { return document.querySelector('[data-markdown]'); } },
				]
			});

		</script>

		<!-- Hidden header/footer <div> -->
		<div id="hidden" style="display:none;">
		    <div id="header">
		        <div id="header-left"><!-- HEADER-LEFT --></div>
		        <div id="header-right"><!-- HEADER-RIGHT --></div>
		        <div id="footer-left"><!-- FOOTER-LEFT --></div>
		    </div>
		</div>

		<script src="../assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript">
		    // 3. On Reveal.js ready event, copy header/footer <div> into each `.slide-background` <div>
		    var header = $('#header').html();
		    if ( window.location.search.match( /print-pdf/gi ) ) {
		        Reveal.addEventListener( 'ready', function( event ) {
		            $('.slide-background').append(header);
		        });
		    }
		    else {
		        $('div.reveal').append(header);
		   }
		</script>

	</body>
</html>