document.getElementById("regForm").addEventListener("submit", function(event) {

    let nev = document.getElementById("nev").value;
    let mobil = document.getElementById("mobil").value;
    let email = document.getElementById("email").value;

    
    let nevRegex = /[0-9]/;

    if (nevRegex.test(nev)) {
        alert("A név nem tartalmazhat számot!");
        event.preventDefault();
    }

    let mobilRegex = /^[0-9+\/#\- ]+$/;

    if (!mobilRegex.test(mobil)) {
        alert("A mobil mezőben csak számok és +, /, -, # jelek lehetnek!");
        event.preventDefault();
    }

    let emailRegex = /^[^@\s]+@[^@\s]+\.[a-zA-Z]{2,}$/;

    if (!emailRegex.test(email)) {
        alert("Hibás email cím!");
        event.preventDefault();
    }

});