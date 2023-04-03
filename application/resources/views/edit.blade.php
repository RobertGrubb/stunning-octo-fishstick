@include('globals/header')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto p-4 py-md-5">
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                    <span class="fs-4">Edit Subscriber: {{$subscriber->email}}</span>
                </a>
            </header>

            @if (Session::get('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif

            @if (Session::get('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
            @endif

            <form action="/update/{{$subscriber->id}}" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input value="{{$subscriber->name}}" type="text" name="name" class="form-control"
                                placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select name="country" class="form-select" aria-label="Country list">
                                <option>Select Country...</option>
                                @foreach ($countries as $c)
                                <option @if ($c==$subField($subscriber->fields, 'country')) selected="selected" @endif
                                    value="{{$c}}">{{$c}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="/" class="btn btn-light w-100">Cancel</a>
                                </div>
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary w-100">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('globals/footer')