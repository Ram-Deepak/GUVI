function submit(){
    $.ajax({
        url : "/register",
        method: "POST",
        data : {
            "myData" : "Hello world"
        },
        success : function(response){
            console.log(response);
        },
        error : function(){
            console.log("error");
        }
    })
}