<?php
/**
 * Template Name: scaremailgeneratorpage
 *
 * @package grosser 
 * @subpackage grosser
 * @since grosser 1.0
 */

get_header(); ?>

	<div id="content">

        <div id="sidebar-projects">
        
         <a href="/wp-content/themes/grosser/images/scaremail-logo-800.png"> 
                   <img style="margin:20px 0 25px 0;padding:0px 5px 5px 5px;background-color:#747474;" alt="ScareMail Logo" src="/wp-content/themes/grosser/images/scaremail-logo-85.png" width="85" height="74">
         </a>

<!--
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fbengrosser.com%2Fprojects%2Fscaremail%2F&amp;width=105&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="margin-top:20px;margin-bottom:10px;border:none; overflow:hidden; width:105px; height:21px;" allowTransparency="true"></iframe>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bengrosser.com/projects/scaremail/" data-text="ScareMail makes email &quot;scary&quot; to disrupt NSA surveillance" data-via="bengrosser">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
-->

        <h3 style="margin-top:40px">project menu</h3>
        <div class="sidebox">
        <p style="font-size:70%">
        <a href="/projects/scaremail/#install">install</a><br/>
        <a href="/projects/scaremail/#intro">introduction</a><br/>
        <a href="/projects/scaremail/#demo">demo video</a><br/>
        <a href="/projects/scaremail/#why">why scary email?</a><br/>
        <a href="/projects/scaremail/#how">how it works</a><br/>
        <a href="/projects/scaremail/#generator">generator</a><br/>
        <a href="/projects/scaremail/#faq">faq</a><br/>
        <a href="/projects/scaremail/#exhibit">exhibitions</a><br/>
        <a href="/projects/scaremail/#source">source code</a><br/>
        <a href="/projects/scaremail/#related">related content</a><br/>
        <!--
        <a href="#install">install</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#intro">introduction</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#demo">demo video</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#why">why demetricate?</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#how">how it works</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#interview">interview</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#feedback">feedback</a><br/>
        <a href="http://bengrosser.com/projects/scaremail/#related">related content</a><br/>
        -->
        </p>
        </div>

            <h3>tagged in</h3>
            <?php include("sidebars/posttags"); ?>
            <!--
            <h3>site tags</h3>
            <?php include("sidebars/tags"); ?>
            -->
        </div>
			
    <div id="projects-single">

   <div id="projectpage-title">
        <h2><?php the_title(); ?></h2>
   </div>
   <div id="generator">

   <p>
   Press the button below to generate <a href="http://bengrosser.com/projects/scaremail/">ScareMail</a> text without using the browser extension. See the main <a href="http://bengrosser.com/projects/scaremail/">ScareMail</a> page to read about the project, or the <a href="http://bengrosser.com/projects/scaremail/install-scaremail/">Install ScareMail</a> page to install the work for use with Gmail.
   </p>

      <div id="generatorcontrols">
        <button id="smbutton" type="button">Generate ScareMail Text</button>
      </div>

      <div id="wordcount">
        <label for="numwords">Number of words to generate:</label>
        <input id="numwords" type="text" value="500">
        <span class="numwarning">(max is 40000)</span>

      </div>

      <div id="textblock">
        <div id="generatedtext" contenteditable="true"></div>
      </div>

      <div id="textnotes">
        <span class="textnote">Click generated text to select, then use copy/paste to grab it</span>
      </div>

      <script type="text/javascript">
        var MAX_NUMWORDS = 40000;

        $('#smbutton').click(function() {
            if($('#numwords').val() > MAX_NUMWORDS) {
                $('#numwords').val(MAX_NUMWORDS);
                $('.numwarning').show();
            } else if($('#numwords').val() <= MAX_NUMWORDS) {
                $('.numwarning').hide();
            }


            $('#generatedtext').html(
            getScaryStory($('#numwords').val()).replace(/<br><br>/g,'</p><p>')
            +'</p>');
            $('#textnotes').show();
        });

        $('#numwords').keyup(function(e) {
            if (e.keyCode == 13) {
                $('#smbutton').click();
            }
        });

        $("#textblock").click(function() {
          SelectText('generatedtext');
        });

        /* from Jason@stackoverflow http://stackoverflow.com/a/987376/348496  */
        function SelectText(element) {
            var doc = document
                , text = doc.getElementById(element)
                , range, selection
            ;    
            if (doc.body.createTextRange) {
                range = document.body.createTextRange();
                range.moveToElementText(text);
                range.select();
            } else if (window.getSelection) {
                selection = window.getSelection();        
                range = document.createRange();
                range.selectNodeContents(text);
                selection.removeAllRanges();
                selection.addRange(range);
            }
        }

      </script>


    </div>

<?php get_footer(); ?>
