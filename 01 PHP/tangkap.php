<DOCTYPE html>
    <html>
        <body>
            <a href="tangkap.php?v1=saya&v2=keren">$_GET</a>
            <br>
        </body>
    </html>
    <fieldset="ini">
        <label for="ini">DATA</label>
        <form method="POST" action="proses.php">
            <p>Nama : <input type="text" name="nama"></p>
            <p>Alamat : <input type="text" name="alamat"></p>
            <p><input type="submit" value="Proses" name="submit"></p>
        </form>
    </fieldset>