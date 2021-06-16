<?php
	require 'assets/inc/header.php';
?>




	<!-- HEADER SECTION ENDS ABOVE, ADVANCED CONTENT BEGINS BELOW-->



	<div class="overview">
		<button class="nextbutton" onclick="location.href='quiz-fileeditingpermissions.php'">
			<h6>Next Topic: <span style="font-weight:200">File Permissions and Text Editing Quiz</span></h6>
		</button>
		<h1><b>Understanding Unix: Text editor</b></h1>
		<p>You are almost there to becoming a master at Unix! You will now start learning some advanced commands. 
			Within these lessons, you will learn about file permissions, a popular Unix 
			text editor, and also logging into remote servers.</p>

	</div>
	<div class="divider"></div>
	<div class="intro">
		<div class="intro-text">
			<h2>Advanced Command List</h2>
		</div>
		<div class="all-list">
			<div>
				<table class="for-all-content">
					<tr>
						<th>chmod</th>
						<td>Changing Permissions</td>

					</tr>
					<tr>
						<th>chown</th>
						<td>Changing Owner and Group</td>

					</tr>
					<tr>
						<th>nano</th>
						<td>Text editor</td>

					</tr>
					<tr>
						<th>ssh</th>
						<td>Secure shell protocol</td>

					</tr>
				</table>
			</div>
		</div>
	</div>

	<hr>
	<hr>

	<div class="command">
		<section>
			<div class="command-head">
				<h2>nano</h2>
				<h4>Text editor</h4>
				<h4><i>Syntax: “nano [filename]”</i></h4>
			</div>
			<div class="command-overview">
				<h4>Nano is a strong text editor that is made to run in a terminal window with a text based UI.
					It is used to edit text based files.
					If you need more features for editing you should use vim.</h4>
			</div>
			<hr>
			<div class="command-content">
				<div class="commandflex-left">
					<p>To open a file with nano, use the following command:
						<br>
						Nano [filename]
					</p>
				</div>
				<div class="commandflex-right">
					
				</div>
				<div class="commandflex-left">
					<p>This command will open up the file in the nano interface.
						We then can edit the ”allthedata.txt” file with the nano editor.
					</p>
				</div>
				<div class="commandflex-right">
					<pre>
                    <code class="code">
[student ~]$ nano allthedata.txt
                    </code>
                    </pre>
				</div>
		</section>
	</div>
	<div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>