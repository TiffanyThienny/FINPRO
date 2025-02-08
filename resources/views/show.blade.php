@extends('layouts.app')

@section('content')
<x-navbar />
<div class="max-w-lg mx-auto bg-brown-100 p-6 rounded-lg shadow-md border border-brown-300">
    <h1 class="text-2xl font-bold text-brown-700 mb-4">User Details</h1>
    
    <div class="flex justify-center mb-4">
        <img src="{{ asset('storage/' . $user->photo) }}" width="150" alt="User Photo" class="rounded-full border border-brown-400 shadow-sm">
    </div>
    
    <p class="text-brown-800"><strong>First Name:</strong> {{ $user->first_name }}</p>
    <p class="text-brown-800"><strong>Last Name:</strong> {{ $user->last_name }}</p>
    <p class="text-brown-800"><strong>Email:</strong> {{ $user->email }}</p>
    <p class="text-brown-800"><strong>Bio:</strong> {{ $user->bio ?? 'No Bio Available' }}</p>
    
    <div class="mt-4">
        <!-- Tombol Update -->
        <a href="{{ route('users.edit', $user) }}" class="inline-block bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600 mr-2">
            Update
        </a>

        <!-- Tombol Delete -->
        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">
                Delete
            </button>
        </form>
    </div>
    
    <a href="{{ route('users.index') }}" class="inline-block mt-4 bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600">Back to Users</a>
</div>
@endsection
