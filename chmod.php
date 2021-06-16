<?php
	require 'assets/inc/header.php';
?>




	<!-- HEADER SECTION ENDS ABOVE, ADVANCED CONTENT BEGINS BELOW-->



	<div class="overview">
		<button class="nextbutton" onclick="location.href='chown.php'">
			<h6>Next Topic: <span style="font-weight:200">Chown Command</span></h6>
		</button>
		<h1><b>Understanding Unix: Changing Permissions</b></h1>
		<p>You are almost there to becoming a master at Unix! You will now start learning some advanced commands. 
			Within these lessons, you will learn about file permissions, a popular Unix 
			text editor, and also logging into remote servers.
		</p>
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
				<h2>chmod</h2>
				<h4>Changing User Permissions</h4>
				<h4><i>Syntax: “chmod [option] [mode] [file]”</i></h4>
			</div>
			<div class="command-overview">
				<h4>With the chmod command, you can give users permissions to certain files.
					Let’s say you have a group project that includes several people.
					You have several documents within a file share.
					You may only want some of the group members to be able to read the file while other users can read
					and edit the file.
					We can edit user permissions through using the chmod app.</h4>
			</div>
			<hr>
			<div class="command-content">
				<div class="commandflex-left">
					<p>To change file permissions for users, we can use the following command:
						<br>
						chmod [option] [mode] [file]
					</p>
				</div>
				<div class="commandflex-right">
					
				</div>
				<div class="commandflex-left">
					<p>Before we start using this command, we have to understand how values for different file modes
						work.
						File permissions are displayed within the following form:
						<br>
						-rwxr-xr-x
						<br>
						You are probably asking yourself what this sequence of random characters exactly means. There are 3 different groups of permissions for users which consists of owner, group, and all others. The first character within the sequence identifies whether the path is a directory or a file. If there is a “-” as the first character, this means the path is a file. If there is a “d” for the first character, this means the path is a directory.
					</p>
					<p>The next three characters are the file permissions for the owner. The “r” identifies the owner has permissions to read the file. The “w” identifies the owner has permission to write to the file. The “x” identifies the owner has permission to execute the file. </p>
					<p>The next three characters starting at the 5th character consists of “r-x”. These are the permissions for the group. There is nothing different about the group permissions, except that these permissions are for the group and not the owner. The “r” identifies the group has read permissions. Notice instead of a “w” for the write permissions, there is a “-” instead. The “-” indicates the group does not have write permissions. The “x” identifies the group has execute permissions for the file.</p>
					<p>The next three characters starting with the 8th character consists of “r-x”. This is the identical permissions from before, but with the only exception now being for all others instead of the group. The “r” identifies all others have read permissions. The “-” indicates all others do not have write permissions. The “x” identifies all others have execute permissions for the file.</p>
					<p>Instead of typing out all these specific characters, we can use a decimal value to modify permissions. Let’s take a look at the chart below:</p>
					<img src="" alt="chmod-table">
					<p>A very common decimal value for file permissions is 755. What does this decimal value mean? </p>
					<p>What we are doing here is changing the file permissions to 755 for “myFile.txt” You may be asking, “What does the 755 mean?” The first decimal value indicates the permissions for the owner. The second decimal value indicates the permissions for the group. The third decimal value represents the permissions for all others. In the chart, look at the 7 in the decimal value column. There are all “1” values (True values) within the r, w, and x columns. These true values mean that the owner has read, write, and execute permissions. </p>
					<p>The second decimal value which is a 5 represents the permissions for the group. If you look at the 5 in the decimal value column, you will see there is a “1” value for read and execute permissions and a “0” value (False value) for write permissions. This means that the group has read and execute permissions, but not write permissions. </p>
					<p>The third decimal value which is a 5 represents the permissions for all others. The permissions for all others is the same as the group permissions. If you look at the 5 in the decimal column, this means all others have read and execute permissions but not write permissions.</p>
					<p>These 3 decimal values combined which are 755, all represent specific permissions for the owner, group, and all others. You can combine any decimal values to form certain user permissions for the owner, group, and all others. 755 is commonly used for a decimal value and is also usually the default directory permissions. 664 is the usually the default permissions for a file. </p>
				</div>
				<div class="commandflex-right">
	
				</div>
				<div class="commandflex-left">
                    <p>
                        Now that you know about file permissions, we are going to start using the chmod command to change permissions for certain files and directories. We are using the chmod command to change the permissions of a directory in this example. As we talked about above, we are using a decimal value of 755 to change permissions for the directory. This decimal value allows the owner to have read, write, and execute permissions. The group has only read and execute permissions, but not write permissions. All others also only have read and execute permissions, but not write permissions. We are changing these permissions for the “myDirectory” directory.
                    </p>
                </div>
				<div class="commandflex-right">
					<pre>
                    <code>
[student ~]$ chmod 755 myDirectory
                    </code></pre>
				</div>
				<div class="commandflex-left">
                    <p>
                        The “-f” option is used to hide any error messages that may occur when changing the permissions of a file or directory. This file path is a path users don’t have ownership to so they cannot change the file permissions. When you type “chmod 755 /usr/bin”, it will display an error message saying “Operation not permitted”. When using the “-f” option, like the example above, the error message will not be displayed since this option suppresses any error messages. Remember what “755” does? This decimal value allows the owner to read, write, and execute a file. For groups and all others, they only have read and execute permissions but do not have write permissions.
                    </p>
                </div>
				<div class="commandflex-right">
					<pre>
                    <code>
[student ~]$ chmod -f 755 /usr/bin
                    </code></pre>
				</div>
				<div class="commandflex-left">
                    <p>
                        Using the “-c” command only gives user output when a change to a file or directory has occurred. Let's say you typed “chmod -c 755 first_directory” in the terminal window. Since the default permission for the “first_directory” directory is already 755, no output will be given. If you follow the example above, since we are changing the permissions to something different, the terminal will output what the previous file permissions are and also what they changed to. Before we conclude this option, what does the 750 decimal represent? The 7 means the owner has read, write, and execute permissions. The 5 means that only the group has read and execute permissions. The 0 means that all others don’t have read, write, or execute permissions.
                    </p>
                </div>
				<div class="commandflex-right">
					<pre>
                    <code>
[student ~]$ chmod -c 750 first_directory
                    </code></pre>
				</div>
				<div class="commandflex-left">
                    <p>
                        Within the “first_directory” directory, there are three files. “fileA.txt”, “fileB.txt”, and “fileC.txt” are within the directory. The normal default decimal value for file permissions is 644. If we used the “-r” option, this means we are recursively changing the permissions of the files inside the directory to a decimal value of 640. Again, what does the 640 represent? The 6 means that the owner has just read and write permissions, but not any execute permissions. The 4 means that the group just has read permissions. The 0 then represents all others, which identities neither read, write, or execute permissions.
                    </p>
                </div>
                <div class="commandflex-right">
					<pre>
                    <code>
[student ~]$ chmod -r 640 first_directory
                    </code></pre>
				</div>
		</section>
	</div>
	<div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>