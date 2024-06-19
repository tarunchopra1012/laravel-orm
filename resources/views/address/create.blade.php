<h1>Create Address</h1>

<form action="/address" method="post">
    @csrf
    <input type="text" name="line_1" id="line_1"><br /><br />
    <input type="text" name="line_2" id="line_2"><br /><br />
    <input type="text" name="city" id="city"><br /><br />
    <input type="text" name="state" id="state"><br /><br />
    <input type="text" name="zip_code" id="zip_code"><br /><br />

    <button type="submit">Create Address</button>
</form>