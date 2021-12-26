import * as Listner from './Listner.js';
import * as Page from './createPage.js';
window.onload = () => {
    loadCard();
    $(".Card-Custom").click(Page.loadPage);
    $("#btnToSignIn").click(function () {
        $('#modalSignIn').modal('hide');
    });
    $("#exitOnThis").click(Listner.exit);
    $("#btnSignIn").click(Listner.signIn);
    $("#btnToSignUp").click(function () {
       $('#modalSignUp').modal('hide');
    });
    $("#btnSignUp").click(Listner.signUp);
};

function loadCard() {
    for (let i = 0; i < 19; i++) {
        let temp = "Card" + i;
        $("#Container").append(createCard(temp, "Lorem Ipsum", temp));
    }
}

function createCard(title, description, idCard) {
    let element = "<div class=\"col-4 col-md-3 col-sm-3 Card-Custom\" id='" + idCard + "'\n" + 
        "                    <div class=\"card\" id=\"Card\">\n" +
        "                        <img class=\"card-img-top\" src=\"/img/slide1.png\" alt=\"Card image cap\">\n" +
        "                        <div class=\"card-body\">\n" +
        "                            <h5 class=\"card-title\">" + title + "</h5>\n" +
        "                            <p class=\"card-text\">" + description + "</p>\n" +
        "                        </div>\n" +
        "                    </div>\n" +
        "                </div>";
    return element;
}

