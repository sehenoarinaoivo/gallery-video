$(document).ready(function(){

        $("#video1").show()

        $("#video2").hide()
        $("#video3").hide()
        $("#video4").hide()
        $("#video5").hide()
        $("#video6").hide()
        $("#video7").hide()
        $("#video8").hide()
        $("#video9").hide()
        $("#video10").hide()

    $(".sidebar ul #chanson ").click(function(){

        $("#video1").hide()
        $("#video2").show(700)
        $("#video3").hide()
        $("#video4").hide()
        $("#video5").hide()
        $("#video6").hide()
        $("#video7").hide()
        $("#video8").hide()
        $("#video9").hide()
        $("#video10").hide()
        // $("#table").css("background-image", 
        // "url(./img/backyellow.jpg)");
        /*div#videos-2 {
    position: absolute;
    margin-left: -34px;
}*/ 

    })

    $(".sidebar ul #lyric").click(function(){
        
        $("#video1").hide()
        $("#video2").hide()
        $("#video3").show(700)
        $("#video4").hide()
        $("#video5").hide()
        $("#video6").hide()
        $("#video7").hide()
        $("#video8").hide()
        $("#video9").hide()
        $("#video10").hide()
        
        // $("#table").css("background-image", 
        // "url(./img/Backblue.jpg)"); 

    })
//mdlo
// $("#carapuce").click(function(){
//     $(".modal-body").html("Carapuce")
// })

$(".sidebar ul #docum").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").show(700)
    $("#video5").hide()
    $("#video6").hide()
    $("#video7").hide()
    $("#video8").hide()
    $("#video9").hide()
    $("#video10").hide()
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");

})

$(".sidebar ul #new").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").hide()
    $("#video5").show(700)
    $("#video6").hide()
    $("#video7").hide()
    $("#video8").hide()
    $("#video9").hide()
    $("#video10").hide()
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");
    $("div#video5").css("margin-right","267px");
    $("div#video5").css("width","100%");

})

$(".sidebar ul #tuto").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").hide()
    $("#video5").hide()
    $("#video6").show(700)
    $("#video7").hide()
    $("#video8").hide()
    $("#video9").hide()
    $("#video10").hide()
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");

})

$(".sidebar ul #movie").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").hide()
    $("#video5").hide()
    $("#video6").hide()
    $("#video7").show(700)
    $("#video8").hide()
    $("#video9").hide()
    $("#video10").hide()
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");

})

$(".sidebar ul #cartoon").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").hide()
    $("#video5").hide()
    $("#video6").hide()
    $("#video7").hide()
    $("#video8").show(700)
    $("#video9").hide()
    $("#video10").hide()
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");

})

$(".sidebar ul #favoris").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").hide()
    $("#video5").hide()
    $("#video6").hide()
    $("#video7").hide()
    $("#video8").hide()
    $("#video9").show(700)
    $("#video10").hide()
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");

})

$(".sidebar ul #popular").click(function(){
    
    $("#video1").hide()
    $("#video2").hide()
    $("#video3").hide()
    $("#video4").hide()
    $("#video5").hide()
    $("#video6").hide()
    $("#video7").hide()
    $("#video8").hide()
    $("#video9").hide()
    $("#video10").show(700)
    // $("#table").css("background-image", 
    // "url(./img/backred.jpg)");

})


});

