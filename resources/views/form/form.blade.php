<form action="{{ route('nazwa_route') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="category">Kategoria filmu</label>
        <select name="category" id="category" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="title">Tytuł filmu</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="buyer_first_name">Imię kupującego</label>
        <input type="text" name="buyer_first_name" id="buyer_first_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="buyer_last_name">Nazwisko kupującego</label>
        <input type="text" name="buyer_last_name" id="buyer_last_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="birthdate">Data urodzenia</label>
        <input type="date" name="birthdate" id="birthdate" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="phone">Numer telefonu</label>
        <input type="tel" name="phone" id="phone" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Zapisz</button>
</form>
