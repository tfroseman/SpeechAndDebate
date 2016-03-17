function save_account($id) {
    $.ajax({
            method: "POST",
            url: "/user",
            data: {name: "John", location: "Boston"}
        })
        .done(function (msg) {
            alert("Data Saved: " + msg);
        });
}

function remove_account($id) {
    $.ajax({
            method: "DELETE",
            url: "/account/"+$id,
            data: {"_token": $('meta[name="csrf-token"]').attr('content')}
        })
        .done(function (msg) {
            $("#"+$id).remove();
        })
        .error(function (msg){
            console.log(msg);
            $('#error_message').text(" There was an error processing your request. Status Code:" + msg.status);
            $('#error_message').show();
        });
}