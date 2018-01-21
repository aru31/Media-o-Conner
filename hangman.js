var wordletters = [];

var word = prompt("Enter the single word which u wanna make the other person guess...");

for(var i = 0; i<word.length; i+=1){
wordletters.push(word.charAt(i));
}
var count = word.length;


alert("Rules--> Max tries 6");
alert("Let the game Begin.... CLick ok to continue!!!");

for(var j = 0; j<6; j+=1){

var letter = prompt("Guess the word......"+(6-j)+" attempts left");

for(var k=0; k<6; k+=1){
if(wordletters[k] === letter ){
      count--;

}

}

if(count===0){
  break;
}

}

if(count===0){
  alert("Congratulations! You Won");
}
else
alert("You lose...Please try Again");





for(var i = 0; i<word.length; i+=1){

document.write(word[i] + "<br>");

}
