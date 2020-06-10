<form action="{{ route('follows.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <select name="followable_type" required>
        <option value="company">company</option>
        <option value="store">store</option>
        <option value="user">user -seller -admin</option>
    </select><br>
    <select name="followable_id" required>
        <option value="1" data-type="company">company name</option>
        <option value="2" data-type="store">store name</option>
        <option value="2" data-type="user">seller name</option>
    </select><br>
    <button type="submit">Create delivery</button>
</form>
