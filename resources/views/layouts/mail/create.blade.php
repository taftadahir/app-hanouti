<form action="{{ route('mails.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="email" name="value" required placeholder="mail"><br>
    <select name="mailable_type" required>
        <option value="provider">provider</option>
        <option value="store">store</option>
        <option value="company">Company</option>
        <option value="user">Company</option>
    </select><br>
    <select name="mailable_id" required>
        <option value="1" data-type="provider">provider</option>
        <option value="2" data-type="store">store name</option>
    </select><br>
    <button type="submit">Create modele</button>
</form>
