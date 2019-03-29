@foreach ($users as $usere)
{{$usere->nama}}
@endforeach

{!! Form::open( ['url' => '/datane']) !!}

    <!-- <div class="form-group">
      {!! Form::label('make', 'Make') !!}
      {!! Form::text('make', '', ['class' => 'form-control']) !!}
    </div> -->

    <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
    </div>

    <div class="form-group">
      {!! Form::label('model', 'Model') !!}
      {!! Form::text('model', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Add the Car!</button>

  {!! Form::close() !!}

  @if (empty($nama))
  kosong
  @else
  {{$nama}}
  @endif

