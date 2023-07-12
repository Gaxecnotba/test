<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="myfile">Selec a file</label>
        <input id="file_input" type="file">
        <p id="file_result"></p>
        <input id="file_submit" type="submit">
        <input type="file" name="profile_pic" >
        <br>   
        
        <script>
            let fileInput = document.getElementById("file_input");
            let fileResult = document.getElementById("file_result");
            let fileSubmit = document.getElementById("file_submit");

            fileInput.addEventListener("change", function() {
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size;
                const fileMb = fileSize / (1024 ** 2);
            if (fileMb >= 2) {
                fileResult.innerHTML = "Please select a file less than 2MB.";
                fileSubmit.disabled = true;
            } else {
                fileResult.innerHTML = "Success! Your file is " + fileMb.toFixed(1) + "MB.";
                fileSubmit.disabled = false;
            }
        }
    });

        </script>
        <input type="submit">
    </form>
</body>
</html>