   <?php include "includes/headerB.php"?>
   <p>
      <div id="card">
        <?php include "includes/contact_includeB.php"; #site keys & code here
                      "includes/multiple.php";
                      "includes/new-feedbackB.php";

        $toAddress = "kelly.chapman@seattlecentral.edu";  //place your/your client's email address here
        $fromAddress = "noreply@kellychapman.xyz"; 
        $toName = "Kelly"; //place your client's name here
        $website = "Big/Web Dev Overview";  //place NAME of your client's website

        echo loadContact("includes/multiple.php","includes/new-feedbackB.php")#demonstrates a contact form
        ?>
      </div>    
    </p>    
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
   <h3> The Design Cycle </h3>
   <p>Click a topic below for more information:</p>
  <!--Image Map Generated by http://www.image-map.net/ -->
 <!--Image from https://www.signitysolutions.com/blog/web-development-life-cycle/-->
<img src="assets/Artboard 1.png" usemap="#image-map" class="designLarge" alt="the design cycle">
<div id="designCycle_links">
  <map name="image-map">
    <area target="_top" alt="first" title="first" href="https://www.nngroup.com/articles/discovery-phase" coords="306,29,497,100" shape="rect">
    <area target="_top" alt="second" title="second" href="https://www.interaction-design.org/literature/article/stage-2-in-the-design-thinking-process-define-the-problem-and-interpret-the-results" coords="222,138,25,46" shape="rect">
    <area target="_top" alt="third" title="third" href="https://webflow.com/blog/the-modern-web-design-process-creating-sitemaps-and-wireframes" coords="299,108,503,190" shape="rect">
    <area target="_top" alt="fourth" title="fourth" href="https://www.freetutes.com/systemanalysis/sa2-development-of-software.html" coords="28,148,220,232" shape="rect">
    <area target="_top" alt="fifth" title="fifth" href="https://performancelabus.com/software-testing-importance-sdlc" coords="291,204,503,290" shape="rect">
    <area target="_top" alt="sixth" title="sixth" href="https://eternalsunshineoftheismind.wordpress.com/2013/03/02/the-maintenance-stage-of-the-sdlc" coords="21,237,229,335" shape="rect">
</map>

<ul class="designLinks">
 <li><a href="https://www.nngroup.com/articles/discovery-phase" target="_top">1) Discover: Research and Gather Key Information</a></li><br>
 <li><a href="https://www.interaction-design.org/literature/article/stage-2-in-the-design-thinking-process-define-the-problem-and-interpret-the-results" target="_top">2) Plan: Define the Problem</a></li><br>
  <li><a href="https://webflow.com/blog/the-modern-web-design-process-creating-sitemaps-and-wireframes" target="_top">3) Design Prototype: Create Wireframes and Sitemaps</a></li><br>
  <li><a href="https://www.freetutes.com/systemanalysis/sa2-development-of-software.html" target="_top">4) Code: Develop Content</a></li><br>
  <li><a href="https://performancelabus.com/software-testing-importance-sdlc" target="_top">5) Test, Review and Launch</a></li><br>
  <li><a href="https://eternalsunshineoftheismind.wordpress.com/2013/03/02/the-maintenance-stage-of-the-sdlc" target="_top">6) Maintain and Update</a></li><br>
  </ul>
</div>
</aside>
<?php include "includes/footerB.php"?>


