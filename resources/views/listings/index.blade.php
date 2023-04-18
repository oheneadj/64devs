<x-layout>
    @include('partials._header')

    @if(count($listings) == 0)

    <div class="text-center">
        <div class="col-md-12 col-sm-12 mt-5 d-flex justify-content-center">
            <h2 class="mt-5">No Listings Found</h2>
        </div>
        
            <a href="/"  class="btn btn-primary mt-2" >View All Listings</a>
    </div>
    
    @endif

    @foreach($listings as $listing)

    <div class="col-md-6 col-sm-12">
        <x-listing-card :listing="$listing" />
    </div>
    
    @endforeach
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>