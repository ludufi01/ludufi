<div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header"><h1>Alert</h1></div>
                   <div class="card-body">
                    @if (session('resent'))
                         <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
					@foreach($data as $detail)
                    <p><span style="font-weight: bold;">{{ $detail->name }}</span> has not played any battle on <?= date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d')))) ?></p>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>