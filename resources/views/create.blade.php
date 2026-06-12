<!DOCTYPE html>
<html>

<head>
    <title>Zirlai Thar Ziah Luhna</title>
</head>

<body style="font-family: Arial, sans-serif; padding: 20px;">

    <h2>Zirlai Thar Dah Luhna Form</h2>

    <form action="/students" method="POST">

        @csrf

        <div style="margin-bottom: 10px;">
            <label>Name: </label><br>
            <input type="text" name="name" required style="padding: 5px;">
        </div>

        <div style="margin-bottom: 10px;">
            <label>Course: </label><br>
            <input type="text" name="course" required style="padding: 5px;">
        </div>

        <button type="submit" style="padding: 10px 20px; background-color: green; color: white; border: none; cursor: pointer;">
            Save
        </button>

    </form>

</body>

</html>