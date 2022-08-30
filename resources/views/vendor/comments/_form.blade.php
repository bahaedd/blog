<div class="card">
    <h2 class="text-green-400 text-sm mt-6 mb-6">LEAVE A REPLY</h2>
    <div class="card-body">
        @if($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if(isset($guest_commenting) and $guest_commenting == true)
                <div class="flex flex-col md:flex-row">
                    {{-- <label for="message">@lang('comments::comments.enter_your_name_here')</label> --}}
                    <input type="text" placeholder="Name" class="mr-3 mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body  md:w-1/2 lg:mr-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name" />
                </div>
                <div class="form-group">
                    {{-- <label for="message">@lang('comments::comments.enter_your_email_here')</label> --}}
                    <input type="email" placeholder="Email" class="mr-3 mt-6 w-full bg-gray-50 rounded border-grey-50 px-4 py-3 font-body  md:w-1/2 lg:mr-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email" />
                   
                </div>
            @endif

            <div class="form-group">
                {{-- <label for="message">@lang('comments::comments.enter_your_message_here')</label> --}}
                <textarea placeholder="Your Comment" class="mt-6 w-1/2 bg-gray-50 rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500  py-4 px-12  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500 form-control @if($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                @error('guest_name')
                        <div class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('guest_email')
                        <div class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </div>
                    @enderror
                @error('message')
                <div class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    @lang('comments::comments.your_message_is_required')
                </div>
                @enderror
            </div>
            <input type="submit" name="send" value="Submit" class="mt-6 flex items-center justify-center rounded bg-green-700 px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
            {{-- <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">@lang('comments::comments.submit')</button> --}}
        </form>
    </div>
</div>
<br />