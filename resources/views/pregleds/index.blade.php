<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pregledi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_pregled" class="m-2 p-2 text-xl">Dodaj pregled</a>
            &nbsp
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
                <div class ="p-2">
                    <h1 class="font-xl">Ovdje će biti izlistani pregledi:</h1>

                @foreach($pregledi as $pregled)
                <div class="flex space-x-4">
                <div class="flex-1"> <p class="p-2">{{$pregled->name}}  {{$pregled->lastname}} - {{$pregled->ime}}  {{$pregled->prezime}} - {{$pregled->type}} - {{$pregled->medicineName}}</p></div>
                <div class="flex-2">
                    <form method="POST" action="{{route('delete_pregled')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$pregled->id}}">
                    <div class="p-2">
                        <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                            {{__('Obriši')}}
                        </button>
                    </div>
        </form>
    </div>

    <div class="flex-2">
                    <form method="POST" action="{{route('edit_pregled')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$pregled->id}}">
                    <div class="p-2">
                        <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                            {{__('Uredi')}}
                        </button>
                    </div>
                    </form>
        </div>
</div>

                @endforeach


            </div>

            <div class ="p-2">
                <h1 class="font-xl">Ovdje će biti izlistani svi pregledi pacijenta Adnana Dugalića:</h1>
        
            @foreach($pregledi4 as $pregled4)
            <div class="flex space-x-4">
                <div class="flex-1"> <p class="p-2">{{$pregled4->name}}  {{$pregled4->lastname}} - {{$pregled4->ime}}  {{$pregled4->prezime}} - {{$pregled4->type}} - {{$pregled4->medicineName}}</p></div>
            
        </div>
        
            @endforeach
        
        
        </div>

            <div class ="p-2">
                <h1 class="font-xl">Ovdje će biti izlistani doktori pacijenta Adnana Dugalića:</h1>
        
            @foreach($pregledi2 as $pregled2)
            <div class="flex space-x-4">
            <div class="flex-1"> <p class="p-2">{{$pregled2->ime}}  {{$pregled2->prezime}} </p></div>
            
        </div>
        
            @endforeach
        
        
        </div>

        <div class ="p-2">
            <h1 class="font-xl">Ovdje će biti izlistane sve bolesti pacijenta Adnana Dugalića:</h1>
    
        @foreach($pregledi3 as $pregled3)
        <div class="flex space-x-4">
        <div class="flex-1"> <p class="p-2">{{$pregled3->type}}</p></div>
        
    </div>
    
        @endforeach
    
    
    </div>

    <div class ="p-2">
        <h1 class="font-xl">Ovdje će biti izlistani lijekovi pacijenta Adnana Dugalića:</h1>

    @foreach($pregledi5 as $pregled5)
    <div class="flex space-x-4">
    <div class="flex-1"> <p class="p-2">{{$pregled5->medicineName}}</p></div>
    
</div>

    @endforeach


</div>



 
        </div>
    </div>
</x-app-layout>
