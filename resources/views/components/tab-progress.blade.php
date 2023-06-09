<div class="card dark:bg-gray-800 border-left-info shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Overall
                    Progress
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <div class="h5 mb-0 mr-3 font-weight-bold text-info">
                            {{ Auth::user()->progress }} %</div>
                    </div>
                    <div class="col">
                        <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info text-info" role="progressbar"
                                style="width: {{ Auth::user()->progress }}%" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>
