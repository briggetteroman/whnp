function fazerLogin (){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var data = {
        "username" : username,
        "password" : password
    }

    if (username && password) {
        // Serializacao do objeto
        fetch("/login", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)
        });

    } else {
        alert ("preencher dados!");
    }
}