<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
        <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2>Example: Multi Select Dropdown with Checkbox using Bootstrap, jQuery and PHP</h2>
        <form class="form-signin" method="post" id="register-form" action="action.php">
        <div class="form-group">
        <select id="languages" name="languages[]" multiple >
        <option value="php">PHP</option>
        <option value="python">Python</option>
        <option value="javascript">JavaScript</option>
        <option value="java">Java</option>
        <option value="c">C</option>
        <option value="sql">SQL</option>
        <option value="ruby">Ruby</option>
        <option value=".net">.Net</option>
        </select>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">Submit</button>
        </div>
        </form>
        </div>
  <script>
        $(document).ready(function() {
            $('#languages').multiselect({
            nonSelectedText: 'Select Language'
            });
            });
 </script>
</body>
</html>
