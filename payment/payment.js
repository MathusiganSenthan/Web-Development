< script >
    document.getElementById("payment-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Perform any necessary validation here

        // Display the success alert
        alert("Payment successful!");

        // Optionally, you can submit the form programmatically after displaying the alert
        // event.target.submit();
    }); <
/script>