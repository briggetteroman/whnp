function fazerRegistro (){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var data = {
        "username" : username,
        "password" : password
    }

    if (username && password) {
        // Serializacao do objeto
        fetch("/register", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)
        }).then((data) => data.json()).then((data) => {
            if (data.success){
                alert(data.message);
                document.location = "/login?success=true";
            } else {
                alert(data.message);
            }
        }).catch((error) => {
            console.log("deu ruim!");
            alert("Opsss, deu ruim!!!");
        });

    } else {
        alert ("preencher dados!");
    }
}