@extends('frontend.layouts.app')

@section('meta')
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* ───── Base ───── */
    .rx-page { font-family: 'Inter', sans-serif; }
    /* Prevent inline SVGs from expanding to their natural size */
    .rx-page svg { max-width: 100%; height: auto; }
    .rx-input-icon { width: 16px !important; height: 16px !important; }
    .rx-section-header svg { width: 16px !important; height: 16px !important; flex-shrink: 0; }
    .rx-guide-card h2 svg { width: 18px !important; height: 18px !important; }
    .rx-guide-card .rx-sinhala-block h3 svg { width: 14px !important; height: 14px !important; }
    .rx-hero-icon svg { width: 36px !important; height: 36px !important; }
    .rx-upload-zone svg.upload-icon { width: 44px !important; height: 44px !important; display: block; }
    .rx-login-alert svg { width: 18px !important; height: 18px !important; flex-shrink: 0; }
    .rx-submit-btn svg { width: 18px !important; height: 18px !important; }
    .rx-login-link svg { width: 16px !important; height: 16px !important; }

    /* ───── Hero Banner ───── */
    .rx-hero {
        background: linear-gradient(135deg, #0f4c75 0%, #1b6ca8 50%, #00b4d8 100%);
        padding: 56px 0 40px;
        margin-bottom: 0;
        position: relative;
        overflow: hidden;
    }
    .rx-hero::before {
        content: '';
        position: absolute;
        top: -60px; right: -60px;
        width: 320px; height: 320px;
        border-radius: 50%;
        background: rgba(255,255,255,.07);
    }
    .rx-hero::after {
        content: '';
        position: absolute;
        bottom: -80px; left: -40px;
        width: 260px; height: 260px;
        border-radius: 50%;
        background: rgba(255,255,255,.05);
    }
    .rx-hero-icon {
        width: 70px; height: 70px;
        background: rgba(255,255,255,.15);
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 16px;
        backdrop-filter: blur(4px);
        border: 1.5px solid rgba(255,255,255,.25);
    }
    .rx-hero-icon svg { width: 36px; height: 36px; fill: #fff; }
    .rx-hero h1 { color: #fff; font-size: 1.9rem; font-weight: 700; letter-spacing: -.5px; }
    .rx-hero p  { color: rgba(255,255,255,.8); font-size: .93rem; }

    /* ───── Layout wrapper ───── */
    .rx-body {
        background: #f4f7fb;
        padding: 40px 0 60px;
    }

    /* ───── Guide card ───── */
    .rx-guide-card {
        background: linear-gradient(160deg, #e8f4fd 0%, #f0f9ff 100%);
        border: 1px solid #bee3f8;
        border-radius: 18px;
        padding: 28px 24px;
        position: sticky;
        top: 90px;
    }
    .rx-guide-card h2 {
        font-size: 1.05rem;
        font-weight: 700;
        color: #0f4c75;
        display: flex; align-items: center; gap: 8px;
        margin-bottom: 14px;
    }
    .rx-guide-card h2 svg { width:18px; height:18px; flex-shrink:0; }
    .rx-guide-list { list-style: none; padding: 0; margin: 0 0 22px; }
    .rx-guide-list li {
        display: flex; gap: 10px;
        font-size: .82rem; line-height: 1.55;
        color: #374151;
        padding: 8px 0;
        border-bottom: 1px solid rgba(15,76,117,.08);
    }
    .rx-guide-list li:last-child { border-bottom: none; }
    .rx-guide-num {
        flex-shrink: 0;
        width: 22px; height: 22px;
        background: #1b6ca8;
        color: #fff;
        border-radius: 50%;
        font-size: .7rem; font-weight: 700;
        display: flex; align-items: center; justify-content: center;
        margin-top: 1px;
    }
    .rx-sinhala-block {
        background: rgba(255,255,255,.6);
        border-radius: 12px;
        border: 1px solid rgba(15,76,117,.12);
        padding: 14px 16px;
    }
    .rx-sinhala-block h3 {
        font-size: .82rem; font-weight: 700; color: #0f4c75;
        margin-bottom: 10px; display: flex; align-items: center; gap: 6px;
    }
    .rx-sinhala-block li { font-size: .78rem; }

    /* ───── Form card ───── */
    .rx-form-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 40px rgba(15,76,117,.10);
        padding: 36px 36px 32px;
    }
    @media(max-width:576px){ .rx-form-card { padding: 20px 16px; } }

    /* Login warning */
    .rx-login-alert {
        display: flex; align-items: center; gap: 10px;
        background: linear-gradient(90deg,#fff5f5,#fff);
        border-left: 4px solid #e53e3e;
        border-radius: 10px;
        padding: 12px 16px;
        margin-bottom: 24px;
        font-size: .875rem; color: #c53030; font-weight: 500;
    }
    .rx-login-alert svg { flex-shrink:0; width:16px; height:16px; }

    /* Section headers */
    .rx-section-header {
        display: flex; align-items: center; gap: 10px;
        font-size: .82rem; font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #1b6ca8;
        padding: 6px 0;
        margin: 28px 0 18px;
        border-bottom: 2px solid #e8f4fd;
    }
    .rx-section-header:first-of-type { margin-top: 0; }
    .rx-section-header svg { width:16px; height:16px; }

    /* Form controls */
    .rx-label {
        font-size: .78rem; font-weight: 600;
        color: #4a5568;
        margin-bottom: 6px;
        display: block;
    }
    .rx-label span { font-weight: 400; color: #718096; }
    .rx-input {
        width: 100%;
        border: 1.5px solid #e2e8f0;
        border-radius: 10px;
        padding: 10px 14px;
        font-size: .875rem;
        color: #2d3748;
        transition: border-color .2s, box-shadow .2s;
        outline: none;
        background: #fafbfc;
        appearance: none;
    }
    .rx-input:focus {
        border-color: #1b6ca8;
        box-shadow: 0 0 0 3px rgba(27,108,168,.12);
        background: #fff;
    }
    .rx-input-wrap { 
        position: relative; 
        margin-bottom: 10px;
    }
    .rx-input-icon {
        position: absolute;
        left: 12px; top: 50%; transform: translateY(-50%);
        width: 16px; height: 16px;
        color: #a0aec0;
        pointer-events: none;
    }
    .rx-input-wrap .rx-input { padding-left: 38px; }

    /* Select */
    select.rx-input {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%234a5568' stroke-width='2.5'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 36px;
    }

    /* Textarea */
    textarea.rx-input { resize: vertical; min-height: 80px; }

    /* Gender / substitute toggles */
    .rx-toggle-group { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 4px; }
    .rx-toggle-label {
        display: flex; align-items: center; gap: 7px;
        cursor: pointer;
        padding: 8px 16px;
        border: 1.5px solid #e2e8f0;
        border-radius: 8px;
        font-size: .82rem; font-weight: 500; color: #4a5568;
        transition: all .2s;
        user-select: none;
    }
    .rx-toggle-label input[type=radio] { display: none; }
    .rx-toggle-label .rx-radio-dot {
        width: 14px; height: 14px;
        border: 2px solid #cbd5e0;
        border-radius: 50%;
        transition: all .2s;
        flex-shrink: 0;
    }
    .rx-toggle-label:has(input:checked) {
        background: #ebf5ff;
        border-color: #1b6ca8;
        color: #1b6ca8;
    }
    .rx-toggle-label:has(input:checked) .rx-radio-dot {
        background: #1b6ca8;
        border-color: #1b6ca8;
        box-shadow: inset 0 0 0 3px #fff;
    }

    /* ───── Upload zone ───── */
    .rx-upload-zone {
        border: 2px dashed #bee3f8;
        border-radius: 14px;
        background: linear-gradient(160deg,#f0f9ff,#fafbfc);
        padding: 32px 20px;
        text-align: center;
        cursor: pointer;
        transition: border-color .25s, background .25s;
        position: relative;
    }
    .rx-upload-zone:hover,
    .rx-upload-zone.drag-over {
        border-color: #1b6ca8;
        background: #ebf5ff;
    }
    .rx-upload-zone svg.upload-icon {
        width: 44px; height: 44px;
        margin: 0 auto 10px;
        display: block;
        color: #1b6ca8;
    }
    .rx-upload-zone p { font-size: .82rem; color: #718096; margin: 0; }
    .rx-upload-zone strong { color: #2d3748; }
    .rx-upload-badge {
        display: inline-block;
        background: #1b6ca8; color: #fff;
        font-size: .72rem; font-weight: 600;
        border-radius: 5px; padding: 3px 8px;
        margin-bottom: 8px;
    }
    #rx-file-input { display: none; }
    #rx-preview-grid {
        display: flex; flex-wrap: wrap; gap: 10px;
        margin-top: 14px; justify-content: center;
    }
    .rx-preview-thumb {
        width: 64px; height: 64px;
        border-radius: 8px;
        object-fit: cover;
        border: 2px solid #bee3f8;
        transition: transform .2s;
    }
    .rx-preview-thumb:hover { transform: scale(1.08); }

    /* ───── Allergies hint ───── */
    .rx-hint-box {
        background: #fffbeb;
        border: 1px solid #fcd34d;
        border-radius: 10px;
        padding: 12px 14px;
        font-size: .78rem; color: #78350f; line-height: 1.6;
        margin-bottom: 10px;
    }

    /* ───── Privacy notice ───── */
    .rx-privacy {
        background: #f8fafb;
        border-radius: 10px;
        padding: 14px 16px;
        font-size: .75rem; color: #718096; line-height: 1.65;
    }
    .rx-privacy a { color: #1b6ca8; text-decoration: underline; }

    /* ───── Submit button ───── */
    .rx-submit-btn {
        display: inline-flex; align-items: center; gap: 9px;
        background: linear-gradient(135deg, #0f4c75, #1b6ca8 60%, #00b4d8);
        color: #fff;
        border: none; border-radius: 12px;
        padding: 13px 32px;
        font-size: .92rem; font-weight: 600;
        cursor: pointer;
        transition: opacity .2s, transform .15s, box-shadow .2s;
        box-shadow: 0 4px 18px rgba(27,108,168,.35);
        letter-spacing: .01em;
    }
    .rx-submit-btn:hover  { opacity: .9; transform: translateY(-1px); box-shadow: 0 6px 22px rgba(27,108,168,.4); }
    .rx-submit-btn:active { transform: translateY(0); }
    .rx-submit-btn svg { width:18px; height:18px; }

    .rx-login-link {
        display: inline-flex; align-items: center; gap: 8px;
        color: #1b6ca8; font-weight: 600; font-size: .875rem;
        border: 1.5px solid #1b6ca8;
        border-radius: 10px; padding: 10px 22px;
        text-decoration: none;
        transition: background .2s, color .2s;
    }
    .rx-login-link:hover { background: #1b6ca8; color: #fff; }

    /* ───── Error alert ───── */
    .rx-error-alert {
        background: #fff5f5;
        border: 1px solid #fc8181;
        border-radius: 12px;
        padding: 14px 18px;
        margin-bottom: 20px;
    }
    .rx-error-alert ul { margin: 0; padding-left: 16px; font-size: .82rem; color: #c53030; }
</style>
@endsection

@section('content')
<div class="rx-page">

    {{-- ── Hero ── --}}
    <div class="rx-hero text-center">
        <div class="rx-hero-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM8 13h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"/>
            </svg>
        </div>
        <h1>Upload Your Prescription</h1>
        <p>Fast, secure and verified — get your medicines delivered to your door</p>
    </div>

    {{-- ── Body ── --}}
    <div class="rx-body">
        <div class="container">
            <div class="row g-4 justify-content-center">

                {{-- ── Guide col ── --}}
                <div class="col-lg-4 col-md-5">
                    <div class="rx-guide-card">
                        <h2>
                            <svg viewBox="0 0 24 24" fill="#1b6ca8"><path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                            Prescription Guidelines
                        </h2>
                        <ul class="rx-guide-list">
                            <li><span class="rx-guide-num">1</span><span>Upload up to <strong>5</strong> clear, full photos of your prescription.</span></li>
                            <li><span class="rx-guide-num">2</span><span>Do not crop the image — full prescription must be visible.</span></li>
                            <li><span class="rx-guide-num">3</span><span>Mention specific brands or instructions in the Notes section.</span></li>
                            <li><span class="rx-guide-num">4</span><span>Double-check your contact number before submitting.</span></li>
                            <li><span class="rx-guide-num">5</span><span>Prescription must be from a <strong>registered medical practitioner</strong>.</span></li>
                            <li><span class="rx-guide-num">6</span><span>Upload <strong>recent prescriptions only</strong>.</span></li>
                        </ul>

                        <div class="rx-sinhala-block">
                            <h3>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="#0f4c75"><path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                                සිංහල මාර්ගෝපදේශය
                            </h3>
                            <ul class="rx-guide-list">
                                <li><span class="rx-guide-num">1</span><span>ඖෂධ වට්ටෝරු ඡායාරූප 5ක් දක්වා ඇතුළත් කළ හැකිය.</span></li>
                                <li><span class="rx-guide-num">2</span><span>සම්පූර්ණ, පැහැදිලි ඡායාරූපයක් ඇතුළත් කරන්න.</span></li>
                                <li><span class="rx-guide-num">3</span><span>විශේෂ වෙළඳ නාම 'Notes' කොටසෙහි සඳහන් කරන්න.</span></li>
                                <li><span class="rx-guide-num">4</span><span>ජංගම දුරකථන අංකය දෙවරක් පරීක්ෂා කරන්න.</span></li>
                                <li><span class="rx-guide-num">5</span><span>ලියාපදිංචි වෛද්‍යවරයෙකුගේ බෙහෙත් වට්ටෝරුවක් විය යුතුය.</span></li>
                                <li><span class="rx-guide-num">6</span><span>මෑත කාලීන බෙහෙත් වට්ටෝරු පමණක් Upload කරන්න.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- ── Form col ── --}}
                <div class="col-lg-8 col-md-7">
                    <div class="rx-form-card">

                        {{-- Error messages --}}
                        @if ($errors->any())
                        <div class="rx-error-alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{-- Not logged in warning --}}
                        @if (!isCustomer())
                        <div class="rx-login-alert">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                            Please log in as a customer to submit a prescription.
                        </div>
                        @endif

                        <form action="{{ route('customer.prescription.save') }}" method="POST" enctype="multipart/form-data" id="rx-form">
                            @csrf

                            {{-- ── Patient Info ── --}}
                            <div class="rx-section-header">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v2h20v-2c0-3.3-6.7-5-10-5z"/></svg>
                                Patient Information &nbsp;<span style="font-weight:400;letter-spacing:0;text-transform:none;font-size:.75rem;">රෝගියාගේ තොරතුරු</span>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="rx-label">Patient Name <span>| රෝගියාගේ නම</span></label>
                                    <div class="rx-input-wrap">
                                        <svg class="rx-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/></svg>
                                        <input type="text" name="patient_name" class="rx-input" value="{{ old('patient_name') }}" placeholder="Full name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="rx-label">Patient Age <span>| රෝගියාගේ වයස</span></label>
                                    <div class="rx-input-wrap">
                                        <svg class="rx-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                        <input type="number" name="patient_age" class="rx-input" max="130" min="0" value="{{ old('patient_age') }}" placeholder="Years" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="rx-label">Contact Number <span>| දුරකථන අංකය</span></label>
                                    <div class="rx-input-wrap">
                                        <svg class="rx-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.86 19.86 0 0 1 3.09 4.18 2 2 0 0 1 5.07 2h3a2 2 0 0 1 2 1.72c.128.96.361 1.88.7 2.81a2 2 0 0 1-.45 2.11L9.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.93.339 1.85.572 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                        <input type="tel" name="contact_number" class="rx-input" value="{{ old('contact_number') }}" placeholder="+94 7X XXX XXXX" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="rx-label">Gender <span>| ස්ත්‍රී පුරුෂභාවය</span></label>
                                    <div class="rx-toggle-group mt-1">
                                        <label class="rx-toggle-label">
                                            <input type="radio" name="gender" value="male" required>
                                            <span class="rx-radio-dot"></span> Male | පිරිමි
                                        </label>
                                        <label class="rx-toggle-label">
                                            <input type="radio" name="gender" value="female">
                                            <span class="rx-radio-dot"></span> Female | ගැහැණු
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="rx-label">Delivery Address <span>| ලිපිනය</span></label>
                                    <div class="rx-input-wrap">
                                        <svg class="rx-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <input type="text" name="address" class="rx-input" placeholder="No. Street, City" required>
                                    </div>
                                </div>
                            </div>

                            {{-- ── Pharmacy Details ── --}}
                            <div class="rx-section-header">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-7 3a1 1 0 0 1 1 1v3h3a1 1 0 0 1 0 2h-3v3a1 1 0 0 1-2 0v-3H8a1 1 0 0 1 0-2h3V7a1 1 0 0 1 1-1z"/></svg>
                                Pharmacy Details &nbsp;<span style="font-weight:400;letter-spacing:0;text-transform:none;font-size:.75rem;">ෆාමසි විස්තර</span>
                            </div>
                            <div class="mb-3">
                                <label class="rx-label">Preferred Pharmacy</label>
                                <select name="seller_id" class="rx-input" required>
                                    <option value="">Select a verified pharmacy</option>
                                    @forelse ($shops as $shop)
                                        @if ($shop->user)
                                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                        @endif
                                    @empty
                                        <option value="">No pharmacies available</option>
                                    @endforelse
                                </select>
                            </div>

                            {{-- ── Prescription Details ── --}}
                            <div class="rx-section-header">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM8 13h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"/></svg>
                                Prescription Details &nbsp;<span style="font-weight:400;letter-spacing:0;text-transform:none;font-size:.75rem;">බෙහෙත් වට්ටෝරු විස්තර</span>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-5">
                                    <label class="rx-label">Duration <span>| ඖෂධ අවශ්‍ය කාල සීමාව</span></label>
                                    <select name="duration" class="rx-input" required>
                                        <option value="1">One week | සතියක්</option>
                                        <option value="2">Two weeks | සති දෙකක්</option>
                                        <option value="3">Three weeks | සති තුනක්</option>
                                        <option value="4">One month | මාසයක්</option>
                                        <option value="5">Two months | මාස දෙකක්</option>
                                    </select>
                                </div>
                                <div class="col-md-7">
                                    <label class="rx-label">Delivery Method <span>| බෙදාහැරීමේ ක්‍රමය</span></label>
                                    <select name="delivery_method" class="rx-input" required>
                                        <option value="1">Standard (1–3 business days) — Rs. 500</option>
                                        <option value="2">Express (within 24 hrs, selected areas) — Rs. 550</option>
                                        <option value="3">Pickup from pharmacy</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Upload zone --}}
                            <label class="rx-label mb-1">Upload Prescription <span>| ඔබේ වෛද්‍යවරයාගේ බෙහෙත් වට්ටෝරුව</span></label>
                            <div class="rx-upload-zone" id="rx-drop-zone" onclick="document.getElementById('rx-file-input').click()">
                                <span class="rx-upload-badge">Up to 5 images</span>
                                <svg class="upload-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/>
                                    <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/>
                                </svg>
                                <p><strong>Click to browse</strong> or drag &amp; drop your prescription images here</p>
                                <p style="margin-top:5px;font-size:.75rem;">JPG, PNG, PDF accepted</p>
                                <div id="rx-preview-grid"></div>
                            </div>
                            <input type="file" name="prescription" id="rx-file-input" accept="image/*,.pdf" multiple required>

                            {{-- Substitutes --}}
                            <div class="mt-3 mb-1">
                                <label class="rx-label">Allow Generic / Brand Substitutes?
                                    <span>| ආදේශක ඖෂධ ඉඩ දෙනවාද?</span>
                                </label>
                                <div class="rx-toggle-group">
                                    <label class="rx-toggle-label">
                                        <input type="radio" name="substitutes" value="yes" required>
                                        <span class="rx-radio-dot"></span> Yes | ඔව්
                                    </label>
                                    <label class="rx-toggle-label">
                                        <input type="radio" name="substitutes" value="no">
                                        <span class="rx-radio-dot"></span> No | නැත
                                    </label>
                                </div>
                            </div>

                            {{-- Special notes --}}
                            <div class="rx-section-header mt-4">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                                Drug Allergies &amp; Special Notes <span style="font-weight:400;letter-spacing:0;text-transform:none;font-size:.75rem;">| විශේෂ සටහන්</span>
                            </div>
                            <div class="rx-hint-box">
                                ⚠️ If you or the patient has <strong>known drug allergies</strong>, please mention them clearly below. ඔබට යම් ඖෂධ අසාත්මිකතාවයක් ඇත්නම් සඳහන් කරන්න.
                                This helps our pharmacists ensure safe dispensing.
                            </div>
                            <textarea name="allergies" class="rx-input" rows="3" placeholder="e.g. Allergic to Penicillin, prefer brand-name Panadol…"></textarea>

                            {{-- Privacy --}}
                            <div class="rx-privacy mt-3">
                                By submitting your prescription, you will be registered on Value Ceylon Health's Online Pharmacy Platform.
                                Please read our <a href="{{ route('privacypolicy') }}" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and Cookie Policy.
                                By clicking <em>"Send Prescription"</em> you confirm you have read and agreed to our Privacy, Cookie Policies and Terms &amp; Conditions.
                            </div>

                            {{-- Submit --}}
                            <div class="d-flex justify-content-end mt-4">
                                @if (isCustomer())
                                    <button type="submit" class="rx-submit-btn">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                        Send Prescription
                                    </button>
                                @else
                                    <a href="{{ route('user.login') }}" class="rx-login-link">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
                                        Login to Submit Prescription
                                    </a>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
(function () {
    const dropZone   = document.getElementById('rx-drop-zone');
    const fileInput  = document.getElementById('rx-file-input');
    const previewGrid = document.getElementById('rx-preview-grid');
    const MAX = 5;

    function renderPreviews(files) {
        previewGrid.innerHTML = '';
        const limited = Array.from(files).slice(0, MAX);
        limited.forEach(file => {
            if (!file.type.startsWith('image/')) return;
            const reader = new FileReader();
            reader.onload = e => {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'rx-preview-thumb';
                img.title = file.name;
                previewGrid.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }

    fileInput.addEventListener('change', () => renderPreviews(fileInput.files));

    dropZone.addEventListener('dragover', e => { e.preventDefault(); dropZone.classList.add('drag-over'); });
    dropZone.addEventListener('dragleave', () => dropZone.classList.remove('drag-over'));
    dropZone.addEventListener('drop', e => {
        e.preventDefault();
        dropZone.classList.remove('drag-over');
        const dt = new DataTransfer();
        const files = Array.from(e.dataTransfer.files).slice(0, MAX);
        files.forEach(f => dt.items.add(f));
        fileInput.files = dt.files;
        renderPreviews(fileInput.files);
    });

    /* prevent form click from bubbling inside drop zone */
    dropZone.addEventListener('click', e => {
        if (e.target !== dropZone && !dropZone.contains(e.target)) return;
    });
})();
</script>
@endsection
