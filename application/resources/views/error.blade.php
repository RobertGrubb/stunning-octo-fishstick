@include('globals/header')

<main class="form-signin w-100 m-auto text-center">
    <h1 class="h3 mb-3 fw-normal">Error</h1>
    <p>Mailerlite returned "{{$error->message}}"</p>

    @if (isset($cta))
    <a href="{{$cta->link}}" class="btn btn-primary w-100">{{$cta->title}}</a>
    @else
    <a href="/" class="btn btn-primary w-100">Try Again</a>
    @endif
</main>

@include('globals/footer')