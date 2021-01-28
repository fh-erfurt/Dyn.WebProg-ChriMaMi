var counter = 0;

$("#leftBox").onclick(function(){
    if(counter != 0){
        counter = counter -1;
    }
    else{
        counter = 0;
    }
    $("#centerBox a").text(counter);
});