<?php
	require 'assets/inc/header.php';
?>




	<!-- HEADER SECTION ENDS ABOVE, ADVANCED CONTENT BEGINS BELOW-->



	<div class="overview">
		<button class="nextbutton" onclick="location.href='nano.php'">
			<h6>Next Topic: <span style="font-weight:200">Text editing</span></h6>
		</button>
		<h1><b>Understanding Unix: Changing Owner and Group</b></h1>
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
				<h2>chown</h2>
				<h4>Changing Owner and Group</h4>
				<h4><i>Syntax: chown [options] User [group] files</i></h4>
			</div>
			<div class="command-overview">
				<h4>The Chown command allows you to change the ownership of a file directory or a link.
					All files in Linux are associated with an owner and group and have permissions for access rights for
					the owner, groups and others.
					To see these permissions and the current owner and group, use the ls -l command.
					This will also let you see the ownership of each file and the groups associated with them. </h4>
			</div>
			<hr>
			<div class="command-content">
				<div class="commandflex-left">
					<p>This will change the ownership of file1 to a owner named linuxize:</p>
				</div>
				<div class="commandflex-right">
					<pre>
                    <code class="code">
[student ~]$ chown linuxize file1
                    </code>
                    </pre>
				</div>
				<div class="commandflex-left">
					<p>You can also change the group of a file. To do this use the following syntax. </p>
				</div>
				<div class="commandflex-right">
					<pre>
                    <code>
[student ~]$ chown :www-data file1
                    </code></pre>
				</div>
				<div class="commandflex-left">
					<p>
						This will change the group of file1 to a group called www-data.
						You'd want to do this if you wanted to change the different groups of people that can have
						access to the file.
						You will also be able to give the groups and owners different permissions as when you use the
						chmod command.
						You can also change the owner and the gorup of a file in the same command line.
					</p>
				</div>
				<div class="commandflex-right">
					<pre>
<code>
[student ~]$ chown linuxuser:group3 sample3
                    </code></pre>
				</div>
			</div>
		</section>
	</div>
	<div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>