<div class="card dark:bg-gray-800 border-left-primary shadow h-100 py-3">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    investment (Total)</div>
                <div class="h5 mb-0 font-weight-bold text-primary">$
                    {{ Auth::user()->invested }}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
