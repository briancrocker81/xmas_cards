var word = "badger";
var input = "";
document.body.addEventListener('keypress',function(ev){
    input += String.fromCharCode(ev.keyCode);
    console.log(input);
    if(input == word){

        $('.eggy').html(function(i,v){
          var id = v.split('watch?v=')[1]; // get the id so you can add to iframe
          return '<iframe class="nivo" width="560" height="315" src="http://www.youtube.com/embed/' + id + '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
      });
      $( "#treasure" ).addClass( "show" );
        
    }
});

// reset input when pressing esc
document.body.addEventListener('keyup',function(ev){
    if(ev.keyCode == 27) input = "";
});

$('#badger-donkey').flexslider({
  controlNav: false,
  slideshowSpeed: 3500
});

var word = "donkey";
var input = "";
document.body.addEventListener('keypress',function(ev){
    input += String.fromCharCode(ev.keyCode);
    console.log(input);
    if(input == word){

        $('.eggy').html(function(i,v){
          var id = v.split('watch?v=')[1]; // get the id so you can add to iframe
          return '<iframe class="nivo" width="560" height="315" src="http://www.youtube.com/embed/' + id + '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
      });
      $( "#treasure" ).addClass( "show" );
        
    }
});

// reset input when pressing esc
document.body.addEventListener('keyup',function(ev){
    if(ev.keyCode == 27) input = "";
});

$('#badger-donkey').flexslider({
  controlNav: false,
  slideshowSpeed: 3500
});
