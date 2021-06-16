function switchTab(tab) {
  if (tab == beginner) {
    document.getElementById("beginner").style.display = "block";
    document.getElementById("intermediate").style.display = "none";
    document.getElementById("advanced").style.display = "none";

    document.getElementById("beginnertitle").style.backgroundColor = "#c5e1fb";
    document.getElementById("intermediatetitle").style.backgroundColor ="initial";
    document.getElementById("advancedtitle").style.backgroundColor = "initial";

  } else if (tab == intermediate) {
    document.getElementById("beginner").style.display = "none";
    document.getElementById("intermediate").style.display = "block";
    document.getElementById("advanced").style.display = "none";

    document.getElementById("beginnertitle").style.backgroundColor = "initial";
    document.getElementById("intermediatetitle").style.backgroundColor ="#c5e1fb";
    document.getElementById("advancedtitle").style.backgroundColor = "initial";

  } else if (tab == advanced) {
    document.getElementById("beginner").style.display = "none";
    document.getElementById("intermediate").style.display = "none";
    document.getElementById("advanced").style.display = "block";

    document.getElementById("beginnertitle").style.backgroundColor = "initial";
    document.getElementById("intermediatetitle").style.backgroundColor ="initial";
    document.getElementById("advancedtitle").style.backgroundColor = "#c5e1fb";
  }
}

function submitAnswers(q) {
  var questions = q.getElementsByTagName("form");
  var score = 0;

  //iterates through all questions to check for correct/incorrect answers
  for (let i = 0; i < questions.length; i++) {
    currentQuestion = questions[i].name;
    var str = "input[name='" + currentQuestion + "']:checked"; //string is created to access value of checked box
    var answer = $(str).val();

    //variables created for easy access for switch statement
    var incorrectResults = document.getElementsByClassName("incorrectResults");
    var correctResults = document.getElementsByClassName("correctResults");
    var incorrectOptions = incorrectResults[i].getElementsByClassName(
      "incorrectOption"
    );

    //clears all incorrect feedback from incorrectResutls div
    for (let option of incorrectOptions) {
      option.style.display = "none";
    }

    //checks which answer the user chose, incorrect options each have their own feedback
    switch (answer) {
      case "correct": //correct answer also adds 1 to score
        incorrectResults[i].style.display = "none";
        correctResults[i].style.display = "block";
        score += 1;
        break;
      case "incorrect1":
        correctResults[i].style.display = "none";
        incorrectResults[i].style.display = "block";
        incorrectOptions[0].style.display = "block";
        break;
      case "incorrect2":
        correctResults[i].style.display = "none";
        incorrectResults[i].style.display = "block";
        incorrectOptions[1].style.display = "block";
        break;
      case "incorrect3":
        correctResults[i].style.display = "none";
        incorrectResults[i].style.display = "block";
        incorrectOptions[2].style.display = "block";

        break;
    }

    //score text is cleared and then repopulated with the user's current score
    var scoreText = q.getElementsByClassName("score")[0];
    scoreText.innerHTML = " ";
    scoreText.innerHTML = "Your score: " + score + "/" + questions.length;
  }
}

//when hamburger menu is visible, opens up tabs on click instead of hover
function hamburger(tab) {
  var mediaQuery = window.matchMedia("(max-width:961px)");
  if (mediaQuery.matches) {
    var chosenTab = document.getElementById(tab);
    chosenTab.style.display = "block";
  }
}

//hamburger menu back arrow closes tab
function goback(tab) {
  var chosenTab = document.getElementById(tab);
  chosenTab.style.display = "none";
}

function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

