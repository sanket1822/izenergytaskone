<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<div class="eligibility-checker">
    <h1>Eligibility Checker</h1>
    <form id="eligibility-form">
        <div id="step-1">
            <p class="question">Is anyone living at your property?</p>
            <ul>
                <li>Pension Guarantee Credit</li>
                <li>Income-related Employment and Support Allowance (ESA)</li>
                <li>Income-based Jobseeker's Allowance (JSA)</li>
                <li>Income Support</li>
                <li>Tax Credits (Child Tax Credits and Working Tax Credits)</li>
                <li>Universal Credit</li>
                <li>Warm Home Discount Scheme Rebate</li>
                <li>Working Tax Credit (WTC)</li>
                <li>Housing Benefit</li>
                <li>Pension Credit Saving Credit</li>
            </ul>
            <button type="button" class="next-step" data-next="step-2a">Yes</button>
            <button type="button" class="next-step" data-next="step-2b">No</button>
        </div>

        <div id="step-2a" class="hidden">
            <p class="question">What type of property do you have?</p>
            <button type="button" class="next-step eligible">House</button>
            <button type="button" class="next-step eligible">Flat</button>
            <button type="button" class="next-step eligible">Bungalow</button>
            <button type="button" class="back-step" data-next="step-1">Back</button>
        </div>

        <div id="step-2b" class="hidden">
            <p class="question">Do you have a combined household income of less than 31,000?</p>
            <button type="button" class="next-step" data-next="step-3a">Yes</button>
            <button type="button" class="next-step" data-next="step-3b">No</button>
            <button type="button" class="back-step" data-next="step-1">Back</button>
        </div>

        <div id="step-3a" class="hidden">
            <p class="question">What type of property do you have?</p>
            <button type="button" class="next-step eligible">House</button>
            <button type="button" class="next-step eligible">Flat</button>
            <button type="button" class="next-step eligible">Bungalow</button>
            <button type="button" class="back-step" data-next="step-2b">Back</button>
        </div>

        <div id="step-3b" class="hidden">
            <p class="question">Does anyone in your house suffer from a health condition?</p>
            <button type="button" class="next-step" data-next="step-4">Yes</button>
            <button type="button" class="ineligible">No</button>
            <button type="button" class="back-step" data-next="step-2b">Back</button>
        </div>

        <div id="step-4" class="hidden">
            <p class="question">What type of property do you have?</p>
            <button type="button" class="next-step eligible">House</button>
            <button type="button" class="next-step eligible">Flat</button>
            <button type="button" class="next-step eligible">Bungalow</button>
            <button type="button" class="back-step" data-next="step-3b">Back</button>
        </div>

        <div id="ineligible-message" class="hidden">
            <p class="question">Sorry, You aren't eligible for funding.</p>
            <button type="button" class="back-step" data-next="step-3b">Back</button>
        </div>

        <div id="eligibility-confirm" class="hidden">
            <p class="question">What energy measures do you currently have installed?</p>
            <label><input type="checkbox" name="measures" value="internal_wall"> Internal Wall Insulation</label><br>
            <label><input type="checkbox" name="measures" value="external_wall"> External Wall Insulation</label><br>
            <label><input type="checkbox" name="measures" value="solar"> Solar Panels</label><br>
            <label><input type="checkbox" name="measures" value="boiler"> Boiler</label><br>
            <label><input type="checkbox" name="measures" value="solid_fuel"> Solid Fuel</label><br>
            <label><input type="checkbox" name="measures" value="roof_insulation"> Roof Insulation</label><br>
            <button type="submit">Submit</button>
            <button type="button" class="back-step" data-next="step-4">Back</button>
        </div>
    </form>
</div>

<style>
.hidden { display: none; }

body, html {
    height: 100%;  /* Ensure the body takes full height of the viewport */
    margin: 0;
    padding: 0;
}

.eligibility-checker {
    display: grid;
    place-items: center;  /* Centers the content both vertically and horizontally */
    height: 100%;          /* Ensures full viewport height */
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

.question{
    font-size: 2em;
}

h1 {
    font-size: 2em;
    margin-bottom: 20px;
    text-align: center;
}

form {
    width: 100%;
    max-width: 600px;        /* Limits the width of the form */
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
}

button {
    margin: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.back-step {
    background-color: #ccc;
}

.back-step:hover {
    background-color: #bbb;
}

#ineligible-message {
    text-align: center;
    font-size: 1.2em;
    color: #d9534f;
}

#eligibility-confirm {
    font-size: 1.1em;
    text-align: left;
}

label {
    display: block;
    margin: 5px 0;
    text-align: left;
}

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".next-step").forEach(button => {
            button.addEventListener("click", function () {
                document.querySelectorAll("form > div").forEach(div => div.classList.add("hidden"));
                document.getElementById(this.dataset.next)?.classList.remove("hidden");
            });
        });

        document.querySelectorAll(".back-step").forEach(button => {
            button.addEventListener("click", function () {
                document.querySelectorAll("form > div").forEach(div => div.classList.add("hidden"));
                document.getElementById(this.dataset.next)?.classList.remove("hidden");
            });
        });

        document.querySelectorAll(".eligible").forEach(button => {
            button.addEventListener("click", function () {
                document.querySelectorAll("form > div").forEach(div => div.classList.add("hidden"));
                document.getElementById("eligibility-confirm").classList.remove("hidden");
            });
        });

        document.querySelectorAll(".ineligible").forEach(button => {
            button.addEventListener("click", function () {
                document.querySelectorAll("form > div").forEach(div => div.classList.add("hidden"));
                document.getElementById("ineligible-message").classList.remove("hidden");
            });
        });

        // Add event listener for form submission
        document.getElementById("eligibility-form").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent the form from actually submitting
            alert("Congratulations! You are most likely eligible for funding. Please contact our team for further details.");
        });
    });
</script>

<?php
get_footer();
?>
