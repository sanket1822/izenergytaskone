<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>


<style>
    #custom-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;    
    width: 100%;
    max-width: 800px;
    margin: 10px auto;
    padding: 20px;
    box-sizing: border-box;
    background-color: #f9f9f9;
    border-radius: 8px;
    border: 1px solid #ddd;
    
}

#custom-form .form-container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

#custom-form .left-container, #custom-form .right-container {
    width: 48%;
}

#custom-form label {
    font-weight: bold;
}


#custom-form input[type="text"], #custom-form input[type="email"], #custom-form textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#custom-form textarea {
    resize: vertical;
}

/* Styling for submit button */
#custom-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
}

#custom-form input[type="submit"]:hover {
    background-color: #45a049;
}

h1 {
    padding-top: 20px;   
    padding-bottom: 20px; 
    margin-top: 30px;     
    margin-bottom: 30px;  
    text-align: center;   
}

</style>



<div class="contact-container">
    <div class="contact-form">
        <h1 id="headerOne">Contact Us</h1>

       

        <form method="post" action="" id="custom-form">
            <div class="form-container">
                <div class="left-container">
                    <p>
                        <label for="name">Full Name (Required)</label><br>
                        <input type="text" id="name" name="name" required>
                    </p>

                    <p>
                        <label for="email">Email (Required)</label><br>
                        <input type="email" id="email" name="email" required>
                    </p>
                </div>

                <div class="right-container">
                    <p>
                        <label for="phone">Telephone (Optional)</label><br>
                        <input type="text" id="phone" name="phone">
                    </p>

                    <p>
                        <label for="message">Message (Required)</label><br>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </p>
                </div>
            </div>

            <p>
                <input type="submit" name="submit_contact" >
            </p>
        </form>
    </div>
</div>

<script>
    document.getElementById("custom-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Get form values
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;

        // Log the values to the console
        console.log("Form submitted with details:");
        console.log("Name: " + name);
        console.log("Email: " + email);
        console.log("Phone: " + phone);
        console.log("Message: " + message);

        // Optional: Show an alert with the submitted details
        alert("Form submitted with details:\n" +
              "Name: " + name + "\n" +
              "Email: " + email + "\n" +
              "Phone: " + phone + "\n" +
              "Message: " + message);
    });
</script>

<?php
get_footer();
?>