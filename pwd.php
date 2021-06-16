<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='dir.php'">
            <h6>Next Topic: <span style="font-weight:200">List Directory Contents</span></h6>
        </button>
        <h1><b>Understanding Unix: Print Working Directory</b></h1>
        <p>Understanding many basic Unix commands is very useful and important for
        your web development career. Within these lessons, we will dive deeper
        into Directories and Files. We will also get to see how we can see our
        command history and who the current user is.
        </p>

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
                <h2>pwd</h2>
                <h4>Print Working Directory</h4>
                <h4><i>Syntax: “pwd [option]”</i></h4>
            </div>
            <div class="command-overview">
                <h4>Printing your working directory is a great little command.
                    Without any options it prints the symbolic path of wherever you currently are in the terminal.
                    What actually happens when you run the command is it prints the working directory path that is
                    stored in the environment variable $PWD. </h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>As you can see, it prints the symbolic path of the directory you are currently in. It is the same
                        as running pwd -L.
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ pwd
/home/student  
[student ~]$ pwd -L
/home/student  
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>This prints the absolute path of the directory you are in as opposed to the symbolic path. It is
                        the same as running /bin/pwd.<br>


                        -L (prints the symbolic path)<br>
                        -P (prints the absolute path)

                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code>
[student ~]$ pwd -P
/home/student  
[student ~]$ pwd -L
/home/student  
                    </code></pre>
                </div>
            </div>
        </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>