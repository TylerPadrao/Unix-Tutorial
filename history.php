<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='whoami.php'">
            <h6>Next Topic: <span style="font-weight:200">Print Current User Id</span></h6>
        </button>
        <h1><b>Understanding Unix: Viewing past commands</b></h1>
        <p>Understanding many basic Unix commands is very useful and important for
        your web development career. Within these lessons, we will dive deeper
        into Directories and Files. We will also get to see how we can see our
        command history and who the current user is.</p>

    </div>
    <div class="divider"></div>
    <div class="intro">
      <div class="intro-text">
        <h2>Beginner Command List</h2>
      </div>
      <div class="all-list">
        <div>
          <table class="for-all-content">
            <tr>
              <th>mkdir</th>
              <td>Creating Directories</td>
            </tr>
            <tr>
              <th>cd</th>
              <td>Change Directories</td>
            </tr>
            <tr>
              <th>pwd</th>
              <td>Print Working Directory</td>
            </tr>
            <tr>
              <th>dir</th>
              <td>Viewing Content in Directories</td>
            </tr>
          </table>
        </div>
        <div>
          <table class="for-all-content">
            <tr>
              <th>ls</th>
              <td>Listing Files</td>
            </tr>
            <tr>
              <th>cat</th>
              <td>Viewing Content in Files</td>
            </tr>
            <tr>
              <th>history</th>
              <td>Viewing past commands</td>
            </tr>
            <tr>
              <th>whoami</th>
              <td>Identifying current user</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <hr />
    <hr />

    <div class="command">
        <section>
            <div class="command-head">
                <h2>history</h2>
                <h4>Viewing past commands</h4>
                <h4><i>Syntax: “history”</i></h4>
            </div>
            <div class="command-overview">
                <h4>You used a certain command earlier and since then have entered many other commands in the terminal. 
                    There is also a lot of output within your terminal window. 
                    To scroll up and search for that specific command you used earlier can be a long and tedious process. 
                    The history command displays all of the past commands you have used.</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To list the past commands you used, simply use the history command:
                        <br>
                        "history"
                        <br>
                        As you can see, you see a long list of your previous commands along with their event number. 
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ history
1065  touch hey.txt
1066  ls
1067  touch gerry.txt
1068  ls
1069  dir -r
1070  dir -R
1071  cd ~
1072  ls Pictures
1073  ls -l Pictures
1074  [student ~]$ls -r Pictures
1075  ls -r Pictures
1076  ls -S Pictures
1077  ls -t Pictures
1078  history
[student ~]$
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>For example, if you simply want to see only your past 5 commands, you can just use “history 5” to view the past 5 commands.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ history 5
1077  ls -t Pictures
1078  history
1079  history 5
1080  ls
1081  history 5
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        You can also execute a command by using the event number. 
                        All you have to do is type ![event number] to execute a command based on its event number.
                    </p>
                </div>
                <div class="commandflex-right">  
                <pre>
                    <code>
[student ~]$ !1080
first_directory
second_directory
newFile1.txt
newFile2.txt
[student ~]$ 
                    </code></pre>
                </div>

            </div>
        </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>
