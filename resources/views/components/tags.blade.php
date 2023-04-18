@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp
<div class="col-md-auto">
    <div class="mt-3 badges">
        @foreach($tags as $tag)
        <a href="/?tag={{$tag}}" class="badge text-white border fw-normal badge-pill">{{$tag}}</a>
        @endforeach
    </div>
</div>