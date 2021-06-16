<?php
	require 'assets/inc/header.php';
?>


<!---END OF HEADER-->
<section id="herosection">
<div id="lefthero">
<h1><span class="highlight">Immerse yourself in Unix for web development.</span></h1>
<p>Our Unix tutorial is a very hands on experience. Within our tutorials, you will get to learn different areas of Unix so you can excel your web development career. Our tutorial is a very user friendly guide that will explain many useful topicss from organizing and maintaining your file structure, to logging into remote servers.
</p>
</div>

<div id="righthero">
</div>
</section>

<!--STEP BY STEP SLIDESHOW-->

<section id="virtualmachine">
	<h3>How to get a terminal up and running with VMware</h3>

		<div class="stepleft">
			<img class="steppic" style="float:right; width: 70%;" src="assets/images/login0.PNG">
			<p>Before you can use Unix, you will need to download VMware Workstation Pro 16. A virtual machine is a virtualization/emulation of a computer system. You are going to go to RIT's software center and download VMware workstation 16 pro</p>
			<b><a href="https://rit.onthehub.com/WebStore/ProductsByMajorVersionList.aspx?cmi_cs=1&cmi_mnuMain=aec980ad-9d85-ea11-812a-000d3af41938">RIT Software Center</a></b>
		</div>
		<div class="stepright">
			<img class="steppic" style="width:100%;" src="assets/images/login1.png">
			<p>Click the "Add to Cart" button for VMware workstation pro 16.</p>
		</div>
		<div class="stepleft">
			<img class="steppic" style="float:left; width:50%" src="assets/images/login2.png">
			<p>Once you have checked out (the software is free), hit the "Download" button to download the VMware workstation.</p>
		</div>
		<div class="stepright">
			<img class="steppic" style="float:right" src="assets/images/login3.png">
			<p>After you have downloaded your VMware workstation, step through the setup wizard to set up your VM.</p>
		</div>
		<div class="stepleft">
			<img class="steppic" src="assets/images/login4.png">
			<p>Once it prompts you to install after you go through the setup wizard, select the "install" button.</p>
		</div>
		<div class="stepleft">
			<img class="steppic" src="assets/images/login5.JPG">
			<p>Go to the link below to download a VM called CentOS.</p>
			<b><a href="https://www.centos.org/download/">CentOS download</a></b>
		</div>
		<div class="stepleft">
			<img class="steppic" src="assets/images/login6.JPG">
			<p>After you have installed CentOS, open VMware workstation pro and go to your settings, then select "options". In the "Working directory" text box, provide the corret file path where your CentOS download is located.</p>
		</div>
		<div class="stepleft">
			<img class="steppic" src="assets/images/login7.JPG">
			<p>Once you provided the select file path, power on the VM by selecting the green play button in the top left corner of VMware. Once you power on the CentOS VM, it will prompt you to enter a password. Enter "student" as the password.</p>
		</div>
        <div class="stepleft">
			<img class="steppic" src="assets/images/login8.JPG">
			<p>Once you are logged in, right click anywhere on your desktop and select "Open Terminal".</p>
		</div>
		<div class="stepleft">
			<img class="steppic" src="assets/images/login9.JPG">
			<p>Now, once you have a terminal open, you are ready to start learning Unix!</p>
		</div>

	

</section>

<!-- Determine your experience level-
<section id="experiencesection">
	<h4>Determine your skill level so you know the right place to begin. 
	</h4>

<div id="experiencelevel">
		<div>
			<img class="levelimg" src="assets/images/placeholder.png">
			<h3>Beginner</h3>
			<ol>
				<li>Directories</li>
				<li>File Content</li>
				<li>Printing</li>
			</ol>
		</div>
		<div>
			<img class="levelimg" src="assets/images/placeholder.png">
			<h3>Intermediate</h3>
			<ol>
				<li>Searching Files</li>
				<li>Wild Cards</li>
				<li>Processes</li>
				<li>Managing Files</li>
			</ol>
		</div>
		<div>
			<img class="levelimg" src="assets/images/placeholder.png">
			<h3>Advanced</h3>
			<ol>
				<li>File Permissions</li>
				<li>File Editing</li>
			</ol>


		</div>
</div>

</section> -->


<?php
	require 'assets/inc/footer.php';
?>