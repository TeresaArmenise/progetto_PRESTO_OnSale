<form class="d-inline" action="{{ route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn p-0 m-0">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="20" height="20" alt="" />
    </button>
</form>