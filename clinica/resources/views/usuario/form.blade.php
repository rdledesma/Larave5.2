<label>Nombre</label>
        <input type="name" name="name" value = "{{$user->name}}" required placeholder="Nombre ...">

        <label>email</label>
        <input type="tex" name="email" value = "{{$user->email}}" required placeholder="Email">

        <label>pass</label>
        <input type="password" name="pass" value = "{{$user->password}}" required placeholder="Contraseña">

        <div class="form-group">
             <button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-default " type="reset">Limpiar</button>
				<a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
		</div>
        