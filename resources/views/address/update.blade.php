<h1>Update Address</h1>

<form action="/address" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="line_1" id="line_1" value="{{ $address->line_1 }}"><br /><br />
    <input type="text" name="line_2" id="line_2" value="{{ $address->line_2 }}"><br /><br />
    <input type="text" name="city" id="city" value="{{ $address->city }}"><br /><br />
    <input type="text" name="state" id="state" value="{{ $address->state }}"><br /><br />
    <input type="text" name="zip_code" id="zip_code" value="{{ $address->zip_code }}"><br /><br />

    <button type="submit">Edit Address</button>
</form>