<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login - Laragigs</title>
    <!-- CSS files -->
    <link href="/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="/css/demo.min.css?1674944402" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column bg-white">
    
    <div class="row g-0 flex-fill">
      <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-4 px-lg-5">
          <div class="text-center mb-3">
            <a href="/" class="navbar-brand rounded navbar-brand-autodark"><img src="/favicon-32x32.png" height="36" alt=""></a>
          </div>
          <h2 class="h2 text-center mb-1">
            Login
          </h2>
          <p class="text-center">Login to account to post your gigs</p>
          <form action="/users/authenticate" method="POST" autocomplete="off" >
            @csrf
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="your@email.com" value="{{old('email')}}" autocomplete="off">
              @error('email')
              <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
              @enderror
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
              </label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control"  placeholder="Your password" value="{{old('password')}}"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
              @error('password')
              <p class="text-danger mt-1 text-small text-bold">{{$message}}</p>    
              @enderror
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
          </form>
          <div class="text-center text-muted mt-3">
           Already have an account? <a href="/register" tabindex="-1">Register</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(/img/register-bg.jpg)"></div>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <!-- Tabler Core -->
    <script src="/js/tabler.min.js?1674944402" defer></script>
    <script src="/js/demo.min.js?1674944402" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

        <script>
            $(document).ready(function() {
                toastr.options.timeOut = 10000;
                toastr.options.progressBar = true;
                @if (session()->has('error'))
                    toastr.error('{{ session('error') }}');
                @elseif(session()->has('success'))
                    toastr.success('{{ session('success') }}');
                @endif
            });
        </script>
  </body>
</html>