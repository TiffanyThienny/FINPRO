@extends('layouts.app')

@section('content')
<x-navbar />
<div class="max-w-lg mx-auto bg-brown-100 p-6 rounded-lg shadow-md border border-brown-300">
    <h1 class="text-2xl font-bold text-brown-700 mb-4">Edit User</h1>
    
    @if ($errors->any())
        <div class="bg-red-200 text-red-700 p-4 rounded-md mb-4">
            <strong>Error!</strong> Please fix the following issues:
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        
        <label class="block text-brown-700">Photo:</label>
        <input type="file" name="photo" class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">First Name:</label>
        <input type="text" name="first_name" value="{{ $user->first_name }}" required maxlength="255" class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">Last Name:</label>
        <input type="text" name="last_name" value="{{ $user->last_name }}" required maxlength="255" class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required class="w-full p-2 border rounded-md">
        
        <label class="block text-brown-700">Bio:</label>
        <textarea name="bio" class="w-full p-2 border rounded-md">{{ $user->bio }}</textarea>
        
        <button type="submit" class="bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600">Update User</button>
    </form>
    
    <a href="{{ route('users.index') }}" class="block mt-4 text-brown-600 hover:underline">Back</a>
</div>
@endsection