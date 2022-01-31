<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us - SynoDev.my.id</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-white">Laravel 8 Email Contact Form - <a href="https://synodev.my.id" target="_blank" class="text-white"><u>SynoDev.my.id</u></a></h3>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Your Name">
                                        <!-- Error -->
                                        @if ($errors->has('name'))
                                        <div class="error">
                                            {{ $errors->first('name') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" placeholder="Your Email">
                                        <!-- Error -->
                                        @if ($errors->has('email'))
                                        <div class="error">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Phone:</strong>
                                        <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" placeholder="Your Phone Number">
                                        <!-- Error -->
                                        @if ($errors->has('phone'))
                                        <div class="error">
                                            {{ $errors->first('phone') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Subject:</strong>
                                        <input type="text" name="subject" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" placeholder="Subject">
                                        <!-- Error -->
                                        @if ($errors->has('subject'))
                                        <div class="error">
                                            {{ $errors->first('subject') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control {{ $errors->has('message') ? 'error' : '' }}"></textarea>
                                        <!-- Error -->
                                        @if ($errors->has('message'))
                                        <div class="error">
                                            {{ $errors->first('message') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn-success btn-submit">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>