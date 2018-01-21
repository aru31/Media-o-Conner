
function printList( list ) {
  var listHTML = '<ol>';
  for (var i = 0; i < list.length; i += 1) {
    listHTML += '<li>' + list[i] + '</li>';
  }
  listHTML += '</ol>';
  print(listHTML);
}

function print(html) {
  document.write(html);
}


var playlist = [];


while(true){
var words =	prompt("Add a new Item... and when finished type 'quit'");

if (words.toLowerCase()!=='quit') {
playlist.push(words);
}
else{
	break;
}

}

printList(playlist);

$('li').on('click', function() {
	$(this).css("text-decoration","line-through");
});

