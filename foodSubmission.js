setTimeout(function(){
    $(".error").fadeOut();
},3000);

$("input").focus(function(evt){
    console.log(evt);
    var event = evt.currentTarget();
    event.addClass("selected");
})