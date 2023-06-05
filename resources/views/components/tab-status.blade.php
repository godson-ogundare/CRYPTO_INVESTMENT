<div class="card dark:bg-gray-800 border-left-warning shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                    withdrawal Status</div>
                <div class="h5 mb-0 font-weight-bold text-warning">{{ Auth::user()->status }}
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
