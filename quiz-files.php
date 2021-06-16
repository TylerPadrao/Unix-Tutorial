<?php
	require 'assets/inc/header.php';
?>
  




    <div class="quiz" id="quiz2">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">Files</span></h1>
    <button class="nextbutton" onclick="location.href='history.php'">
      <h6>Up Next: <span style="font-weight:200">User Commands</span></h6>
    </button>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>What command and option is used to list files sorted by size?
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "incorrect1" id="q1ans1"/><label for="q1ans1"> ls -t</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans2"/><label for="q1ans2"> pwd myLocation</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans3"/><label for="q1ans3"> ls -l</label><br>
		<input type="radio" name="q1" value= "correct" id="q1ans4"/><label for="q1ans4"> ls -S</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        You are close! Remember, Ls -t is used for listing files sorted by time stamps, not size.      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Pwd is used for printing your current working directory, not listing files in your current directory.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">Incorrect. 
        Ls -l provides a long listing of files displaying user permissions, owners, a last modified time stamp, and other specific information.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Using the ls -S command and option allows you to list files within your current directory and also have them sorted by size from largest to smallest.
      </p>
    </div>

  </div>



  <div class="question">
    <h4>You want to see the contents of your exercise1.txt file. If you want to output the contents of the file to the terminal, what would be the best command?
    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> find command</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans2"/><label for="q2ans2"> cat command</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans3"/><label for="q2ans3"> nano command</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> echo command</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. The find command is used to search your file system.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Almost! Remember, nano is a text editor to edit files
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        The echo command is used to display a string to the terminal, not outputting the contents of a file to the terminal
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! You can use the cat command to output the contents of the file directly to the terminal.
      </p>
    </div>

</div>



<div class="question">
  <h4>What command and option is used to list files by the long listing format?

  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "incorrect1" id="q3ans1"/><label for="q3ans1"> ls -r</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans2"/><label for="q3ans2"> cd newLocation</label><br>
<input type="radio" name="q3" value= "correct" id="q3ans3"/><label for="q3ans3"> ls -l</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> ls -s</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! The “-r” option is used for recursively listing files.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Not quite. The cd command is used to change directories.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        The “-S” option is used to view the files sorted by size, not long listing format.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! Using the ls option with the “-l” option is used to long list files. You can see file permissions, last modified date, and other various information.

      </p>
    </div>


</div>



<div class="question">
  <h4>How would you create a file called file.txt with the cat command?

  </h4>

<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "incorrect1" id="q4ans1"/><label for="q4ans1"> cat &lt file.txt</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans2"/><label for="q4ans2"> cat &gt&gt&gt file.txt</label><br>
<input type="radio" name="q4" value= "correct" id="q4ans3"/><label for="q4ans3"> cat &gt file.txt</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans4"/><label for="q4ans4"> cat &lt file.txt</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! This is not the correct syntax to create a file with the cat command.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Not quite. The syntax is incorrect. Only one “&gt” is needed.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        There is no need for two “&lt”. Only one “&gt” is needed.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! To create a file with the cat command, you can use the cat command followed by a “&gt”, then the file name.

    </p>
    </div>


</div>




<div class="question">
  <h4>What command and option is used to list files sorted by a timestamp?
  </h4>

<form method="post" name="q5">

<!-- The <label> tags below  allow the user to click on the text -->
<input type="radio" name="q5" value= "correct" id="q5ans1"/><label for="q5ans1"> ls -t</label><br>
<input type="radio" name="q5" value= "incorrect1" id="q5ans2"/><label for="q5ans2"> ls -r</label><br>
<input type="radio" name="q5" value= "incorrect2" id="q5ans3"/><label for="q5ans3"> ls -l</label><br>
<input type="radio" name="q5" value= "incorrect3" id="q5ans4"/><label for="q5ans4"> ls -S</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Remember, the “-r” option is used to sort by files recursively.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Incorrect! The “-l” option is used for a long listing format which views file permissions, last modified date, and more various information for a file.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Almost! But remember, the “-S” option sorts the files by sizes, not time stamp.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The “-t” option is used to sort list filers by a timestamp.
      </p>
    </div>


</div>






<button class="quizbutton" onclick="submitAnswers(quiz2);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
