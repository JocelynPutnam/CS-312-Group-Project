<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="author" content="Team 21">
    <meta name="description" content="CS 312 Group Project">
    <?php echo Asset::css($css) ?>
</head>

<body>
    <header>
		<h1>[Goldfish Paint Design]: CS-312 Group Project</h1>
	</header> 

    <main style="box-shadow: 4px 4px 4.5px darkgrey;">
		<!-- <h1>Master Template</h1> -->
        <!-- <p>Below is the View passed into this template</p>-->
        <?php echo $content ?>
    </main>
    
    <hr>
	<footer>
		<!--Above ends the Page passed into the template as a View <br />-->
		<p>CS 312</p>
	</footer>
        
</body>
