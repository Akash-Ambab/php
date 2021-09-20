<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form Validation</title>
</head>
<body>
    <div class="formContainer">
        <h3>Form Validation (Using JQuery)</h3>
        
        <form id="testForm" method="POST">
            <table>
                <tr>
                    <td class="lable">First Name <span>*</span></td>
                    <td class="control">
                        <input type="text" id="fname" name="fname">
                        <p id="fnameError"></p>
                    </td>
                </tr>
                <tr>
                    <td class="lable">Last Name <span>*</span></td>
                    <td class="control">
                        <input type="text" id="lname" name="lname">
                        <p id="lnameError"></p>
                    </td>
                </tr>
                <tr>
                    <td class="lable">Email Address <span>*</span></td>
                    <td class="control">
                        <input type="text" id="email" name="email">
                        <p id="emailError"></p>
                    </td>
                </tr>
                <tr>
                    <td class="lable">Password <span>*</span></td>
                    <td class="control">
                        <input type="password" id="pass" name="pass">
                        <p id="passError"></p>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="control"><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
        <h1 id="msg"></h1>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="action.js"></script>
</body>
</html>