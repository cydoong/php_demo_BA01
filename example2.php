<!DOCTYPE html>

<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web</title>
    </head>

    <body>

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
</body>
</html>