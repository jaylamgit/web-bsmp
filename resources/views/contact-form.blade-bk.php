<form action="" method="post" action="{{ route('contact.store') }}">
    @csrf
    <div class="mb-3 form-group">
        <label>Name (Required)</label>
        <input type="text" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
        <!-- Error -->
        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>
    <div class="mb-3 form-group">
        <label>Email (Required)</label>
        <input type="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
        @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
        @endif
    </div>
    <div class="mb-3 form-group">
        <label>Phone</label>
        <input type="text" value="{{ old('phone') }}" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
        @if ($errors->has('phone'))
        <div class="error">
            {{ $errors->first('phone') }}
        </div>
        @endif
    </div>
    <div class="mb-3 form-group">
        <label>Subject</label>
        <input type="text" value="{{ old('subject') }}" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
            id="subject">
        @if ($errors->has('subject'))
        <div class="error">
            {{ $errors->first('subject') }}
        </div>
        @endif
    </div>
    <div class="mb-3 form-group">
        <label>Message (Required)</label>
        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
            rows="4">{{ old('subject') }}</textarea>
        @if ($errors->has('message'))
        <div class="error">
            {{ $errors->first('message') }}
        </div>
        @endif
    </div>
    <div class="mb-3 form-group">
	    <input type="submit" name="send" value="Submit" class="btn btn-danger btn-block">
    </div>
</form>
