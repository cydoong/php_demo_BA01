<?php if(!empty($message)): ?>
    <p style="color: green;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" action="" onsubmit="return validationForm()">
    <label for="email">Email address: </label>
    <input type="text" id="email" name="email">
    <button type="submit">Submit</button>
</form>

<script>
    function validationForm() {
        let emailInput = document.getElementById("email").value;
            if(emailInput.trim() === "") {
                alert("All fields are REQUIRED");
                return false;
            }

            return true;
}
</script>