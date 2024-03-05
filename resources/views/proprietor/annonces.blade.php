@extends('../layouts/layout')

@section('title')
    Dashboard
@endsection


@section('content')
<div id="app" class="bg-gradient-to-r from-purple-700 to-blue-600">
    <aside class="app-aside">
        <h2><img src="{{asset('storage/pics/' . Auth::user()->picture)}}" alt="{{Auth::user()->picture}}"></h2>
        <nav>
            <a href="{{ route('annonces.index') }}" title="All Jobs" class="active"><i
                    class="bi bi-grid-1x2-fill"></i></a>
            <a href="" title="All Companies"><i class="bi bi-buildings"></i></a>
            <a href="#" title="Profile"><i class="bi bi-person-fill"></i></a>
            <a href="" title="My CV"><i class="bi bi-file-earmark"></i></a>
            <a href="#" title="Switch Account"><i class="bi bi-arrow-repeat"></i></a>
        </nav>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </aside>
    <article class="app-art">
        <div class="article-header">
            <h1 class="text-xl text-black">Hello {{ Auth::user()->name }}</h1>
        </div>
        <div class="article-main">
            <h2>Welcome To Your Dashboard</h2>
            <div class="container mx-auto py-8">
                <h1 class="text-3xl font-semibold mb-4">Annonces</h1>
                <div class=" mx-auto max-w-[28rem] bg-white shadow-md rounded-md p-6">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Validation Error:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class=" w-[100%]" action="{{ route('annonces.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <select name="type" id="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="vente">Vente</option>
                                <option value="location">Location</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="prix" class="block text-sm font-medium text-gray-700">Prix</label>
                            <input type="number" name="prix" id="prix" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="mt-6 flex justify-around">
                            <button type="submit" class="w-[50%] py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Create Annonce
                            </button>
                        </div>
                    </form>
                </div>
                <div class="container mx-auto my-8">
                    <h2 class="text-2xl font-bold mb-4">My Annonces</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($annonces as $annonce)
                            <div class="border bg-white border-gray-300 rounded-md p-4">
                                <h3 class="text-lg font-semibold">{{ $annonce->title }}</h3>
                                <p class="text-gray-600">{{ $annonce->description }}</p>
                                <p class="mt-2">Type: {{ $annonce->type }}</p>
                                <p class="mt-2">Prix: {{ $annonce->prix }} €</p>
                                <div class="mt-4 border-t pt-4">
                                    <a href="{{ route('annonces.edit', $annonce->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Edit</a>
                                    <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection