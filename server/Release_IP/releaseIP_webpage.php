	// 
	// Replace the XXXXX login information with your own login
	// Releases the IP for the server or work station making the request and gives 24 hours access to Kortforsyningen, using your organization's login

	//If you are using a GIS application on a workstation please visit www.kortforsyningen.dk and use the Frig�r IP function on the frontpage

<?php 
	drupal_add_js('jQuery(document).ready(function () { jQuery.ajax({url: 	"http://kortforsyningen.kms.dk/?request=UnlockIP&login=XXXXX&password=XXXXX", type: "GET", crossDomain: true});})' , 'inline');
?>