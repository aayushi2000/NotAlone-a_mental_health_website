
function Quiz(questions) {  //initializing quiz
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}

Quiz.prototype.getQuestionIndex = function() {  //retrieving question from array
    return this.questions[this.questionIndex];
}

Quiz.prototype.guess = function(answer) {  //main fn to calculate score
    if(this.getQuestionIndex().isCorrectAnswer(answer)) { //checking answer
        var ans = this.getQuestionIndex().isCorrectAnswer(answer);
      if(ans == "Never")
      {
      //this.score++;
    }
    else if(ans == "Sometimes")
    {
    this.score++;
    //this.score++;
    //this.score++;
  }
  else if(ans == "Frequently")
  {
  this.score++;
  this.score++;
  //this.score++;
}
 else if(ans == "Always")
{
this.score++;
this.score++;
this.score++;
}

}

    this.questionIndex++;
}

Quiz.prototype.isEnded = function() { //ending condition(check if length is valid)
    return this.questionIndex === this.questions.length;
}


function Question(text, choices, answer) { //defining question structure
    this.text = text;
    this.choices = choices;
    this.answer = answer;

}

Question.prototype.isCorrectAnswer = function(choice) { //return integer choice

    return choice;
}


function populate() {
    if(quiz.isEnded()) {
        showScores(); //score display
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess1("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess1(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess); //passing string answer as choice
        populate();
    }
};


function showProgress() { //current question number
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>We have evaluated your answers! </h1>";
    gameOverHTML += "<h2 id='score' style='margin-top:150px;'> Your score: " + quiz.score +" out of 27"+ "</h2>";
    if(quiz.score===0){
      gameOverHTML += "<h2 id='score'> CONGRATULATION!" + "</h2>";
      gameOverHTML += "<h2 id='score'> You are absolutly fit Mentally!" + "</h2>";
    }
    if(quiz.score>0 && quiz.score<=9)
    {
      gameOverHTML += "<h2 id='score'> You have normal mental conditions :)" + "</h2>";
    }
    if(quiz.score>9 && quiz.score<=18)
    {
      gameOverHTML += "<h2 id='score'> You have a moderate depression sign." + "</h2>";
    }
    if(quiz.score>18 && quiz.score<=27)
    {
      gameOverHTML += "<h2 id='score'>It is advisable that you take medical help :(" + "</h2>";
    }



    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions here
var questions = [
    new Question("How often have you been bothered by feeling down, depressed, irritable, or hopeless over the last two weeks?", ["Never", " Sometimes","Frequently", "Always"],  "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered that you have little interest or pleasure in doing things over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by trouble falling asleep, staying asleep, or sleeping too much over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered that you have poor appetite, weight loss, or overeating over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"],"Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by feeling tired, or having little energy over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by feeling bad about yourself – or feeling that you are a failure, or that you have let yourself or your family down over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered that you have trouble concentrating on things like school work, reading, or watching TV over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by moving or speaking so slowly that other people could have noticed? Or the opposite – being so fidgety or restless that you were moving around a lot more than usual over the last two weeks", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
    new Question("How often have you been bothered by thoughts that you would be better off dead, or of hurting yourself in some way over the last two weeks?", ["Never", "Sometimes", "Frequently", "Always"], "Never", " Sometimes","Frequently", "Always"),
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();
