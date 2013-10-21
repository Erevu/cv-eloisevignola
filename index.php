
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Graham Saulnier Curriculum Vitae </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum Vitae for Graham Saulnier">
    <meta name="author" content="Graham Saulnier">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <script>

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36795011-1']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

</script>
  
  </head>

<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
    <a href="https://github.com/Boumbles/cv-grahamsaulnier"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
    <div class="container">
    
    <header class="jumbotron">
        
    <div class="row">
    <div class="span12">
        <h3 style="text-align: center; text-style: italic">Curriculum Vitae for</h3>

      <h1 style="padding: 10px 0px; text-align: center; font-size: 60px; line-height: 70px;">Graham Saulnier</h1>
    <span class="" style="text-align: center;"> 
        <address>
		<a href="http://www.github.com/boumbles" target="_blank">github profile</a><br />
		<a href="mailto:#grahamsaulnier@gmail.com">grahamsaulnier@gmail.com</a><br />
		<a>+1.514.892.3986</a>

        </address>
    </span>
        </div>
    </div> 

    </header>

<!--<section id="about">
      <div class="row">

      <div class="page-header">
 <h2>About</h2>
      </div>
          </div> 
          <div class="row">
      
      <div class="span12">Graham Saulnier</div>
      </div> 

      </section>-->


      
      
      
      <section id="experience">
            <div class="row">

      <div class="page-header">
      <h2>Professional Experience </h2>
      </div>
    </div> <!-- end row -->
    <?php


	position("Mira Geoscience","Montreal, QC","Software Developer","11/12-Present",'
    <ul>
    <li>Designed and developed a number of modules for the Gocad Mining Suite in C++</li>
    <li>Porting large legacy program with no documentation from VCL to Qt</li>
        Some code refactoring in places where implementation not ideal</li>
    <li>Created a new developer workflow based on 
        <a href="http://nvie.com/posts/a-successful-git-branching-model/" target="_blank">nvie\'s branching model </a>
        and trained collegues in git usage</li>
    <li>Updated CI build scripts to be more flexible with our new git branching model</li>
    <li>Helped redesign Redmine workflows to allow developers to work in a somewhat agile environment while 
        still giving the ability for business to have complete analysis documents readily available</li>
    <li>Technology used: C++, Qt, OpenGL, Jenkins, git, Github, Redmine</li>
    </ul>',"http://textreject.com/");
    </ul>', "http://wute.org");

           ?>

    </ul>', "");


	position("Longbow Advangtage","Montreal, QC","Software Analyst","01/11-10/12",'
	<ul>
	<li>Maintained code base between several teams with members using mixed unconnected VCS including some not using any</li>
	<li>Design and development of custom shipping module client</li>
	<li>Maintained legacy code controlling various systems including: 
        <ul><li type="square">shipping, receiving, inventory management, work assignment</li></ul>
    </li>
    <li>Technology used: C, C#, Java, MSQL, Oracle, cvs, svn, git, Jira</li>
	
      <div class="page-header">
      <h2>Personal Assessment of Technical Skills</h2>
      </div>
    </div> <!-- end row -->
<div class="row">
    <h3>Systems and Electrical Engineering</h3>
	

<?php
iprogram('Control Engineering','75');
iprogram('Signal Processing', '65');
iprogram('Operations Research', '80');
iprogram('System Design', '60');
iprogram('Matlab','65');
iprogram('Mathematical Modeling', '75');
?>


</div>
      <section id="education">
        <div class="row">
            <div class="page-header">
                <h2>Education</h2>
            </div>
        </div> <!-- end row -->
        <?php
            position("Concordia University","Montreal, QC","Bachelor of Computer Science",
                     "Completed December 2010",'',"");
        ?>

      </section>
            <div class="row">
                <h3>Computer Science</h3>
      
    </div> <!-- end row -->
<div class="row">

    
    <div class="span8">
<?php
position("Using skill scale based on Google's self questionnaire.","",
         '<ul><li><a href="https://gist.github.com/Boumbles/e66e2a55713fc818d2aa">Gist containing the score descriptions</a></li></ul>',
         "" , "", "");
iprogram('C','40');
iprogram('C++','60');
iprogram('C#','40');
iprogram('Java','30');
iprogram('SQL','30'); 
iprogram('Git','60');

</div>
<div class="span4">
    <div class="well">
        <h4>Selected Projects</h4>
        <hr />
        <ul>
        <?php
			project('Google AI Challenge','', 'https://github.com/Boumbles/AIChallenge');
			project('COMP376 - Video Games ','','https://github.com/Boumbles/comp-376');
			project('COMP371 - Computer Graphics','','https://github.com/Boumbles/comp-371');
			project('COMP353 - Databases','','https://github.com/Boumbles/comp-353');
        ?>
        </ul>
		<a class="pull-right btn btn-small btn-inverse" href="http://github.com/boumbles">Github Profile <i class="icon-arrow-right icon-white"></i></a><br />
    </div>
</div>
</div>
      
      </section>
      
      
      <section id="honors">
            <div class="row">

      <div class="page-header">
      <h2>Other Skills</h2>
      </div>
    </div> <!-- end row -->
    <div class="row">
    <div class="span8">
    <?php
    
	extra('Languages (fluent)','English, French');
    
    ?>
    </div>
	
            <li>Fox 2 Now: <a href="http://fox2now.com/2012/10/31/text-reject/">Interview on Fox 2 News St. Louis for Text Reject </a></li>

    </div>


      </section>

      <footer style="padding-top: 20px;">
    <hr />

      <p style="text-align: center">
        
        <a href="#">Graham Saulnier</a> 2012</p>
      </footer>      

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>

  </body>
</html>

<?php
// =========================================================
/* 

These are some functions to make uniform sections

*/

function position($company,$city,$job,$dates,$blob,$link) {
    /*
    This function is for use in the experience section. It unififes formatting for the various positions. 
    */
    
    echo '
        <div class="row" style="padding: 35px 0 4px 0;">
            <div class="span8"><h4 style="margin: 0">'.$company;
                if (!empty($link)) {
                    echo ' <a href="'.$link.'" target="_BLANK"><span class="badge">Website <i class="icon-arrow-right icon-white"></i></span></a>';
                }
            echo '</h4> 
            
            </div>  
            <div class="span4"><h4 class="pull-right hidden-phone" style="margin: 0">'.$city.'</h4>
            </div>
            
        </div> <!-- end row-->
            
        <div class="row">
            <div class="span6"><span style="font-style:italic; font-size: 15px;">'.$job.'</span></div>  
            <div class="span6">
            <span class="visible-phone label">'.$dates.'</span>
            <span class="hidden-phone pull-right" style="font-style:italic; font-size: 15px;" >'.$dates.'</span>
            
            </div>
        </div> <!-- end row-->
        ';
        if (!empty($blob)) {
            echo '
            <div class="row" style="padding-top: 8px;"><div class="span12">'.$blob.'</div></div>';
            }   
            
}


function iprogram($language,$percent) {
    // Progress bars for technical section
    echo '
    <div class="row">
        <div class="span3"
        <p><h4 style="text-align: right" class="hidden-phone">'.$language.'</h4></p>
        <p><span class="badge visible-phone" style="text-align: center">'.$language.'</span></p>
        </div>
        <div class="span4">
          <div class="progress" style="margin: 10px 0 10px 0; height: 22px;">
            <div class="bar" style="width: '.$percent.'%;"></div>
          </div>
        </div>
        <div class="span1"></div>
    </div>
    ';
    
}

function project($name,$look,$code) {
    // Makes lists for displaying projects
    echo '<li style="padding-top: 12px">';
    
    if (!empty($look)) {
        // link to look at completed project
        echo '<a href="'.$look.'" target="_BLANK" >'.$name.'</a>';
    }
    else {
        echo $name;
    }
    
    if (!empty($code)) {
        // link to look at completed project
        echo ' <a href="'.$code.'" target="_BLANK""><span class="badge badge-info">Code <i class="icon-arrow-right icon-white"></i></span></a>';
    }
    echo '</li>';
}

function extra($title,$blob) {
    echo '<div class="row" style="padding-top:30px">
                <div class="span3">
                    <span class="pull-right hidden-phone"><strong>'.$title.'</strong></span>
                    <span class="visible-phone badge">'.$title.'</span>
                </div>
                <div class="span5">
                    '.$blob.'
                </div>
            </div>';
                
}
?>
