@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <form action="{{Route('Affiliate_Link')}}" method="POST">
                  {{ csrf_field() }}
                 <input type="text" name="link" placeholder="Link"/>
                 <br/>
                 <input type="text" name="title" placeholder="Title"/>
                 <br/>
                 <input type="text" name="description" placeholder="Description"/>
                 <br/>
                 <input type="submit" value="Add Product"/>
               </form>
            </div>
        </div>
    </div>
</div>
@endsection
