<form method="POST" action="{{ str_replace('/delete','', Request::url()) }}">
    <div class="text-center">
        @csrf
        @method('delete')
        <i class="fas-fa-trush"></i>
        <div class="h3">Do you want Delete</div>
    </div>

    <div class="d-flex justify-content-end">
        <button class="btn btn-danger" type="submit">Confirm</button>
    </div>
</form>
