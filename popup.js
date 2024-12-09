document.getElementById("main_contact_form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah pengiriman formulir secara default
    
    // Menampilkan pop-up dengan pesan
    alert("Thank you, the message has been sent. Please confirm via WhatsApp number 085600601616.");
    
    // Reset formulir setelah pengiriman
    this.reset();
});
