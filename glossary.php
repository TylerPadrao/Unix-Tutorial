  
<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->

    <div class="overview">
        <h1><b>Unix Glossary</b></h1>
        <p>This is the glossary of all the commands. They are organized by relative function. </p>
    </div>
    <div class="divider"></div>

    <button class="tablink" onclick="openPage('full-list', this, '#0E4D92')" id="defaultOpen">Full Glossary</button>
    <button class="tablink" onclick="openPage('begin', this, '#4682B4')">Terminal Navigation</button>
    <button class="tablink" onclick="openPage('inter', this, '#003152')">File Managment</button>
    <button class="tablink" onclick="openPage('adv', this, '#57A0D3')">System input/output</button>

    <div id="full-list" class="tabcontent">
        <h3 style="color: #0E4D92;">Full Glossary</h3>
        <table class="myTable">
            <tr class="header">
                <th style="width:60%;">Term</th>
                <th style="width:40%;">Definition</th>
            </tr>
            <tr>
                <td>mkdir</td>
                <td>Make directory</td>
            </tr>
            <tr>
                <td>cd</td>
                <td>Change directory</td>
            </tr>
            <tr>
                <td>pwd</td>
                <td>Print working directory</td>
            </tr>
            <tr>
                <td>dir</td>
                <td>List directory contents</td>
            </tr>
            <tr>
                <td>ls</td>
                <td>List command</td>
            </tr>
            <tr>
                <td>history</td>
                <td>See history of commands</td>
            </tr>
            <tr>
                <td>whoami</td>
                <td>Print the name of the user associated with the current user id</td>
            </tr>
            <!--Beginner Commands End-->
            <tr>
                <td>cat</td>
                <td>Allows users to create files, view contents of files and concatenate files as output to the terminal
                </td>
            </tr>
            <tr>
                <td>echo</td>
                <td>Display a line/lines of strings and text passed in as an argument</td>
            </tr>
            <tr>
                <td>find</td>
                <td>Allows users to search the file system</td>
            </tr>
            <tr>
                <td>rm</td>
                <td>Removes a specific file or directory</td>
            </tr>
            <tr>
                <td>rmdir</td>
                <td>Removes a directory from file system, only if directory is completely empty</td>
            </tr>
            <!--Intermediate Commands End-->
            <tr>
                <td>chmod</td>
                <td>Gives users permission to certain files</td>
            </tr>
            <tr>
                <td>chown</td>
                <td>Allows user to change ownership of a file directory or link</td>
            </tr>
            <tr>
                <td>nano</td>
                <td>Text editor made to run in a terminal window with a text based UI</td>
            </tr>
			<tr>
                <td>cp</td>
                <td>Copy files or directories</td>
            </tr>
			<tr>
                <td>mv</td>
                <td>Move files or directories</td>
            </tr>
			<tr>
                <td>ssh</td>
                <td>Secure Shell is used to remotely connect to other systems</td>
            </tr>
            <!--Advanced Commands End-->
        </table>
    </div>

    <div id="begin" class="tabcontent">
        <h3 style="color: #4682B4;">Terminal Navigation</h3>
        <table class="myTable">
            <tr class="header">
                <th style="width:60%;">Term</th>
                <th style="width:40%;">Definition</th>
            </tr>
            <tr>
                <td>cd</td>
                <td>Change directory</td>
            </tr>
            <tr>
                <td>pwd</td>
                <td>Print working directory</td>
            </tr>
            <tr>
                <td>history</td>
                <td>See history of commands</td>
            </tr>
            <tr>
                <td>whoami</td>
                <td>Print the name of the user associated with the current user id</td>
            </tr>
        </table>
    </div>

    <div id="inter" class="tabcontent">
        <h3 style="color: #003152;">File Managment</h3>
        <table class="myTable">
            <tr class="header">
                <th style="width:60%;">Term</th>
                <th style="width:40%;">Definition</th>
            </tr>
			<tr>
                <td>ls</td>
                <td>List command</td>
            </tr>
            <tr>
                <td>dir</td>
                <td>List directory contents</td>
            </tr>
            <tr>
                <td>find</td>
                <td>Allows users to search the file system</td>
            </tr>
            <tr>
                <td>rm</td>
                <td>Removes a specific file or directory</td>
            </tr>
            <tr>
                <td>rmdir</td>
                <td>Removes a directory from file system, only if directory is completely empty</td>
            </tr>
			<tr>
                <td>chown</td>
                <td>Allows user to change ownership of a file directory or link</td>
            </tr>
			<tr>
                <td>chmod</td>
                <td>Gives users permission to certain files</td>
            </tr>
			<tr>
                <td>cat</td>
                <td>Allows users to create files, view contents of files and concatenate files as output to the terminal</td>
            </tr>
			<tr>
                <td>mkdir</td>
                <td>Make directory</td>
            </tr>
			<tr>
                <td>cp</td>
                <td>Copy files or directories</td>
            </tr>
			<tr>
                <td>mv</td>
                <td>Move files or directories</td>
            </tr>
        </table>
    </div>

    <div id="adv" class="tabcontent">
        <h3 style="color: #57A0D3;">System input/output</h3>
        <table class="myTable">
            <tr class="header">
                <th style="width:60%;">Term</th>
                <th style="width:40%;">Definition</th>
            </tr>
			<tr>
                <td>echo</td>
                <td>Display a line/lines of strings and text passed in as an argument</td>
            </tr>
            <tr>
                <td>ssh</td>
                <td>Secure Shell is used to remotely connect to other systems</td>
            </tr>
            <tr>
                <td>nano</td>
                <td>Text editor made to run in a terminal window with a text based UI</td>
            </tr>
        </table>
    </div>

    <div class="divider1"></div>

<?php
	require 'assets/inc/footer.php';
?>