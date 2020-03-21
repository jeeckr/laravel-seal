<form action="/sender" method="POST">
    @csrf
    <input type="text" name="message">
    <input type="submit">
</form>