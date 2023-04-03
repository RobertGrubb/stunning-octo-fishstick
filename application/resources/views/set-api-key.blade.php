@include('globals/header')

<main class="form-signin w-100 m-auto">
    <form action="/save" method="POST">
        <h1 class="h3 mb-3 fw-normal">Please provide the following</h1>

        <div class="form-floating mb-3">
            <input @if ($key) value="{{$key->value}}" @endif type="text" name="key" class="form-control"
                id="apiKeyInput" placeholder="Mailerlite API Key">
            <label for="apiKeyInput">Mailerlite API Key</label>
        </div>

        @csrf
        <button class="w-100 btn btn-lg btn-primary" type="submit">Save</button>

        @if ($key)
        <a class="w-100 btn btn-lg btn-light mt-2" href="/">Cancel</a>
        @endif
    </form>
</main>

@include('globals/footer')