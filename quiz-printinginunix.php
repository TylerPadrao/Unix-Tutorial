<?php
	require 'assets/inc/header.php';
?>
  




    <div class="quiz" id="quiz6">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">Printing in Unix</span></h1>
    <button class="nextbutton" onclick="location.href='chmod.php'">
      <h6>Up Next: <span style="font-weight:200">File Permissions</span></h6>
    </button>
    
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>What command is used to display a line or a string of text passed in as an argument?


      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "incorrect1" id="q1ans1"/><label for="q1ans1"> print</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans2"/><label for="q1ans2"> display</label><br>
		<input type="radio" name="q1" value= "correct" id="q1ans3"/><label for="q1ans3"> echo</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans4"/><label for="q1ans4"> show</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! In other coding languages, the “print” command is often used to display a string of text, but not in Unix.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Not quite. The “display” command is not a command to display a line or string of text passed in as an argument.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">
        Not quite. The “show” command is not a command to display a line or string of text passed in as an argument.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! To display a line of text to the command prompt in Unix, you must use the echo command.
      </p>
    </div>

  </div>



  <div class="question">
    <h4>How would you display "Hello World" to the terminal?
    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> show "Hello World"</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans2"/><label for="q2ans2"> display "Hello World"</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans3"/><label for="q2ans3"> print "Hello World"</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans4"/><label for="q2ans4"> echo "Hello World"</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. “show” is not the correct syntax to display a string to the terminal.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Not quite. “display” is not the correct syntax to display a string to the terminal.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Close! “Print” is often used in different languages to display a string, but not in Unix.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The “echo” command is used to display a string of text to the terminal. “Hello World” will display to the terminal using the “echo” command.

      </p>
    </div>

</div>



<div class="question">
  <h4>
    What escape character can be used to print a new line?
</h4>
<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "correct" id="q3ans1"/><label for="q3ans1"> echo "\n"</label><br>
<input type="radio" name="q3" value= "incorrect1" id="q3ans2"/><label for="q3ans2"> echo "\t"</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans3"/><label for="q3ans3"> echo "\f"</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> echo "\g"</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! “\t” is used to print a tab, but not used to print a new line.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Not quite. The “\f” is not the correct escape character for printing a new line.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Not quite. The “\g” is not the correct escape character for printing a new line.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! To print a new line, you can use the “\n” escape character. 
        </p>
      </div>


</div>



<div class="question">
  <h4>
    What escape character can be used to print a tab?
</h4>
<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "incorrect1" id="q4ans1"/><label for="q4ans1"> echo "\j"</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans2"/><label for="q4ans2"> echo "\n"</label><br>
<input type="radio" name="q4" value= "correct" id="q4ans3"/><label for="q4ans3"> echo "\t"</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans4"/><label for="q4ans4"> echo "\g"</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. “\j” is not the correct escape character to print a tab.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Close! “\n” is used to print a new line, but not used to print a tab
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Not quite. The “\g” is not the correct escape character for printing a tab.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
      Correct! To print a tab, you can use the “\t” escape character. 

    </p>
    </div>


</div>



<div class="question">
  <h4>
    How would you print the following text?

    “Hi there,
    How are you?”
</h4>    
<form method="post" name="q5">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q5" value= "correct" id="q5ans1"/><label for="q5ans1"> echo “Hi there,\n\tHow are you?”</label><br>
<input type="radio" name="q5" value= "incorrect1" id="q5ans2"/><label for="q5ans2"> echo “Hi there,\t\nHow are you?”</label><br>
<input type="radio" name="q5" value= "incorrect2" id="q5ans3"/><label for="q5ans3"> echo “Hi there,\j\gHow are you?”</label><br>
<input type="radio" name="q5" value= "incorrect3" id="q5ans4"/><label for="q5ans4"> echo “Hi there,\g\kHow are you?”</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! You are using the correct escape characters, but not in the correct order.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Not quite. The “\j” and “\g” are not the correct escape characters for a next line, then a tab.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Not quite. The “\g” and “\k” are not the correct escape characters for a next line, then a tab.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! To print the following text, we have to use a new line and tab escape characters. The “\n” is an escape character for a new line. The “\t” is the escape character for a tab.


    </p>
    </div>


</div>





<button class="quizbutton" onclick="submitAnswers(quiz6);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
