<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('search') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="{{ $text }}" autocomplete="off" name="query">
                        <div class="input-group-append">
                            <button class="{{ $buttonType }}" type="submit"><i class="{{ $fontAwesome }}"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
