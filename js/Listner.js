export function signIn() {
    $("#invalidSignIn").hide();
    if (!$("#LoginSignIn").val().length || !$("#PassSignIn").val().length) {
        erPrint("Заполните поля логина и пароля","invalidSignIn")
    } else {
        let promise;
        promise = fetch("http://exploer.beget.tech/CinemaProj/Api/SignIn.php",
            {
                method: "POST",
                body: $("#formSignIn").serialize(),
                headers: {
                    "Content-type": "application/x-www-form-urlencoded;" +
                        " charset=UTF-8"
                }
            })
            .then(response => {
                if (response.ok) {
                    response.json().then(data => {
                        document.cookie = `user=${data["log"]}; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT`;
                        window.location.reload();
                    })
                } else {
                    erPrint("Введен не правильный логин или пароль","invalidSignIn");
                }
            });

    }
}

export function signUp() {
    console.log($("#formSignUp").serialize());
    $("#invalidSignUp").hide();
    if (!$("#LoginSignUp").val().length || !$("#PassSignUp").val().length || !$("#EmailSign").val().length||!$("#AgreePassSignUp").val().length) {
        erPrint("Заполните поля все поля формы","invalidSignUp");
    } else if ($("#AgreePassSignUp").val()!=$("#PassSignUp").val()){
        erPrint("Введите одинаковые пароли","invalidSignUp");
    } else {
        let promise;
        promise = fetch("http://exploer.beget.tech/CinemaProj/Api/SignUp.php",
            {
                method: "POST",
                body: $("#formSignUp").serialize(),
                headers: {
                    "Content-type": "application/x-www-form-urlencoded;" +
                        " charset=UTF-8"
                }
            })
            .then(response => {
                if (response.ok) {
                        $("#modalSignUp").modal('hide');
                        $("#modalSignIn").modal('show');
                } else {
                    erPrint("Логин занят","invalidSignUp");
                }
            });

    }
}

export function exit() {
    let promise = fetch("http://exploer.beget.tech/CinemaProj/Api/ExitForm.php", {
        method: "POST",
        headers: {
            "Content-type": "application/x-www-form-urlencoded;" +
                " charset=UTF-8"
        }
    }).then(req =>{
        if(req.ok){
            delete_cookie("user");
            window.location.reload();
        }
    })
}

function erPrint(text,row) {
    $("#"+row).show();
    $("#"+row).text(text);
}

function delete_cookie(cookie_name) {
    var cookie_date = new Date();  // Текущая дата и время
    cookie_date.setTime(cookie_date.getTime() - 1);
    document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}