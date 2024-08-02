@include('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header" style="background-color: #FDA12B; text-align: center;">{{ __('USER PROFILE') }}</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(isset($user))
        <p><b>Name: </b>{{ $user->name }}!</p>
        <p><b>Email:</b> {{ $user->email }}</p>
        <p><b>Phone Number:</b> {{ $user->phone_number }}</p>
        <p><b>Date Of Birth:</b> {{ $user->date_of_birth }}</p>
        <p><b>Address:</b> {{ $user->address }}</p>
    @else
        <p>User information not available.</p>
    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')