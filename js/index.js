$("#formIndex").on("submit", function(){
    console.log("HICE UN SUBMIT!");    

    var data = $("#formIndex").serialize();

    $.post("ajax.php?action=newMatch", data, function(result){
        console.log(result);
    }, "json");

});

$("#selectTeamA").on("change", function(){
    
});

$("#selectTeamB").on("change", function(){

});

