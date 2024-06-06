function addToCart() {
    // Få produktinformasjonen (f.eks. produkt-ID, navn, pris) fra DOM eller en annen kilde
    var productId = "PRODUKT-ID";
    var productName = "Produktnavn";
    var productPrice = 10.99; // Pris i dette tilfellet

    // Opprett et objekt som representerer produktet
    var product = {
        id: productId,
        name: productName,
        price: productPrice
    };

    // Sjekk om handlekurven allerede eksisterer i Local Storage
    var cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Legg til produktet i handlekurven
    cart.push(product);

    // Lagre handlekurven til Local Storage
    localStorage.setItem("cart", JSON.stringify(cart));

    // Gi tilbakemelding til brukeren om at produktet ble lagt til
    alert("Produktet ble lagt til i handlekurven!");

    // Eventuelt oppdater handlekurvvisningen
    updateCartDisplay();
}

function updateCartDisplay() {
    // Oppdater handlekurvvisningen basert på innholdet i Local Storage
    var cart = JSON.parse(localStorage.getItem("cart")) || [];
    // Implementer logikk for å vise handlekurven på nettsiden
}