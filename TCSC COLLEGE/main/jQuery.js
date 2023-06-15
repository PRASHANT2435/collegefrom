/*$(document).ready(){
    var bsccs = {
        sem1: "sem 1",
        sem2: "sem 2",
        sem3: "sem 3",
        sem4: "sem 4",
        sem5: "sem 5",
        sem6: "sem 6",

    };

    var bscit ={
        sem1: "sem 1",
        sem2: "sem 2",
        sem3: "sem 3",
        sem4: "sem 4",

    }

    $("#course").change(function(){
        $("#sem").empty();
        var level =$("#course").find(":selected").val();

        if (level == "junior") {
            $.each(bsccsOptions, function (key, value) {
              $option = $("<option></option>").attr("value", value).text(key);
              $("#course").append($option);
            });
           
        }else if (level == "bscit") {
            $.each(bscitOptions, function (key, value) {
              $option = $("<option></option>").attr("value", value).text(key);
              $("#course").append($option);
            });
            
          } 

    };

});*/
$(document).ready(function (){
    var ugOptions = {
        BSc: "BSC",
        BComm: "BCOMM",
    };

    var pgOptions = {
        MSc: "MSC",
        MComm: "MCOMM",
    };

    $("#level").change(function (){

        $("#course").empty();
        var data = $("#level").find(":selected").val();

        if (data == "ug"){
            $.each(ugOptions, function(key, value){
                $option = $("<option></option>").attr("value", value).text(key);
                $("#course").append($option);
            });
        } else if (data == "pg"){
            $.each(pgOptions, function(key, value){
                $option = $("<option></option>").attr("value", value).text(key);
                $("#course").append($option);
            });

    });
});