<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>xkcd Password Generator</title>

<?php require('logic.php'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="styles.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">	
	
    <!-- VIEW INPUT
	<pre> <?php print_r($_POST); ?> </pre>
    -->
    
    <h1 class="page-header text-center"> xkcd Password Generator </h1>    
    
    <br>
	
    
    <p class="lead text-center"> 
		<!-- START Password generator -->
		<?php

		$i = 0;
		foreach($wordArray as $word) {
			echo $wordArray[$wordRandom[$i]];
			$i++;
			if($i==$_POST["wordCount"]) break;
		}

		echo $number;
		echo $symbolArray[$symbol];
		
		?>
        <!-- END Password Generator --> 
    </p>
    
    
    <div class="col-xs-6 col-md-6 col-lg-6 panel panel-default center-block text-center">
        <div class="panel-body">
          
            <form role="form" method="POST" action="index.php">
                <div class="form-group">
                    <label for="wordCount">Number of words (Maximum 9 characters)</label>
                    <input type="number" min="1" max="9" class="form-control input-lg" name="wordCount" id="wordCount" value="">
                </div>

                <div class="checkbox">    
                    <label>
                        <input type="checkbox" name="makeNumber" id="makeNumber"> Include a number 
                    </label>
                </div>
        
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="makeSymbol" id="makeSymbol"> Include a symbol
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary" value="submit"> Submit </button>
            </form>
         
        </div>
    </div>
    
   <br>
    
    <div class="col-md-12 text-center">
		<p><a href='http://xkcd.com/936/'>About XKCD passwords</a></p>
    	<a href='http://xkcd.com/936/'><img class="img-responsive center-block" src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd.com/936/"></a>
    	<br><br>
	</div>

</div><!-- END container -->
</body>
</html>