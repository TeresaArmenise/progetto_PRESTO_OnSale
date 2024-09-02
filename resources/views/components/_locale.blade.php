<form class="d-inline mb-1" action="{{ route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn p-0 m-0">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="25" height="25" alt="" />
    </button>
</form>