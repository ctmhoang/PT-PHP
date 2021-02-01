<form method="POST">
    <label for="name">Name: <input type="text" name="name" id="name"></label>
    <br>
    <label for="age">Age: <input type="number" name="age" id="age"></label>
    <br>
    <button>Submit</button>
</form>

<?php
if (isset($_POST['name'])) {
    echo $_POST['name'] . ' is ' . $_POST['age'] . ' years old';
}
