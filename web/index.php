<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <a href="blog.php">Blogs</a>

    <h1>Piesakies webināram!</h1>
    
    <form action="/confirmation.php" method="POST">
        <label for="name">Vārds:</label>
        <input type="text" name="name" id="name"><br>

        <label for="name">Email:</label>
        <input type="email" name="email" id="email"><br>

        <select name="level">
            <option value="">--Lūdzu izvēlies līmeni--</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>

        <legend>Vai vēlies saņemt blablabla?</legend>
        <input type="radio" id="info_yes" name="info_choice" value="yes" />
        <label for="info_yes">Yes</label>

        <input type="radio" id="info_no" name="info_choice" value="no" />
        <label for="info_no">No</label>

        <br>
        <input type="submit" value="Sūtīt">
    </form>

    <?php
        $ary = [1,2,3]; // parasts indeksēts masīvs
        $person = [
            "name" => "Janis",
            "email" => "somemail@renars.lv",
            "level" => "Beginner"
        ]; // asociatīvs masīvs jeb "hash map"

        $names =[
            ["name" => "Janis", "email" => "somemail@renars.lv", "level" => "Beginner"],
            ["name" => "Antra", "email" => "somemail@antra.lv", "level" => "Intermediate"],
            ["name" => "John", "email" => "somemail@john.lv", "level" => "Advanced", "some_info" => [1,2,3]],
        ]; // daudzdimensionāls masīvs

        foreach($names as $name){
            echo "Vārds: "
                . $name["name"]
                . ", E-pasts: "
                . $name["email"]
                . ", Līmenis: "
                . $name["level"]
                . "<br>";
        }
    ?>

    <script src="app.js"></script>
</body>
</html>