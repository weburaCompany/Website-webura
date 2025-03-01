@if (session('msg'))
    <div class="alert alert-{{ session('type') }}">
        <h2>{{ session('msg') }}</h2>
    </div>
@endif
<form action="{{ route('webura.contact-data') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="form-control @error('name') is-invalid @enderror" placeholder="Full Name">
            @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror" placeholder="Email Address">
            @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row g-3 mt-3">
        <div class="col-md-6">
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number">
            @error('phone')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-6">
            <input type="text" name="company" id="company" value="{{ old('company') }}"
                class="form-control @error('company') is-invalid @enderror" placeholder="Your Company Name">
            @error('company')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="mt-3">
        <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" rows="4"
            placeholder="Tell us about your project or inquiry">{{ old('message') }}</textarea>
        @error('message')
            <small class="invalid-feedback">{{ $message }}</small>
        @enderror
    </div>
    <div class="d-grid mt-5">
        <button type="submit" class="btn btn-primary">Send Message or Let’s Get Started</button>
    </div>
</form>
