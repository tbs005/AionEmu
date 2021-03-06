@extends('app')

@section('content')

    <div id="wrapper">
        <section class="error-404" style="background-image: url({{ asset('images/404.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="title">
                            <h4><i class="fa fa-bug"></i> 404 Page Not Found</h4>
                        </div>
                        <p>Apologies, but the page you requested could not be found.</p>
                        <form>
                            <div class="col-lg-8 pull-none display-inline-block">
                                <div class="btn-inline">
                                    <input type="text" class="form-control input-lg padding-right-40"  placeholder="Search Page...">
                                    <button type="submit" class="btn btn-link color-grey-700 padding-top-10"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ action('HomeController@index') }}" class="btn btn-primary btn-lg margin-top-20 btn-shadow btn-rounded">Back to home</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection