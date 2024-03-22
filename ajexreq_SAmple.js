<script>
document.getElementById("updateForm").addEventListener("submit", function(event) {
event.preventDefault(); // Prevent the default form submission

let formData = new FormData(this); // Get form data
let xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object
xhr.open("POST", this.action, true); // Open connection
xhr.onload = function() {
   // Handle response from the server
   if (xhr.status >= 200 && xhr.status < 300) {
       // Request was successful
       alert("Record updated successfully!");
       console.log(xhr.responseText); // Log response
       // You can perform further actions here, such as showing a success message
   } else {
       // Request failed
       console.error(xhr.statusText); // Log error message
   }
};
xhr.onerror = function() {
   // Handle connection error
   console.error("Request failed"); // Log error message
   // You can perform further actions here, such as showing an error message
};
xhr.send(formData); // Send form data to the server
});
</script>