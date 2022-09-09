<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{ $post->title }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="my-5">
            @foreach($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>

        <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data" class="mt-10">

            @method('put')
            @csrf

            <x-input-label for="title" value="Titre du post"/>
            <x-text-input id="title" name="title" value="{{ $post->title }}"/>

            <x-input-label id="content" vaklue="Contenu du post"/>
            <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>

            <x-input-label for="image" value="Image du post"/>
            <x-text-input id="image" name="image" type="file"/>

            <x-input-label for="category" value="Category du post"/>
            <select name="category" id="category">
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>

            <x-primary-button style="display: block !important;" @class("mt-5")>Modifier mon post</x-primary-button>

        </form>
    </div>

</x-app-layout>



