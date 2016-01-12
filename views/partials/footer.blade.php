<footer class="container">
    <div class="row">
        <div class="col-md-12">
            @if(!empty($user))
              Logged in as <div class="label label-info">{{{$user->email}}}</div>
            @else
              Not logged in
            @endif

        </div>
    </div>
</footer>
