<?php
	require 'assets/inc/header.php';
?>



	<!-- HEADER SECTION ENDS ABOVE, ADVANCED CONTENT BEGINS BELOW-->



	<div class="overview">
		<button class="nextbutton" onclick="location.href='quiz-remoteservers.php'">
			<h6>Up Next: <span style="font-weight:200">Remote Server Quiz</span></h6>
		</button>
		<h1><b>Understanding Unix: Secure shell protocol</b></h1>
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
				<h2>ssh</h2>
				<h4>Secure shell protocol</h4>
				<h4><i>Syntax: “ssh [connection ip/hostname]”</i></h4>
			</div>
			<div class="command-overview">
				<h4>SSH stands for secure shell protocol. It is used for remote login and execution of command-line
					functions. An extremely common use case is managing machines that you do not have easy physical
					access to. It is a lot easier to ssh in rather than setting up a keyboard and monitor for whatever
					you need to access.
					Once you have the shell open, you use the terminal just like you normally would. </h4>
			</div>
			<hr>
			<div class="command-content">
				<div class="commandflex-left">
					<p>To ssh into something, use the following command:
						<br>
						ssh [connection ip/hostname]
					</p>
				</div>
				<div class="commandflex-right">

				</div>
				<div class="commandflex-left">
					<p>This will establish a connection to our theoretical test.server.com. Upon all new connections,
						you will be asked if you
						would like to continue connecting. This is done for security reasons. If you trust that what you
						are connecting to is
						indeed what you want, a simple “yes” and depending on the environment your connection will be
						established.
						<br>
						<br>
						To connect to a specific username, you use username@serverip/hostname. If that user on the
						system has a password set you
						will need to enter that to proceed.
					</p>
				</div>
				<div class="commandflex-right">	
                <pre>
                    <code class="code">
[student ~]$ ssh test.server.com 
                    </code>
                </pre>
				</div>
				<div class="commandflex-left">
					<p>We can also use various options with the ssh command. Some of the options include:
						<br>
						-p (specifies port)
					</p>
				</div>
				<div class="commandflex-right">
					<pre>
                    <code class="code">
[student ~]$ ssh test.server.com -p 3333
                    </code>
                    </pre>
				</div>
				<div class="commandflex-left">
					<p> SSH by default uses port 22. If this is blocked for any reason, a good troubleshooting step is
						to try another port.
					</p>
				</div>
				<div class="commandflex-right">
					
				</div>
		</section>
	</div>
	<div class="divider1"></div>

<?php
	require 'assets/inc/footer.php';
?>