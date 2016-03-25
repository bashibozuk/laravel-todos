<form method="post">
    {{  csrf_field()  }}
    <div>
        <label>Name</label>
        <input name="data[name]">
    </div>
    <div>
        <input type="submit" value="Send">
    </div>
</form>