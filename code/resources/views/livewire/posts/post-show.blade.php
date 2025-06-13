<div>
    <div class="relative mb-5 w-full">
    <flux:heading size="xl" level="1" class="mb-4">{{$posts->name}}</flux:heading>
    <flux:separator variant="subtle" />
    </div>
        
    <a href=" {{route("posts.index")}} " type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Back</a>

    <div class="mt-5">
        <p><strong>Title :</strong> {{$posts->name}} </p>
        <p><strong>Description :</strong> {{$posts->description}} </p>
    </div>
    
    </div>