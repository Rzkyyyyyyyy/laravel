@if (Session::has('succes'))
              <div class="pt-3">
              <div class="allert allert-success">
              {{ Session::get('success') }}
       </div>
       </div>
@endif

@if ($errors->any())
    <div class="pt-3">
        <div class="allert allert-danger">
            <ul>
                @foreach ($cerrors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif