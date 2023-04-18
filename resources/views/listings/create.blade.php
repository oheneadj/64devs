<x-layout>
    @include('partials._header')
    <div class=" col-sm-12 col-md-8 mx-auto">
        <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Create New Listing</h2>
              <form action="/listings" method="POST" enctype="multipart/form-data" required autocomplete="on">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Company Name</label>
                  <input type="text" name="company" class="form-control" placeholder="E.g. ABC Incorprated" value="{{old('company')}}" required autocomplete>
                @error('company')
                <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Job Title</label>
                  <input type="text" name="title" class="form-control" placeholder="E.g. Backend Developer" value="{{old('title')}}" required autocomplete>
                  @error('title')
                  <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                  @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="E.g. New York" value="{{old('location')}}" required autocomplete>
                    @error('location')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact Email</label>
                    <input type="email" name="email" class="form-control" placeholder="E.g. company@email.com" value="{{old('email')}}" required autocomplete>
                    @error('email')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Webiste / Application URL</label>
                  <input type="text" name="website" class="form-control" placeholder="https://example.com/application" value="{{old('website')}}" required autocomplete>
                  @error('website')
                  <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                  @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Tags (Comma Separated)</label>
                    <input type="text" name="tags" class="form-control" placeholder=" E.g. api, laravel, vue" value="{{old('tags')}}" required autocomplete>
                    @error('tags')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Company Logo</label>
                    <input type="file" name="logo" class="form-control">
                    @error('logo')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Job Description</label>
                    <textarea class="form-control tinymce-editor" name="description" placeholder="Include tasks, requirements, salary, etc" id="" cols="30" rows="10">{{old('description')}}</textarea>
                    @error('description')
                    <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
                    @enderror
                </div>               
                <div class="form-footer d-flex justify-content-end">
                  <a href="/" class="btn btn-dark mx-2">Cancel</a>
                  <button type="submit" class="btn btn-primary ">Create Listing</button>
                </div>
              </form>
            </div>
          </div>
    </div>
</x-layout>