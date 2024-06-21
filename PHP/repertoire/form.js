function validateForm(event) {
    const password = document.getElementById("pwd").value;
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;

    if (!regex.test(password)) {
        alert("Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.");
        event.preventDefault();
        return false;
    }

    return true; 
}
