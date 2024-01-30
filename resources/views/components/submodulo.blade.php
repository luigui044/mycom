<div class="col-md-3 text-center">
    <!-- Card -->
    <div class="card {{ $color }} @if ($darken != '0') {{ $darken }} @endif white-text">
        <div class="card-body pb-0">
            <i class="fas {{ $icon }} fa-3x pb-4"></i>
            <div class="d-flex justify-content-center">
                <p class="mb-0 h6">{{ $title }}</p>
                {{-- <p class="mb-0 hour">12:15 PM</p> --}}
            </div>
        </div>
        <hr style="color: white; background: white;">
        <div class="card-body pt-0">
            <a onclick="{{ $link }}" class="btn btn-rounded btn-dark">Acceder</a>

        </div>
    </div>
    <!-- Card -->
</div>
