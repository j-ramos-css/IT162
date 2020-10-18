<?php include 'includes/header.php';?>
<!-- Header ends here -->
<!-- START LEFT COL -->
<section>

	<h2>Contact Julio</h2>
	<p>Cheers!</p>

	
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
	
</aside>
<!-- END RIGHT COL -->

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "julioramos1993@gmail.com";  //place your/your client's email address here
        $toName = "Julio"; //place your client's name here
        $website = "IT162";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

<!-- START Footer -->
<?php include 'includes/footer.php';?>