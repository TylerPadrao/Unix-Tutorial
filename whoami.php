<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='quiz-usercommands.php'">
            <h6>Up Next: <span style="font-weight:200">User commands Quiz</span></h6>
        </button>
        <h1><b>Understanding Unix: Identifying current user</b></h1>
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
                <h2>whoami</h2>
                <h4>Identifying current user</h4>
                <h4><i>Syntax: “whoami”</i></h4>
            </div>
            <div class="command-overview">
                <h4>The whoami command is a simple command that displays the current user.</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To see the current user of the system, simply use the following command:
                        <br>
                        “whoami”
                        <br>
                        When using this command, you can see that the user is currently a “student” who is using this system.
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ whoami
student
[student ~]$
                    </code>
                    </pre>
                </div>

            </div>
        </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>
