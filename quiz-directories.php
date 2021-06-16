<?php
	require 'assets/inc/header.php';
?>
  



    
    <div class="quiz" id="quiz1">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">Directories</span></h1>
    <button class="nextbutton" onclick="location.href='ls.php'">
      <h6>Up Next: <span style="font-weight:200">Files</span></h6>
    </button>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>How would you create a new directory called “newDirectory”?
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "correct" id="q1ans1"/><label for="q1ans1"> mkdir newDirectory</label><br>
		<input type="radio" name="q1" value= "incorrect1" id="q1ans2"/><label for="q1ans2"> cd newDirectory</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans3"/><label for="q1ans3"> pwd myLocation</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans4"/><label for="q1ans4"> cp currentFile newDirectory</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Cd is used to change your current directory.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Pwd is used for printing the current working directory you're in.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">Incorrect. 
        Cp allows you to copy a file from one location to another location.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct. To make a new directory, we use the command “mkdir” followed by the name of the new directory</p>
    </div>

  </div>



  <div class="question">
    <h4>What command and shortcut is used to go back to your home directory?</h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> dir -r homeDirectory</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans2"/><label for="q2ans2"> cd ~</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans3"/><label for="q2ans3"> cd ..</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> ls ~</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        “Dir” is used for listing directory contents, not changing directories. The “-r” option will list the content in the “homeDirectory” recursively.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Very close! “Cd ..” is a shortcut used for moving one level up a directory, not changing to your home directory.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Using the “ls” command allows you to list files within your current directory. The “~” cannot be used with the “ls” command, but could be used with another command…
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! To easily get back to your home directory, you can use the “~” after the “Cd” command which is a nice shortcut!</p>
    </div>

</div>



<div class="question">
  <h4>A user is confused where their current location is within their file structure. What command can be used to tell them where they are currently located?
  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "incorrect1" id="q3ans1"/><label for="q3ans1"> dir whereAmI</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans2"/><label for="q3ans2"> cp currentLocation</label><br>
<input type="radio" name="q3" value= "correct" id="q3ans3"/><label for="q3ans3"> pwd</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> ls</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. The “Dir” command is used to list the contents of a specific directory. 
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        The “cp” command is used to copy files from one location to another, not see where you are currently located.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Using the “ls” command allows you to list files within your current directory. The “-l” option is used to provide a long listing of the files within your current directory.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! The “pwd” command is used to print your current working directory. In other words, viewing your current working directory will tell you your location if you get lost.
      </p>
    </div>


</div>



<div class="question">
  <h4>You are in your home directory and want to move to a directory called “personalStuff” which is located within your home directory. What is the correct command to complete this action?
  </h4>

<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "correct" id="q4ans1"/><label for="q4ans1"> cd personalStuff</label><br>
<input type="radio" name="q4" value= "incorrect1" id="q4ans2"/><label for="q4ans2"> mv personalStuff</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans3"/><label for="q4ans3"> cd home/personalStuff</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans4"/><label for="q4ans4"> ls ../personalStuff</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        The “mv” command is not used for changing directories, it is used to move files and directories.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Close! Since you are already in your home directory, it is unnecessary to include it within your file path.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        “Ls” is used to list files and directories within a certain location in your file system.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! The “cd” command can be used to change directories. Since you are already in your home directory, all you need to do is jump one level to the “personalStuff” directory.
    </p>
    </div>


</div>




<div class="question">
  <h4>You are currently located in a directory called “firstDirectory” one level above the home directory. If you want to make a subdirectory called “subDirectory” inside of another directory called “secondDirectory” within your home directory, what command would you use?
  </h4>

<form method="post" name="q5">

<!-- The <label> tags below  allow the user to click on the text -->
<input type="radio" name="q5" value= "incorrect1" id="q5ans1"/><label for="q5ans1"> mkdir secondDirectory/subDirectory</label><br>
<input type="radio" name="q5" value= "correct" id="q5ans2"/><label for="q5ans2"> mkdir ../secondDirectory/subDirectory</label><br>
<input type="radio" name="q5" value= "incorrect2" id="q5ans3"/><label for="q5ans3"> dir second/subDirectory</label><br>
<input type="radio" name="q5" value= "incorrect3" id="q5ans4"/><label for="q5ans4"> cd ../secondDirectory/subDirectory</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! Since we are not in our home directory, we have to go back up a level in hierarchy.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        The “dir” command lists the contents of a directory, but doesn’t create a new directory.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        The “cd” command changes directories, but doesn’t make a new directory.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
      Correct! Since we are not in our home directory, we have to go up a level in hierarchy. 
      To get back to the home directory, we can use “../”. After we are in our home directory, 
      we then can use the second part of the file path “secondDirectory/subDirectory” 
      which creates a new subdirectory (“subDirectory”) within our “secondDirectory” directory.
    </p>
    </div>


</div>



<div class="question">
  <h4>You are currently located within your home directory. How would you view the contents of a directory called “secondDirectory”?
  </h4>

<form method="post" name="q6">

<!-- The <label> tags below  allow the user to click on the text -->
<input type="radio" name="q6" value= "incorrect1" id="q6ans1"/><label for="q6ans1"> mkdir secondDirectory</label><br>
<input type="radio" name="q6" value= "incorrect2" id="q6ans2"/><label for="q6ans2"> dir ../secondDirectory</label><br>
<input type="radio" name="q6" value= "incorrect3" id="q6ans3"/><label for="q6ans3"> cd secondDirectory</label><br>
<input type="radio" name="q6" value= "correct" id="q6ans4"/><label for="q6ans4"> ir secondDirectory</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Remember, the “mkdir” command creates a directory.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        The “../” is a shortcut for going up a directory in hierarchy. We do not have to go up a level in hierarchy since we are already in our home directory.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        The “cd” command changes directories, but doesn’t allow you to view the contents within a directory.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The “dir” command allows you to view contents within a directory! Using the “dir secondDirectory” 
        command allows you to see what contents are within the “secondDirectory”.
      </p>
    </div>


</div>





<button class="quizbutton" onclick="submitAnswers(quiz1);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>