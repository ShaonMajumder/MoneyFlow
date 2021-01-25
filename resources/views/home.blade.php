@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">action</th>
                        <th scope="col">element_name</th>
                        <th scope="col">suggestion_date</th>
                        <th scope="col">suggested_by</th>
                        <th scope="col">resource_link</th>
                        <th scope="col">comment</th>
                        <th scope="col">budget approx[range]</th>
                        <th scope="col">purchase status[done/undone]</th>
                        <th scope="col">purchase date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="d-flex">
                                <button class="btn"><i class="fa fa-plus"></i> </button>
                                <button class="btn"><i class="fa fa-edit"></i> </button>
                                <button class="btn"><i class="fa fa-trash"></i> </button>
                            </div>
                        </td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
</div>
@endsection
