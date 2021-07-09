<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre del usuario']) !!}

     
    @error('name')
        <small class="text-danger">{{$message}} </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Email del usuario']) !!}

    @error('email')
        <small class="txt-danger">{{$message}}</small>   
    @enderror
</div>

<div class="form-group">
    {{-- {!! Form::label('password', 'password') !!}
    {!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el password']) !!} --}}

    <div class="row">
        <div class="col-md-6"> 
            <label>Password</label>
            <div class="input-group">
                <input ID="txtPassword" name="password" type="Password" Class="form-control">
            <div class="input-group-append">
                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
            </div>
        </div> 

    </div>


    @error('password')
        <small class="txt-danger">{{$message}}</small>   
    @enderror
</div>

<br>

{{-- <div class="form-group">
    {!! Form::label('password_confirmation', 'Confirmación de Password') !!}
    {!! Form::text('password_confirmation', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el password']) !!}

 

    @error('password_confirmation')
        <small class="txt-danger">{{$message}}</small>   
    @enderror
</div> --}}



