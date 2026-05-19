function validateName() {
    let name = document.getElementById("name");
    let error = document.getElementById("error");

    let regex = /^[A-Za-z][A-Za-z.-]*\s+[A-Za-z.-]+$/;

    if (name === "") {
        error.innerHTML = "Name cannot be empty";
    }

    if (!regex.test(name)) {
        error.innerHTML = "Enter at least two words, start with letter, only letters . or - allowed";
    }

    error.innerHTML = "";
}