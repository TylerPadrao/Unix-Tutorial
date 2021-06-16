<?php
	require 'assets/inc/header.php';
?>
  




    <div class="quiz" id="quiz3">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">User Commands</span></h1>
    <button class="nextbutton" onclick="location.href='cp.php'">
      <h6>Up Next: <span style="font-weight:200">Managing Files & Directories</span></h6>
    </button>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>What command shows the history of the past 10 commands you have used in your UNIX terminal?
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "incorrect1" id="q1ans1"/><label for="q1ans1"> whoami 9</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans2"/><label for="q1ans2"> myHistory 10</label><br>
		<input type="radio" name="q1" value= "correct" id="q1ans3"/><label for="q1ans3"> History 10</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans4"/><label for="q1ans4"> showMyHistory 10</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. The “Whoami” command shows the current user.
 </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        myHistory is not an existing command in UNIX. You do have the right idea though...
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">Incorrect. 
        showMyHistory is not an existing command in UNIX. You do have the right idea though…

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The “history” command displays the history of your passed executed commands. With the command being followed by a number (in this case, 10), this allows us to see the past 10 commands!
      </p>
    </div>

  </div>



  <div class="question">
    <h4>What command is used to display the current user?
    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> WhoAmI</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans2"/><label for="q2ans2"> whoami</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans3"/><label for="q2ans3"> WHOAMI</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> WhoamI</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. The syntax is not correct.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Almost! The syntax is not correct.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Close! The syntax is not correct.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! Using the “whoami” command displays the current user in the terminal.
      </p>
    </div>

</div>



<div class="question">
  <h4>What command shows the history of the past 4 commands you have used in your UNIX terminal?

  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "correct" id="q3ans1"/><label for="q3ans1"> history 4</label><br>
<input type="radio" name="q3" value= "incorrect1" id="q3ans2"/><label for="q3ans2"> myHistory 4</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans3"/><label for="q3ans3"> showMyHistory 4</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> Whoami 4</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        myHistory is not an existing command in UNIX. You do have the right idea though...
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        showMyHistory is not an existing command in UNIX. You do have the right idea though…
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Not quite. The “Whoami” command shows the current user.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! The “history” command displays the history of your passed executed commands. With the command being followed by a number (in this case, 4), this allows us to see the past 4 commands!


      </p>
    </div>


</div>



<div class="question">
  <h4>How can you execute a past command by using the event number? Let the event number be 1256.


  </h4>

<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "incorrect1" id="q4ans1"/><label for="q4ans1"> execute 1256</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans2"/><label for="q4ans2"> history 1256</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans3"/><label for="q4ans3"> ?1256</label><br>
<input type="radio" name="q4" value= "correct" id="q4ans4"/><label for="q4ans4"> !1256</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite! Using “Execute” is not the correct way to view past commands based on the event number.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Not quite. Using “History” is not the correct way to view past commands based on the event number.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Close! Although the “?” is not correct syntax to view a past command by an execution number.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! Using an “!” followed by the event number 1256 will execute the past command associated with 1256.


    </p>
    </div>


</div>










<button class="quizbutton" onclick="submitAnswers(quiz3);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
