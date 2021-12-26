window.onload = function () {
    loadComments();
    $("#nameRoom").text(get_cookie("room"));
    $("#btnToSendCom").click(sendComment);
    $("#btnSendVideo").click(function () {
       let url = $("#urlVideo").val();
       $("#frameVideo").attr("src", url);
    });
};

function sendComment() {
    let comment = $("#inputComment").val();
    console.log($("#inputComment").val());
    let user = get_cookie("user");
    let room = get_cookie("room");
    let promise = fetch("http://exploer.beget.tech/CinemaProj/Api/createComment.php",
        {
            method: "POST",
            body: `user=${user}&comment=${comment}&room=${room}`,
            headers: {
                "Content-type": "application/x-www-form-urlencoded;" +
                    " charset=UTF-8"
            }
        }).then(resp=>{
            if (resp.ok)
                loadComments();
    })
}

function createComment(User, Data, comment) {
    /*
        <div class="container cont-comment">
            <h5 class="hed-com">Vikter</h5>
            <p class="pad-left">I slomal</p>
        </div>
*/
    let comm = "        <div class=\"container cont-comment\">\n" +
        "            <h5 class=\"hed-com\">" + User +"</h5>\n" +
        "            <p class=\"pad-left\">" + comment +"</p>\n" +
        "        </div>\n";
    $("#contComment").append( comm);
}

function loadComments() {
    $("#contComment").empty();
    let promise = fetch("http://exploer.beget.tech/CinemaProj/Api/getComments.php",
        {
            method: "POST",
            body: `numRoom=${get_cookie("room")}`,
            headers: {
                "Content-type": "application/x-www-form-urlencoded;" +
                    " charset=UTF-8"
            }
        })
        .then(response => {
            response.json().then(data => {
                console.log(data);
                data.forEach(item => {
                    createComment(item[1], item[2], item[3]);
                })
            })
        })


}

function get_cookie(cookie_name) {
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
    if (results)
        return (unescape(results[2]));
    else
        return null;
}