<x-layout>
    @include('partials._header')

    @if(count($listings) == 0)

    <div class="text-center">
        <div class="col-md-12 col-sm-12 mt-5 d-flex justify-content-center">
            <h2 class="mt-5">You haven't created any listings yet</h2>
        </div>
        
            <a href="/listings/create"  class="btn btn-primary mt-2" >Create a listing</a>
    </div>
    
    @endif

    @foreach($listings as $listing)

    <div class="col-md-6 col-sm-12">
        <x-listing-card :listing="$listing" />
    </div>
    
    @endforeach
</x-layout>