<form action="PHP/register.php" method="POST">
    <div id="register_form" style="display:none;" class="card cardActive">
        <p>Register</p>
        <input name="username" type="text" placeholder="username" required />
        <br>
        <input name="email" type="email" placeholder="email" required />
        <br>
        <input name="password" id="psw1" title="Uppercase, Lowercase, number, more than 8"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" placeholder="password" required />
        <br>
        <input name="password2" id="psw2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninput="checkPasswordMatch()"
            type="password" placeholder="Re-type password" required />
        <p id="confirmation"></p>
        <input type="submit">
    </div>
</form>