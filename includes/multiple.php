<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
      <br><strong>Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
    <br>
</div>
<div>	
    <label>
       <br> <strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
    <br>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        <br><strong> What brings you here today?</strong></br><select name="_What_brings_you_here_today" required="required" title="What brings you here is required" tabindex="30">
            <option value="Select">Select a category</option><br>
            <option value="Problem / solution search result">Problem / solution search result</option><br>
            <option value="I'd like to learn more about ____">I'd like to learn more about ____</option><br>
            <option value="Someone mentioned your website">Someone mentioned your website</option><br>
            <option value="I noticed your ad">I noticed your ad</option><br>
            <option value="Other">Other</option><br>
        </select>
    </label>
</div>

<div>
    <br></br>	
    <fieldset class="choose">
    <label><legend><strong>Let's talk about your service needs</strong>&nbsp;</legend></label><br>
    <br>
    <label><input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40"/>New website design and/or development&nbsp;&nbsp;</label></br>
    <label><input type="checkbox" name="Interested_In[]" value="Website Redesign" tabindex="40" />Website redesign&nbsp;&nbsp;</label></br>
    <label><input type="checkbox" name="Interested_In[]" value="Special Application" tabindex="40"/>Special applications&nbsp;&nbsp;</label></br>
    <label><input type="checkbox" name="Interested_In[]" value="Feature Replacement"tabindex="40"/>Feature updates&nbsp;&nbsp;</label></br>
    <label><input type="checkbox" name="Interested_In[]" value="Other"tabindex="40"/>Other</label></br>
    </fieldset>
</div>

    <div>
    <br></br>		
    <fieldset>
        <label><legend><strong>Would you like to join our mailing list?</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></legend></label><br>
        <br>
        <label><input type="radio" name="Join_Mailing_List?" value="Yes" required="required" title="Mailing list is required" tabindex="40"/> Yes&nbsp;&nbsp;</label>
        <label><input type="radio" name="Join_Mailing_List?" value="No"/> No&nbsp;&nbsp;</label>
       <!-- <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />-->
    </fieldset>
    <br>
</div>
<div>	
    <label>
        <strong>Comments:</strong>&nbsp;</br><textarea name="Comments"  cols="40" rows="4" placeholder="Feedback is appreciated" tabindex="60"></textarea>
    </label>
    <br>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<br>
<div>
    <input class="button" type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

