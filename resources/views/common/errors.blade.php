@if (count($errors) > 0 ) 
    <!-- form error view -->

    <div class="alert alert-danger">
        <strong>Something went wrong</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
