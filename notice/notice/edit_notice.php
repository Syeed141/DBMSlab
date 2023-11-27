<!DOCTYPE html>
<html>
<head>
    <title>Edit Notice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2577a9;
        }
    </style>
</head>
<body>
    <h1>Edit Notice</h1>
    <form method="POST">
        <label for="new_title">Title:</label>
        <input type="text" name="new_title" value="<?php echo $title; ?>"><br>
        <label for="new_content">Content:</label>
        <textarea name="new_content"><?php echo $content; ?></textarea><br>
        <input type="submit" value="Update Notice">
    </form>
</body>
</html>
