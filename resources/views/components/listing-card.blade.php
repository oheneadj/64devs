@props(['listing'])
<div class="card">
    <div class="row g-0">
        <div class="col-auto">
            <div class="card-body">
                <div class="avatar avatar-md" style="background-image: url({{$listing->logo ? asset('storage/'. $listing->logo) : asset('img/job-1.jpg')}})"></div>
            </div>
        </div>
        <div class="col">
            <div class="card-body ps-0">
                <div class="row">
                    <div class="col">
                        <h3 class="mb-0"><a href="/listings/{{$listing->id}}">{{$listing->title}}</a></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="mt-3 list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                            <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                </svg>
                                {{$listing->company}}
                            </div>

                            <div class="list-inline-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 11m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                </svg>
                                Remote / {{$listing->location}}
                            </div>
                        </div>
                        <div class="mt-3 list mb-0 text-muted d-block d-sm-none">
                            <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8"></path>
                                    <path d="M13 7l0 .01"></path>
                                    <path d="M17 7l0 .01"></path>
                                    <path d="M17 11l0 .01"></path>
                                    <path d="M17 15l0 .01"></path>
                                </svg>
                                {{$listing->company}}
                            </div>

                            <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 11m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                                </svg>
                                Remote /{{$listing['location']}}
                            </div>
                        </div>
                    </div>
                    <x-tags :tagsCsv="$listing->tags" />
                </div>
            </div>
        </div>
    </div>
</div>