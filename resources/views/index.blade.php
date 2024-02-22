<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Make your Anime list</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <header class="py-4 px-6 bg-red-600">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">ANIMELIST</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-gray-400">Inicio</a></li>
                    <li><a href="#" class="hover:text-gray-400">Películas</a></li>
                    <li><a href="#" class="hover:text-gray-400">Series</a></li>
                    <li><a href="#" class="hover:text-gray-400">Mi lista</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="container mx-auto mt-8 ml-8"> 
        <h2 class="text-2xl font-bold mb-4">Películas y OVA</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        
            <div class="w-full">
                <img src="https://via.placeholder.com/300" alt="Movie" class="w-full rounded-lg">
                <h3 class="text-lg font-semibold mt-2">titulo</h3>
            </div>
            
        </div>
        
        <h2 class="text-2xl font-bold mt-8 mb-4">Series</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            
            <div class="w-full">
                <img src="https://via.placeholder.com/300" alt="TV Show" class="w-full rounded-lg">
                <h3 class="text-lg font-semibold mt-2">titulo serie</h3>
            </div>
            
        </div>
    </main>
    <footer class="py-4 px-6 bg-red-600 text-center mt-8">
        <p> ANIMELIST™</p>
    </footer>
</body>
</html>
