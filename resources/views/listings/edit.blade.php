<x-layout>
    @include('partials._header')
    <div class=" col-sm-12 col-md-6 mx-auto">
        <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Edit: {{$listing->title}}</h2>
              
              <form action="/listings/{{$listing->id}}" method="POST" enctype="multipart/form-data" required autocomplete="on">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label class="form-label">Company Name</label>
                  <input type="text" name="company" class="form-control" placeholder="E.g. ABC Incorprated" value="{{$listing->company}}" required autocomplete>
                @error('company')
                <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Job Title</label>
                  <input type="text" name="title" class="form-control" placeholder="E.g. Backend Developer" value="{{$listing->title}}" required autocomplete>
                  @error('title')
                  <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                  @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="E.g. New York" value="{{$listing->location}}" required autocomplete>
                    @error('location')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Email</label>
                    <input type="email" name="email" class="form-control" placeholder="E.g. company@email.com" value="{{$listing->email}}" required autocomplete>
                    @error('email')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Webiste / Application URL</label>
                  <input type="text" name="website" class="form-control" placeholder="https://example.com/application" value="{{$listing->website}}" required autocomplete>
                  @error('website')
                  <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                  @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Tags (Comma Separated)</label>
                    <input type="text" name="tags" class="form-control" placeholder=" E.g. api, laravel, vue" value="{{$listing->tags}}" required autocomplete>
                    @error('tags')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Company Logo</label>
                    <input type="file" name="logo" class="form-control">
                    <img class="" src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('img/job-1.jpg')}}" alt="{{$listing->company .'logo'}}">
                    @error('logo')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Job Description</label>
                    <textarea class="form-control" name="description" placeholder="Include tasks, requirements, salary, etc" id="" cols="30" rows="10">{{$listing->description}}</textarea>
                    @error('description')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>               
                <div class="form-footer d-flex justify-content-end">
                  <a href="/listings/{{$listing->id}}" class="btn btn-dark mx-2">Cancel</a>
                  <button type="submit" class="btn btn-primary ">Update Listing</button>
                </div>
              </form>
            </div>
          </div>
    </div>

</x-layout>