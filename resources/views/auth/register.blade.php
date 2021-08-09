@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class='text-3xl text-center font-bold'>Registro</h1>

<form action="" method="POST" class="mt-4" >
	@csrf
	<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Ingresa tu nombre" id="name" name="name" />
	@error('name')
		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $message }}</p>
	@enderror
	<input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Ingresa un usuario" id="username" name="username" />
	@error('username')
		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $message }}</p>
	@enderror
	<input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Ingresa tu correo" id="email" name="email" />
	@error('email')
		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $message }}</p>
	@enderror
	<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Ingresa una clave" id="password" name="password" />
	<input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white " placeholder="Repite la clave" id="password2" name="password2" />
	@error('password')
		<p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $message }}</p>
	@enderror
	<button class="rounded-md bg-blue-800 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-blue-800" type="submit" >Registrar</button>
</form>

</div>
    
	
@endsection