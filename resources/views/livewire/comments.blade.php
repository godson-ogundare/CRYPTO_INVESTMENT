<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
    <div class=" overflow-hidden shadow-xl sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <div>
                @foreach ($comments as $comment)
                    <div style="border-bottom: 1px solid #EEEEEE;" class="container pt-5">
                        <div class="row d-flex flex-row flex-nowrap justify-content-start">
                            <h4 class="col text-start">{{ $comment->creator->name }}</h4>
                            <p class="col text-end text-white">{{ $comment->created_at }}
                            </p>
                        </div>
                        <p class="text-start text-white mx-3">{{ $comment->body }}</p>
                    </div>
                @endforeach
            </div>

            <div>
                <div class="mt-5">
                    @error('newComment')
                        <h5 style="background-color: #E31937 ;color:#EEEEEE;" class="error py-2">{{ $message }}
                        </h5>
                    @enderror
                </div>

                <div class="mt-5">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <form style="background: transparent"
                    class="d-flex flex-row flex-nowrap justify-content-center align-items-center p-0 m-0"
                    wire:submit.prevent="addComment">
                    <div class="m-2 w-100">
                        <input type="text" class="form-control" wire:model.debounce.500ms="newComment">
                    </div>
                    <div class="m-2">
                        <button type="submit" class="btn btn-primary px-4">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
