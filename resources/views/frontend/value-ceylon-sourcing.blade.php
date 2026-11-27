@extends('frontend.layouts.app')

@section('meta_title', 'Value Ceylon Health Sourcing | Sri Lanka Verified B2B Medical & Pharma RFQ')
@section('meta_description', 'Connect with licensed, NMRA-compliant pharmaceutical and healthcare suppliers across Sri Lanka. Submit your custom B2B sourcing RFQ for wholesale rates and reliable fulfillment.')
@section('meta_keywords', 'sri lanka b2b pharmacy, nmra pharmaceutical sourcing, medical supplies rfq, wholesale medicines sri lanka, value ceylon sourcing')

@section('content')
    <style>
        /* Value Ceylon Sourcing - Modern Design System */
        .vcs-wrapper {
            --vcs-primary: var(--primary, #1b6ca8);
            --vcs-primary-dark: #0f4b75;
            --vcs-primary-light: #f0f7fc;
            --vcs-primary-subtle: rgba(27, 108, 168, 0.08);
            --vcs-accent: #059669;
            --vcs-accent-light: #ecfdf5;
            --vcs-accent-subtle: rgba(5, 150, 105, 0.12);
            --vcs-amber: #d97706;
            --vcs-amber-light: #fffbeb;
            --vcs-slate-900: #0f172a;
            --vcs-slate-800: #1e293b;
            --vcs-slate-700: #334155;
            --vcs-slate-600: #475569;
            --vcs-slate-500: #64748b;
            --vcs-slate-200: #e2e8f0;
            --vcs-slate-100: #f1f5f9;
            --vcs-slate-50: #f8fafc;
            --vcs-card-radius: 16px;
            --vcs-inner-radius: 10px;
            --vcs-shadow-sm: 0 2px 8px rgba(15, 23, 42, 0.04);
            --vcs-shadow-md: 0 8px 24px -4px rgba(15, 23, 42, 0.07), 0 4px 8px -2px rgba(15, 23, 42, 0.04);
            --vcs-shadow-lg: 0 16px 36px -6px rgba(15, 23, 42, 0.1), 0 8px 16px -4px rgba(15, 23, 42, 0.05);
            font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: var(--vcs-slate-700);
            background: linear-gradient(180deg, #f8fafc 0%, #ffffff 400px, #f8fafc 100%);
            padding-bottom: 60px;
        }

        /* Breadcrumbs */
        .vcs-breadcrumb-nav {
            padding: 16px 0 8px;
        }

        .vcs-breadcrumb {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            font-size: 13.5px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .vcs-breadcrumb a {
            color: var(--vcs-slate-500);
            text-decoration: none;
            transition: color 0.2s;
        }

        .vcs-breadcrumb a:hover {
            color: var(--vcs-primary);
        }

        .vcs-breadcrumb-separator {
            color: #cbd5e1;
            font-size: 11px;
        }

        .vcs-breadcrumb-current {
            color: var(--vcs-slate-800);
            font-weight: 600;
        }

        /* Hero Banner Presentation */
        .vcs-hero-container {
            margin-top: 12px;
            margin-bottom: 32px;
        }

        .vcs-hero-banner-wrapper {
            position: relative;
            border-radius: var(--vcs-card-radius);
            overflow: hidden;
            box-shadow: var(--vcs-shadow-md);
            background: #0f172a;
        }

        .vcs-hero-banner-img {
            width: 100%;
            height: auto;
            max-height: 420px;
            object-fit: cover;
            display: block;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .vcs-hero-banner-wrapper:hover .vcs-hero-banner-img {
            transform: scale(1.015);
        }

        .vcs-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(15, 23, 42, 0.85) 0%, rgba(15, 23, 42, 0.6) 50%, rgba(15, 23, 42, 0.2) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px 48px;
            color: #ffffff;
        }

        .vcs-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 9999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            width: fit-content;
            margin-bottom: 14px;
            backdrop-filter: blur(8px);
        }

        .vcs-badge-pill-light {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
        }

        .vcs-badge-pill-primary {
            background: var(--vcs-primary-subtle);
            border: 1px solid rgba(27, 108, 168, 0.2);
            color: var(--vcs-primary);
        }

        .vcs-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #10b981;
            display: inline-block;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.35);
            animation: vcsPulse 2s infinite;
        }

        @keyframes vcsPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.5);
            }

            70% {
                box-shadow: 0 0 0 6px rgba(16, 185, 129, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }

        .vcs-hero-title {
            font-size: 2.25rem;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.02em;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .vcs-hero-subtitle {
            font-size: 1.05rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
            max-width: 650px;
            margin-bottom: 22px;
        }

        .vcs-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
        }

        .vcs-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 14.5px;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 10px;
            transition: all 0.25s ease;
            text-decoration: none !important;
            cursor: pointer;
            border: none;
        }

        .vcs-btn-primary {
            background: linear-gradient(135deg, #1b6ca8 0%, #125586 100%);
            color: #ffffff !important;
            box-shadow: 0 4px 14px rgba(27, 108, 168, 0.35);
        }

        .vcs-btn-primary:hover {
            background: linear-gradient(135deg, #165b8e 0%, #0d4269 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(27, 108, 168, 0.45);
            color: #ffffff !important;
        }

        .vcs-btn-white {
            background: #ffffff;
            color: var(--vcs-slate-800) !important;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        .vcs-btn-white:hover {
            background: #f8fafc;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            color: var(--vcs-primary) !important;
        }

        .vcs-btn-outline-white {
            background: rgba(255, 255, 255, 0.12);
            color: #ffffff !important;
            border: 1px solid rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(8px);
        }

        .vcs-btn-outline-white:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff !important;
            transform: translateY(-2px);
        }

        /* Trust Pill Bar */
        .vcs-trust-bar {
            background: #ffffff;
            border-radius: var(--vcs-card-radius);
            padding: 18px 24px;
            box-shadow: var(--vcs-shadow-sm);
            border: 1px solid var(--vcs-slate-200);
            margin-bottom: 36px;
        }

        .vcs-trust-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .vcs-trust-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .vcs-trust-icon-box {
            width: 44px;
            height: 44px;
            min-width: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .vcs-trust-icon-primary {
            background: var(--vcs-primary-subtle);
            color: var(--vcs-primary);
        }

        .vcs-trust-icon-accent {
            background: var(--vcs-accent-subtle);
            color: var(--vcs-accent);
        }

        .vcs-trust-icon-amber {
            background: var(--vcs-amber-light);
            color: var(--vcs-amber);
        }

        .vcs-trust-icon-blue {
            background: #eff6ff;
            color: #2563eb;
        }

        .vcs-trust-text-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--vcs-slate-800);
            margin-bottom: 2px;
            line-height: 1.2;
        }

        .vcs-trust-text-desc {
            font-size: 12.5px;
            color: var(--vcs-slate-500);
            margin: 0;
            line-height: 1.3;
        }

        /* Section Headers */
        .vcs-section-header {
            text-align: center;
            max-width: 720px;
            margin: 0 auto 36px;
        }

        .vcs-section-tag {
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--vcs-primary);
            background: var(--vcs-primary-subtle);
            padding: 5px 14px;
            border-radius: 9999px;
            margin-bottom: 10px;
        }

        .vcs-section-title {
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--vcs-slate-900);
            letter-spacing: -0.02em;
            margin-bottom: 10px;
        }

        .vcs-section-desc {
            font-size: 15px;
            color: var(--vcs-slate-600);
            line-height: 1.6;
            margin: 0;
        }

        /* Intro Card */
        .vcs-intro-card {
            background: linear-gradient(135deg, #ffffff 0%, #f0f7fc 100%);
            border: 1px solid #d0e4f5;
            border-left: 6px solid var(--vcs-primary);
            border-radius: var(--vcs-card-radius);
            padding: 24px 32px;
            box-shadow: var(--vcs-shadow-sm);
            margin-bottom: 40px;
        }

        .vcs-intro-card h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin-bottom: 8px;
        }

        .vcs-intro-card p {
            font-size: 15px;
            line-height: 1.65;
            color: var(--vcs-slate-700);
            margin: 0;
        }

        /* Feature Grid */
        .vcs-feature-card {
            background: #ffffff;
            border: 1px solid var(--vcs-slate-200);
            border-radius: var(--vcs-card-radius);
            padding: 26px 24px;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: var(--vcs-shadow-sm);
            position: relative;
            overflow: hidden;
        }

        .vcs-feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--vcs-primary), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .vcs-feature-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--vcs-shadow-lg);
            border-color: #cbd5e1;
        }

        .vcs-feature-card:hover::before {
            opacity: 1;
        }

        .vcs-feature-icon-wrapper {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            margin-bottom: 18px;
            transition: transform 0.3s ease;
        }

        .vcs-feature-card:hover .vcs-feature-icon-wrapper {
            transform: scale(1.08);
        }

        .vcs-icon-teal {
            background: #ecfdf5;
            color: #059669;
        }

        .vcs-icon-blue {
            background: #eff6ff;
            color: #2563eb;
        }

        .vcs-icon-indigo {
            background: #e0e7ff;
            color: #4338ca;
        }

        .vcs-icon-amber {
            background: #fffbeb;
            color: #d97706;
        }

        .vcs-icon-rose {
            background: #fff1f2;
            color: #e11d48;
        }

        .vcs-icon-cyan {
            background: #ecfeff;
            color: #0891b2;
        }

        .vcs-feature-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin-bottom: 8px;
        }

        .vcs-feature-desc {
            font-size: 14px;
            color: var(--vcs-slate-600);
            line-height: 1.6;
            margin: 0;
            flex-grow: 1;
        }

        /* How It Works Steps */
        .vcs-steps-section {
            background: #ffffff;
            border-radius: var(--vcs-card-radius);
            padding: 40px 32px;
            border: 1px solid var(--vcs-slate-200);
            box-shadow: var(--vcs-shadow-sm);
            margin-bottom: 48px;
        }

        .vcs-steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            position: relative;
        }

        .vcs-step-item {
            position: relative;
            padding-right: 12px;
        }

        .vcs-step-num {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--vcs-primary-subtle);
            color: var(--vcs-primary);
            font-weight: 800;
            font-size: 15px;
            margin-bottom: 14px;
            border: 1px solid rgba(27, 108, 168, 0.2);
        }

        .vcs-step-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin-bottom: 6px;
        }

        .vcs-step-desc {
            font-size: 13.5px;
            color: var(--vcs-slate-500);
            line-height: 1.55;
            margin: 0;
        }

        /* Main Form Styling */
        .vcs-form-wrapper {
            background: #ffffff;
            border-radius: var(--vcs-card-radius);
            border: 1px solid var(--vcs-slate-200);
            box-shadow: var(--vcs-shadow-md);
            overflow: hidden;
        }

        .vcs-form-header {
            background: linear-gradient(135deg, #0f4b75 0%, #1b6ca8 100%);
            padding: 32px 36px;
            color: #ffffff;
            position: relative;
        }

        .vcs-form-header-title {
            font-size: 1.7rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 6px;
            letter-spacing: -0.01em;
        }

        .vcs-form-header-desc {
            font-size: 14.5px;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            max-width: 680px;
            line-height: 1.5;
        }

        .vcs-form-body {
            padding: 36px;
        }

        /* Form Section Fieldset Cards */
        .vcs-fieldset-card {
            background: #ffffff;
            border: 1px solid var(--vcs-slate-200);
            border-radius: 14px;
            padding: 24px 26px;
            margin-bottom: 28px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .vcs-fieldset-card:focus-within {
            border-color: #93c5fd;
            box-shadow: 0 4px 18px rgba(27, 108, 168, 0.06);
        }

        .vcs-fieldset-title {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--vcs-slate-100);
        }

        .vcs-fieldset-step-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 8px;
            background: var(--vcs-primary);
            color: #ffffff;
            font-size: 13px;
            font-weight: 700;
        }

        /* Form Controls */
        .vcs-form-group {
            margin-bottom: 20px;
        }

        .vcs-label {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 13.5px;
            font-weight: 600;
            color: var(--vcs-slate-800);
            margin-bottom: 7px;
        }

        .vcs-req {
            color: #ef4444;
            font-weight: 700;
        }

        .vcs-hint {
            font-size: 12px;
            color: var(--vcs-slate-500);
            margin-top: 4px;
            display: block;
            line-height: 1.4;
        }

        .vcs-input,
        .vcs-select,
        .vcs-textarea {
            width: 100%;
            padding: 11px 15px;
            font-size: 14.5px;
            color: var(--vcs-slate-800);
            background-color: #f8fafc;
            border: 1.5px solid var(--vcs-slate-200);
            border-radius: var(--vcs-inner-radius);
            transition: all 0.2s ease;
            outline: none;
            font-family: inherit;
        }

        .vcs-input:focus,
        .vcs-select:focus,
        .vcs-textarea:focus {
            background-color: #ffffff;
            border-color: var(--vcs-primary);
            box-shadow: 0 0 0 3.5px rgba(27, 108, 168, 0.12);
        }

        .vcs-input::placeholder,
        .vcs-textarea::placeholder {
            color: #94a3b8;
        }

        .vcs-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23475569'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            background-size: 16px;
            padding-right: 40px;
            cursor: pointer;
        }

        /* Modern File Upload Dropzone */
        .vcs-dropzone {
            border: 2px dashed #cbd5e1;
            border-radius: 12px;
            padding: 24px 20px;
            text-align: center;
            background: #f8fafc;
            cursor: pointer;
            transition: all 0.25s ease;
            position: relative;
        }

        .vcs-dropzone:hover,
        .vcs-dropzone.dragover {
            border-color: var(--vcs-primary);
            background: #f0f7fc;
        }

        .vcs-dropzone-icon {
            font-size: 38px;
            color: var(--vcs-primary);
            margin-bottom: 8px;
            display: inline-block;
        }

        .vcs-dropzone-title {
            font-size: 14.5px;
            font-weight: 700;
            color: var(--vcs-slate-800);
            margin-bottom: 4px;
        }

        .vcs-dropzone-subtitle {
            font-size: 12.5px;
            color: var(--vcs-slate-500);
            margin: 0;
        }

        .vcs-dropzone input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .vcs-file-preview-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
            justify-content: center;
        }

        .vcs-file-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 4px 10px;
            font-size: 12px;
            color: var(--vcs-slate-700);
        }

        /* Auth Callout Boxes */
        .vcs-auth-callout {
            background: linear-gradient(135deg, #eff6ff 0%, #f0fdf4 100%);
            border: 1px solid #bfdbfe;
            border-radius: 14px;
            padding: 24px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 18px;
            margin-bottom: 30px;
        }

        .vcs-auth-callout-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: var(--vcs-shadow-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: var(--vcs-primary);
        }

        .vcs-auth-callout-content {
            flex: 1;
            min-width: 260px;
        }

        .vcs-auth-callout-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin-bottom: 4px;
        }

        .vcs-auth-callout-desc {
            font-size: 13.5px;
            color: var(--vcs-slate-600);
            margin: 0;
            line-height: 1.5;
        }

        .vcs-auth-callout-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* Logged In Status Pill */
        .vcs-logged-status {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            border-radius: 12px;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 28px;
        }

        .vcs-logged-status-left {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            font-weight: 600;
            color: #065f46;
        }

        .vcs-logged-status-right a {
            font-size: 13px;
            font-weight: 600;
            color: var(--vcs-primary);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .vcs-logged-status-right a:hover {
            text-decoration: underline;
        }

        /* Error Alert */
        .vcs-alert-danger {
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 12px;
            padding: 18px 22px;
            margin-bottom: 28px;
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .vcs-alert-danger-icon {
            font-size: 24px;
            color: #ef4444;
            margin-top: 2px;
        }

        .vcs-alert-danger-title {
            font-size: 14.5px;
            font-weight: 700;
            color: #991b1b;
            margin-bottom: 6px;
        }

        .vcs-alert-danger ul {
            margin: 0;
            padding-left: 20px;
            font-size: 13.5px;
            color: #b91c1c;
        }

        /* Sticky Sidebar */
        .vcs-sticky-sidebar {
            position: sticky;
            top: 90px;
        }

        .vcs-sidebar-card {
            background: #ffffff;
            border: 1px solid var(--vcs-slate-200);
            border-radius: var(--vcs-card-radius);
            padding: 24px;
            box-shadow: var(--vcs-shadow-sm);
            margin-bottom: 24px;
        }

        .vcs-sidebar-card-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .vcs-guarantee-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .vcs-guarantee-item {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
            align-items: flex-start;
        }

        .vcs-guarantee-item:last-child {
            margin-bottom: 0;
        }

        .vcs-guarantee-check {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--vcs-accent-subtle);
            color: var(--vcs-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .vcs-guarantee-heading {
            font-size: 13.5px;
            font-weight: 700;
            color: var(--vcs-slate-800);
            margin-bottom: 2px;
        }

        .vcs-guarantee-sub {
            font-size: 12.5px;
            color: var(--vcs-slate-500);
            line-height: 1.4;
            margin: 0;
        }

        /* Modern Sidebar Timeline Component */
        .vcs-timeline {
            position: relative;
            padding-left: 38px;
            margin: 12px 0 4px;
        }

        .vcs-timeline::before {
            content: '';
            position: absolute;
            top: 14px;
            bottom: 24px;
            left: 13px;
            width: 2px;
            background: linear-gradient(180deg, var(--vcs-primary) 0%, #cbd5e1 100%);
            border-radius: 2px;
        }

        .vcs-timeline-item {
            position: relative;
            padding-bottom: 18px;
        }

        .vcs-timeline-item:last-child {
            padding-bottom: 0;
        }

        .vcs-timeline-node {
            position: absolute;
            left: -38px;
            top: 0;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #ffffff;
            border: 2px solid var(--vcs-primary);
            color: var(--vcs-primary);
            font-size: 12.5px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 0 3px rgba(27, 108, 168, 0.12);
            z-index: 1;
            transition: all 0.25s ease;
        }

        .vcs-timeline-node-accent {
            border-color: var(--vcs-accent);
            color: var(--vcs-accent);
            box-shadow: 0 0 0 3px rgba(5, 150, 105, 0.12);
        }

        .vcs-timeline-item:hover .vcs-timeline-node {
            background: var(--vcs-primary);
            color: #ffffff;
            transform: scale(1.08);
        }

        .vcs-timeline-item:hover .vcs-timeline-node-accent {
            background: var(--vcs-accent);
            color: #ffffff;
        }

        .vcs-timeline-card {
            background: #f8fafc;
            border: 1px solid var(--vcs-slate-200);
            border-radius: 10px;
            padding: 12px 14px;
            transition: all 0.25s ease;
        }

        .vcs-timeline-item:hover .vcs-timeline-card {
            background: #ffffff;
            border-color: #cbd5e1;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.06);
        }

        .vcs-timeline-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .vcs-timeline-title {
            font-size: 13.5px;
            font-weight: 700;
            color: var(--vcs-slate-900);
            margin: 0;
            line-height: 1.3;
        }

        .vcs-timeline-tag {
            font-size: 11px;
            font-weight: 600;
            padding: 2px 7px;
            border-radius: 6px;
            background: var(--vcs-primary-subtle);
            color: var(--vcs-primary);
            white-space: nowrap;
            margin-left: 8px;
            display: inline-block;
        }

        .vcs-timeline-tag-accent {
            background: var(--vcs-accent-subtle);
            color: var(--vcs-accent);
        }

        .vcs-timeline-desc {
            font-size: 12.5px;
            color: var(--vcs-slate-600);
            line-height: 1.45;
            margin: 0;
        }

        .vcs-help-box {
            background: linear-gradient(135deg, #0e4d77 0%, #0f172a 100%);
            border-radius: var(--vcs-card-radius);
            padding: 24px;
            color: #ffffff;
            box-shadow: var(--vcs-shadow-md);
        }

        .vcs-help-box h4 {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .vcs-help-box p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.5;
            margin-bottom: 16px;
        }

        /* Terms note */
        .vcs-terms-note {
            background: #f8fafc;
            border: 1px solid var(--vcs-slate-200);
            border-radius: 10px;
            padding: 14px 18px;
            font-size: 12.5px;
            line-height: 1.6;
            color: var(--vcs-slate-600);
            margin-bottom: 24px;
        }

        /* Form Action Buttons */
        .vcs-submit-btn {
            padding: 14px 34px;
            font-size: 16px;
            font-weight: 700;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--vcs-primary) 0%, #0e4d77 100%);
            color: #ffffff !important;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 18px rgba(27, 108, 168, 0.35);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .vcs-submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(27, 108, 168, 0.45);
            background: linear-gradient(135deg, #165b8e 0%, #0a3a5c 100%);
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* ==========================================================
           COMPREHENSIVE RESPONSIVE DESIGN (Tablets & Mobile)
           ========================================================== */
        @media (max-width: 991px) {
            .vcs-trust-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }

            .vcs-steps-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .vcs-sticky-sidebar {
                position: static;
                margin-top: 14px;
            }
        }

        @media (max-width: 768px) {
            .vcs-wrapper {
                padding-bottom: 40px;
                overflow-x: hidden;
            }

            .vcs-wrapper .container {
                padding-left: 14px;
                padding-right: 14px;
            }

            /* Breadcrumbs */
            .vcs-breadcrumb-nav {
                padding: 10px 0 4px;
            }
            .vcs-breadcrumb {
                font-size: 12px;
                gap: 6px;
            }

            /* Hero Banner */
            .vcs-hero-container {
                margin-top: 8px;
                margin-bottom: 20px;
            }
            .vcs-hero-banner-wrapper {
                min-height: 320px;
                border-radius: 14px;
                display: flex;
                align-items: stretch;
                position: relative;
            }
            .vcs-hero-banner-img {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                max-height: none;
                object-fit: cover;
                object-position: center;
            }
            .vcs-hero-overlay {
                position: relative;
                z-index: 2;
                width: 100%;
                background: linear-gradient(180deg, rgba(15, 23, 42, 0.8) 0%, rgba(15, 23, 42, 0.95) 100%);
                padding: 26px 18px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .vcs-badge-pill {
                font-size: 10.5px;
                padding: 4px 10px;
                margin-bottom: 10px;
                max-width: 100%;
                white-space: normal;
                line-height: 1.35;
            }
            .vcs-hero-title {
                font-size: 1.45rem;
                line-height: 1.25;
                margin-bottom: 8px;
            }
            .vcs-hero-subtitle {
                font-size: 0.88rem;
                line-height: 1.5;
                margin-bottom: 16px;
            }
            .vcs-hero-actions {
                flex-direction: column;
                width: 100%;
                gap: 8px;
            }
            .vcs-hero-actions .vcs-btn {
                width: 100%;
                justify-content: center;
                padding: 11px 16px;
                font-size: 14px;
            }

            /* Trust Bar */
            .vcs-trust-bar {
                padding: 14px 12px;
                margin-bottom: 24px;
                border-radius: 12px;
            }
            .vcs-trust-grid {
                gap: 12px;
            }
            .vcs-trust-item {
                gap: 10px;
            }
            .vcs-trust-icon-box {
                width: 38px;
                height: 38px;
                min-width: 38px;
                font-size: 18px;
                border-radius: 10px;
            }
            .vcs-trust-text-title {
                font-size: 13px;
            }
            .vcs-trust-text-desc {
                font-size: 11.5px;
            }

            /* Intro Card */
            .vcs-intro-card {
                padding: 16px 14px;
                margin-bottom: 28px;
                border-radius: 12px;
                border-left-width: 4px;
            }
            .vcs-intro-card h3 {
                font-size: 1.05rem;
                line-height: 1.35;
                margin-bottom: 6px;
            }
            .vcs-intro-card p {
                font-size: 13.5px;
                line-height: 1.55;
            }

            /* Section Headers */
            .vcs-section-header {
                margin-bottom: 22px;
            }
            .vcs-section-tag {
                font-size: 11px;
                padding: 4px 10px;
                margin-bottom: 8px;
            }
            .vcs-section-title {
                font-size: 1.35rem;
                line-height: 1.3;
                margin-bottom: 6px;
            }
            .vcs-section-desc {
                font-size: 13.5px;
                line-height: 1.5;
            }

            /* Feature Grid Cards */
            .vcs-feature-card {
                padding: 18px 16px;
                border-radius: 12px;
            }
            .vcs-feature-icon-wrapper {
                width: 44px;
                height: 44px;
                font-size: 22px;
                margin-bottom: 12px;
                border-radius: 10px;
            }
            .vcs-feature-title {
                font-size: 1rem;
                margin-bottom: 6px;
            }
            .vcs-feature-desc {
                font-size: 13px;
                line-height: 1.5;
            }

            /* Steps Section */
            .vcs-steps-section {
                padding: 22px 14px;
                margin-bottom: 28px;
                border-radius: 12px;
            }

            /* Form Container */
            .vcs-form-wrapper {
                border-radius: 12px;
            }
            .vcs-form-header {
                padding: 20px 16px;
            }
            .vcs-form-header-title {
                font-size: 1.3rem;
                line-height: 1.3;
            }
            .vcs-form-header-desc {
                font-size: 13px;
                line-height: 1.45;
            }
            .vcs-form-body {
                padding: 16px 12px;
            }

            /* Fieldset Cards - Proper mobile padding */
            .vcs-fieldset-card {
                padding: 14px 12px;
                margin-bottom: 16px;
                border-radius: 10px;
            }
            .vcs-fieldset-title {
                font-size: 0.98rem;
                gap: 8px;
                margin-bottom: 14px;
                padding-bottom: 8px;
            }
            .vcs-fieldset-step-badge {
                width: 24px;
                height: 24px;
                font-size: 12px;
                border-radius: 6px;
            }

            /* Form Inputs - prevent iOS zoom with 16px font-size */
            .vcs-form-group {
                margin-bottom: 14px;
            }
            .vcs-label {
                font-size: 13px;
                margin-bottom: 5px;
            }
            .vcs-input,
            .vcs-select,
            .vcs-textarea {
                padding: 10px 12px;
                font-size: 16px !important;
                border-radius: 8px;
            }
            .vcs-hint {
                font-size: 11.5px;
            }

            /* File Dropzone */
            .vcs-dropzone {
                padding: 18px 10px;
                border-radius: 10px;
            }
            .vcs-dropzone-icon {
                font-size: 30px;
                margin-bottom: 4px;
            }
            .vcs-dropzone-title {
                font-size: 13.5px;
            }
            .vcs-dropzone-subtitle {
                font-size: 11.5px;
            }

            /* Auth Callout */
            .vcs-auth-callout {
                padding: 16px 14px;
                gap: 12px;
                border-radius: 12px;
                margin-bottom: 20px;
            }
            .vcs-auth-callout-icon {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
            .vcs-auth-callout-title {
                font-size: 0.95rem;
            }
            .vcs-auth-callout-desc {
                font-size: 12.5px;
            }
            .vcs-auth-callout-actions {
                width: 100%;
                flex-direction: column;
                gap: 8px;
            }
            .vcs-auth-callout-actions .vcs-btn {
                width: 100%;
                justify-content: center;
                padding: 10px 14px;
                font-size: 13.5px;
            }

            /* Logged Status */
            .vcs-logged-status {
                padding: 12px 14px;
                border-radius: 10px;
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                margin-bottom: 18px;
            }
            .vcs-logged-status-left {
                font-size: 13px;
            }
            .vcs-logged-status-right {
                align-self: flex-start;
            }

            /* Terms Note */
            .vcs-terms-note {
                padding: 12px 12px;
                font-size: 11.5px;
                line-height: 1.5;
                margin-bottom: 18px;
            }

            /* Submit Button Action Area */
            .vcs-submit-action-row {
                flex-direction: column-reverse;
                gap: 12px;
                width: 100%;
                text-align: center;
            }
            .vcs-submit-btn-wrap,
            .vcs-submit-btn {
                width: 100% !important;
                justify-content: center;
                padding: 13px 20px;
                font-size: 15px;
            }
            .vcs-ssl-notice {
                width: 100%;
                text-align: center;
                font-size: 12px;
            }

            /* Sidebar on Mobile */
            .vcs-sidebar-card {
                padding: 18px 16px;
                border-radius: 12px;
                margin-bottom: 16px;
            }
            .vcs-sidebar-card-title {
                font-size: 0.98rem;
                margin-bottom: 12px;
            }
            .vcs-guarantee-item {
                gap: 10px;
                margin-bottom: 12px;
            }
            .vcs-guarantee-check {
                width: 22px;
                height: 22px;
                font-size: 12px;
                margin-right: 8px;
            }
            .vcs-guarantee-heading {
                font-size: 13px;
            }
            .vcs-guarantee-sub {
                font-size: 12px;
            }

            /* Timeline on Mobile */
            .vcs-timeline {
                padding-left: 32px;
            }
            .vcs-timeline::before {
                left: 11px;
            }
            .vcs-timeline-node {
                left: -32px;
                width: 24px;
                height: 24px;
                font-size: 11px;
            }
            .vcs-timeline-card {
                padding: 10px 12px;
            }
            .vcs-timeline-title {
                font-size: 13px;
            }
            .vcs-timeline-tag {
                font-size: 10px;
                padding: 1px 5px;
            }
            .vcs-timeline-desc {
                font-size: 12px;
            }

            /* Urgent Help Box */
            .vcs-help-box {
                padding: 18px 16px;
                border-radius: 12px;
            }
            .vcs-help-box h4 {
                font-size: 1.05rem;
            }
            .vcs-help-box p {
                font-size: 12.5px;
            }
            .vcs-help-box .vcs-btn {
                width: 100%;
                justify-content: center;
                padding: 10px;
                font-size: 13.5px;
            }
        }

        @media (max-width: 576px) {
            .vcs-trust-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .vcs-steps-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .vcs-step-item {
                display: flex;
                align-items: flex-start;
                gap: 12px;
                padding-right: 0;
            }
            .vcs-step-num {
                margin-bottom: 0;
                margin-right: 4px;
                width: 32px;
                height: 32px;
                min-width: 32px;
                font-size: 12.5px;
                flex-shrink: 0;
            }
            .vcs-step-content {
                flex: 1;
            }
            .vcs-step-title {
                font-size: 14px;
                margin-bottom: 3px;
            }
            .vcs-step-desc {
                font-size: 12.5px;
                line-height: 1.45;
            }
        }
    </style>

    @php
        $authUser = Auth::check() ? Auth::user() : null;
        $nameParts = $authUser ? explode(' ', $authUser->name, 2) : ['', ''];
        $defaultFirstName = old('first_name', $nameParts[0] ?? '');
        $defaultLastName = old('last_name', $nameParts[1] ?? '');
        $defaultEmail = old('email', $authUser ? $authUser->email : '');
        $defaultPhone = old('contact_number', $authUser ? $authUser->phone : '');
        $defaultCity = old('city', $authUser ? $authUser->city : '');
        $defaultCountry = old('country', $authUser ? ($authUser->country ?? 'Sri Lanka') : 'Sri Lanka');
        $defaultAddress = old('company_address', $authUser ? $authUser->address : '');
    @endphp

    <div class="vcs-wrapper">
        <div class="container">

            <!-- Breadcrumb Navigation -->
            <nav class="vcs-breadcrumb-nav" aria-label="Breadcrumb">
                <ul class="vcs-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}"><i class="la la-home"></i> {{ translate('Home') }}</a>
                    </li>
                    <li class="vcs-breadcrumb-separator"><i class="la la-angle-right"></i></li>
                    <li class="vcs-breadcrumb-current">{{ translate('Value Ceylon Health Sourcing') }}</li>
                </ul>
            </nav>

            <!-- Hero Banner Showcase -->
            <section class="vcs-hero-container">
                <div class="vcs-hero-banner-wrapper">
                    <img class="vcs-hero-banner-img" src="{{ static_asset('assets/img/banner/sourcing-banner.jpg') }}"
                        alt="Value Ceylon Health Sourcing Sri Lanka">
                    <div class="vcs-hero-overlay">

                        <h1 class="vcs-hero-title">
                            {{ translate('Value Ceylon Health Sourcing') }}
                        </h1>
                        <p class="vcs-hero-subtitle">
                            {{ translate('Connect directly with verified Sri Lankan pharmaceutical manufacturers, licensed healthcare distributors, and certified medical suppliers for high-volume wholesale sourcing.') }}
                        </p>
                        <div class="vcs-hero-actions">
                            <a href="#sourcing-rfq-form" class="vcs-btn vcs-btn-white">
                                <i class="la la-file-text-o fs-18"></i>
                                {{ translate('Submit Sourcing RFQ') }}
                            </a>
                            <a href="#how-it-works" class="vcs-btn vcs-btn-outline-white">
                                <i class="la la-info-circle fs-18"></i>
                                {{ translate('How It Works') }}
                            </a>
                            @if (isCustomer())
                                <a href="{{ route('customer.my-rfqs') }}" class="vcs-btn vcs-btn-outline-white">
                                    <i class="la la-list-alt fs-18"></i>
                                    {{ translate('My Submitted RFQs') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trust Statistics Bar -->
            <div class="vcs-trust-bar">
                <div class="vcs-trust-grid">
                    <div class="vcs-trust-item">
                        <div class="vcs-trust-icon-box vcs-trust-icon-accent">
                            <i class="la la-shield-alt"></i>
                        </div>
                        <div>
                            <div class="vcs-trust-text-title">{{ translate('NMRA & GMP Verified') }}</div>
                            <div class="vcs-trust-text-desc">{{ translate('Strict Sri Lankan health compliance') }}</div>
                        </div>
                    </div>
                    <div class="vcs-trust-item">
                        <div class="vcs-trust-icon-box vcs-trust-icon-primary">
                            <i class="la la-building"></i>
                        </div>
                        <div>
                            <div class="vcs-trust-text-title">{{ translate('Licensed Suppliers') }}</div>
                            <div class="vcs-trust-text-desc">{{ translate('Direct pharmaceutical partners') }}</div>
                        </div>
                    </div>
                    <div class="vcs-trust-item">
                        <div class="vcs-trust-icon-box vcs-trust-icon-amber">
                            <i class="la la-hand-holding-usd"></i>
                        </div>
                        <div>
                            <div class="vcs-trust-text-title">{{ translate('Wholesale Pricing') }}</div>
                            <div class="vcs-trust-text-desc">{{ translate('Manufacturer-direct volume tiers') }}</div>
                        </div>
                    </div>
                    <div class="vcs-trust-item">
                        <div class="vcs-trust-icon-box vcs-trust-icon-blue">
                            <i class="la la-shipping-fast"></i>
                        </div>
                        <div>
                            <div class="vcs-trust-text-title">{{ translate('Cold-Chain Fulfillment') }}</div>
                            <div class="vcs-trust-text-desc">{{ translate('Secure, verified delivery islandwide') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Platform Intro Banner -->
            <div class="vcs-intro-card">
                <h3><i class="la la-stethoscope text-primary mr-1"></i>
                    {{ translate('Looking for a trusted pharmaceutical sourcing partner in Sri Lanka?') }}</h3>
                <p>
                    <strong>ValueCeylonHealth.com</strong>
                    {{ translate('is your premier multi-vendor pharmaceutical and healthcare procurement platform. We connect clinics, hospitals, pharmacies, NGOs, and medical professionals directly with licensed, NMRA-compliant suppliers across Sri Lanka to guarantee product authenticity, transparent pricing, and rapid fulfillment.') }}
                </p>
            </div>

            <!-- Sourcing Advantages Grid -->
            <section class="mb-5">
                <div class="vcs-section-header">
                    <span class="vcs-section-tag">{{ translate('Platform Benefits') }}</span>
                    <h2 class="vcs-section-title">{{ translate('Why Source With Value Ceylon?') }}</h2>
                    <p class="vcs-section-desc">
                        {{ translate('We eliminate procurement friction with rigorous compliance checks, specialized product matching, and dedicated buyer protection.') }}
                    </p>
                </div>

                <div class="row">
                    <!-- Advantage 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="vcs-feature-card">
                            <div class="vcs-feature-icon-wrapper vcs-icon-teal">
                                <i class="la la-shield-alt"></i>
                            </div>
                            <h3 class="vcs-feature-title">{{ translate('Verified by Quality Assurance') }}</h3>
                            <p class="vcs-feature-desc">
                                {{ translate('Every vendor is screened and vetted based on NMRA registration, active license validation, product authenticity, and ethical medical supply practices.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Advantage 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="vcs-feature-card">
                            <div class="vcs-feature-icon-wrapper vcs-icon-blue">
                                <i class="la la-certificate"></i>
                            </div>
                            <h3 class="vcs-feature-title">{{ translate('NMRA & GMP Compliance') }}</h3>
                            <p class="vcs-feature-desc">
                                {{ translate('We ensure all sourced pharmaceutical products, medical devices, and consumable items meet Sri Lankan regulatory standards and Good Manufacturing Practices.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Advantage 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="vcs-feature-card">
                            <div class="vcs-feature-icon-wrapper vcs-icon-indigo">
                                <i class="la la-search-plus"></i>
                            </div>
                            <h3 class="vcs-feature-title">{{ translate('Customized Product Sourcing') }}</h3>
                            <p class="vcs-feature-desc">
                                {{ translate('Can’t locate a specific API, medical consumable, or specialized dosage form? Submit your detailed specifications and our sourcing specialists will identify verified manufacturers.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Advantage 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="vcs-feature-card">
                            <div class="vcs-feature-icon-wrapper vcs-icon-amber">
                                <i class="la la-wallet"></i>
                            </div>
                            <h3 class="vcs-feature-title">{{ translate('Cost-Saving B2B Solutions') }}</h3>
                            <p class="vcs-feature-desc">
                                {{ translate('Benefit from direct factory access without unnecessary middleman markups. Unlock exclusive tiered pricing and flexible payment options for high-volume orders.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Advantage 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="vcs-feature-card">
                            <div class="vcs-feature-icon-wrapper vcs-icon-rose">
                                <i class="la la-truck"></i>
                            </div>
                            <h3 class="vcs-feature-title">{{ translate('Reliable Cold-Chain & Fulfillment') }}</h3>
                            <p class="vcs-feature-desc">
                                {{ translate('We coordinate with certified logistics providers to maintain strict temperature controls, secure packaging, and punctual dispatch to hospitals and dispensaries islandwide.') }}
                            </p>
                        </div>
                    </div>

                    <!-- Advantage 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="vcs-feature-card">
                            <div class="vcs-feature-icon-wrapper vcs-icon-cyan">
                                <i class="la la-user-tie"></i>
                            </div>
                            <h3 class="vcs-feature-title">{{ translate('Dedicated Business Matching') }}</h3>
                            <p class="vcs-feature-desc">
                                {{ translate('Our healthcare procurement managers review your requirements and provide tailored supplier recommendations suited for institutional tenders, clinics, and pharmacies.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works 4-Step Process -->
            <section id="how-it-works" class="vcs-steps-section">
                <div class="vcs-section-header mb-4">
                    <span class="vcs-section-tag">{{ translate('Simple 4-Step Process') }}</span>
                    <h2 class="vcs-section-title">{{ translate('How Value Ceylon Sourcing Works') }}</h2>
                    <p class="vcs-section-desc">
                        {{ translate('From request submission to confirmed delivery, our transparent workflow keeps your medical procurement seamless.') }}
                    </p>
                </div>

                <div class="vcs-steps-grid">
                    <div class="vcs-step-item">
                        <div class="vcs-step-num">01</div>
                        <div class="vcs-step-content">
                            <h4 class="vcs-step-title">{{ translate('Submit RFQ') }}</h4>
                            <p class="vcs-step-desc">
                                {{ translate('Specify required drugs, devices, volume, packaging, and delivery deadlines via our secure form.') }}
                            </p>
                        </div>
                    </div>
                    <div class="vcs-step-item">
                        <div class="vcs-step-num">02</div>
                        <div class="vcs-step-content">
                            <h4 class="vcs-step-title">{{ translate('Verified Matching') }}</h4>
                            <p class="vcs-step-desc">
                                {{ translate('Our team verifies specifications and matches your order with NMRA-certified manufacturers.') }}
                            </p>
                        </div>
                    </div>
                    <div class="vcs-step-item">
                        <div class="vcs-step-num">03</div>
                        <div class="vcs-step-content">
                            <h4 class="vcs-step-title">{{ translate('Receive Quotes') }}</h4>
                            <p class="vcs-step-desc">
                                {{ translate('Compare competitive wholesale quotes, lead times, and terms directly in your buyer dashboard.') }}
                            </p>
                        </div>
                    </div>
                    <div class="vcs-step-item">
                        <div class="vcs-step-num">04</div>
                        <div class="vcs-step-content">
                            <h4 class="vcs-step-title">{{ translate('Secure Delivery') }}</h4>
                            <p class="vcs-step-desc">
                                {{ translate('Finalize your order with trusted cold-chain shipping, quality verification, and on-time delivery.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sourcing RFQ Form Section -->
            <section id="sourcing-rfq-form">
                <div class="row">

                    <!-- Main Form Column (8 Cols) -->
                    <div class="col-lg-8 mb-4">
                        <div class="vcs-form-wrapper">

                            <!-- Form Header Banner -->
                            <div class="vcs-form-header">
                                
                                <h2 class="vcs-form-header-title">{{ translate('Submit Your Sourcing Request') }}</h2>
                                <p class="vcs-form-header-desc">
                                    {{ translate('Provide your product specifications, target volumes, and delivery expectations below. Our medical procurement specialists will match your request with certified suppliers.') }}
                                </p>
                            </div>

                            <div class="vcs-form-body">

                                <!-- Validation Error Messages -->
                                @if ($errors->any())
                                    <div class="vcs-alert-danger" role="alert">
                                        <div class="vcs-alert-danger-icon">
                                            <i class="la la-exclamation-triangle"></i>
                                        </div>
                                        <div>
                                            <div class="vcs-alert-danger-title">
                                                {{ translate('Please correct the following errors:') }}</div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif

                                <!-- Customer Account Status Notice -->
                                @if (!isCustomer())
                                    <div class="vcs-auth-callout">
                                        <div class="vcs-auth-callout-icon">
                                            <i class="la la-user-lock"></i>
                                        </div>
                                        <div class="vcs-auth-callout-content">
                                            <div class="vcs-auth-callout-title">{{ translate('Customer Account Required') }}
                                            </div>
                                            <p class="vcs-auth-callout-desc">
                                                {{ translate('To ensure buyer security and track quotation status, sourcing requests require an active customer account. Sign in below or register in seconds.') }}
                                            </p>
                                        </div>
                                        <div class="vcs-auth-callout-actions">
                                            <a href="{{ route('user.login') }}" class="vcs-btn vcs-btn-primary">
                                                <i class="la la-sign-in"></i> {{ translate('Sign In') }}
                                            </a>
                                            <a href="{{ route('user.registration') }}" class="vcs-btn vcs-btn-white border">
                                                <i class="la la-user-plus"></i> {{ translate('Register') }}
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="vcs-logged-status">
                                        <div class="vcs-logged-status-left">
                                            <i class="la la-check-circle fs-20 text-success"></i>
                                            <span>{{ translate('Logged in as') }} <strong>{{ Auth::user()->name }}</strong>
                                                ({{ Auth::user()->email }})</span>
                                        </div>
                                        <div class="vcs-logged-status-right">
                                            <a href="{{ route('customer.my-rfqs') }}">
                                                <i class="la la-external-link"></i> {{ translate('View My RFQs') }}
                                            </a>
                                        </div>
                                    </div>
                                @endif

                                <!-- RFQ Form -->
                                <form action="{{ route('customer.rfq.save') }}" method="POST" enctype="multipart/form-data"
                                    id="rfqSubmissionForm">
                                    @csrf

                                    <!-- Section 1: Buyer Information -->
                                    <div class="vcs-fieldset-card">
                                        <div class="vcs-fieldset-title">
                                            <span class="vcs-fieldset-step-badge">1</span>
                                            <span>{{ translate('Buyer & Contact Information') }}</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="first_name">
                                                    {{ translate('First Name') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="first_name" name="first_name" class="vcs-input"
                                                    value="{{ $defaultFirstName }}"
                                                    placeholder="{{ translate('e.g. Ruwan') }}" required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="last_name">
                                                    {{ translate('Last Name') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="last_name" name="last_name" class="vcs-input"
                                                    value="{{ $defaultLastName }}"
                                                    placeholder="{{ translate('e.g. Fernando') }}" required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="email">
                                                    {{ translate('Email Address') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="email" id="email" name="email" class="vcs-input"
                                                    value="{{ $defaultEmail }}"
                                                    placeholder="{{ translate('name@institution.com') }}" required>
                                                <span
                                                    class="vcs-hint">{{ translate('Supplier quotations will be sent to this email') }}</span>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="designation">
                                                    {{ translate('Designation / Role') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="designation" name="designation" class="vcs-input"
                                                    value="{{ old('designation') }}"
                                                    placeholder="{{ translate('e.g. Procurement Officer, Chief Pharmacist') }}"
                                                    required>
                                            </div>

                                            <div class="col-md-4 vcs-form-group">
                                                <label class="vcs-label" for="contact_number">
                                                    {{ translate('Contact Phone') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="contact_number" name="contact_number"
                                                    class="vcs-input" value="{{ $defaultPhone }}"
                                                    placeholder="{{ translate('+94 77 123 4567') }}" required>
                                            </div>

                                            <div class="col-md-4 vcs-form-group">
                                                <label class="vcs-label" for="city">
                                                    {{ translate('City') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="city" name="city" class="vcs-input"
                                                    value="{{ $defaultCity }}" placeholder="{{ translate('e.g. Colombo') }}"
                                                    required>
                                            </div>

                                            <div class="col-md-4 vcs-form-group">
                                                <label class="vcs-label" for="country">
                                                    {{ translate('Country') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="country" name="country" class="vcs-input"
                                                    value="{{ $defaultCountry }}"
                                                    placeholder="{{ translate('e.g. Sri Lanka') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 2: Business & Institution Information -->
                                    <div class="vcs-fieldset-card">
                                        <div class="vcs-fieldset-title">
                                            <span class="vcs-fieldset-step-badge">2</span>
                                            <span>{{ translate('Business & Institution Details') }}</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="company_name">
                                                    {{ translate('Company / Hospital / Clinic Name') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="company_name" name="company_name" class="vcs-input"
                                                    value="{{ old('company_name') }}"
                                                    placeholder="{{ translate('e.g. Asiri Health, MediCare Clinic') }}"
                                                    required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="company_email">
                                                    {{ translate('Official Business Email') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="email" id="company_email" name="company_email"
                                                    class="vcs-input" value="{{ old('company_email', $defaultEmail) }}"
                                                    placeholder="{{ translate('procurement@company.com') }}" required>
                                            </div>

                                            <div class="col-12 vcs-form-group">
                                                <label class="vcs-label" for="company_address">
                                                    {{ translate('Registered Company / Office Address') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="company_address" name="company_address"
                                                    class="vcs-input" value="{{ old('company_address', $defaultAddress) }}"
                                                    placeholder="{{ translate('Street Address, Building, City') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 3: Sourcing Requirements -->
                                    <div class="vcs-fieldset-card">
                                        <div class="vcs-fieldset-title">
                                            <span class="vcs-fieldset-step-badge">3</span>
                                            <span>{{ translate('Product Sourcing Requirements') }}</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="product_name">
                                                    {{ translate('Product / Medicine / Equipment Name') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="product_name" name="product_name" class="vcs-input"
                                                    value="{{ old('product_name') }}"
                                                    placeholder="{{ translate('e.g. Amoxicillin 500mg, Surgical Gloves Box') }}"
                                                    required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="product_category">
                                                    {{ translate('Product Category') }} <span class="vcs-req">*</span>
                                                </label>
                                                <select name="product_category" id="product_category" class="vcs-select"
                                                    required>
                                                    <option value="" disabled selected>
                                                        {{ translate('Select Product Category') }}</option>
                                                    @forelse ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ old('product_category') == $category->id ? 'selected' : '' }}>
                                                            {{ $category->getTranslation('name') }}
                                                        </option>
                                                    @empty
                                                        <option value="">{{ translate('No categories available') }}</option>
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="quantity">
                                                    {{ translate('Required Quantity') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="number" step="any" min="1" id="quantity" name="quantity"
                                                    class="vcs-input" value="{{ old('quantity') }}"
                                                    placeholder="{{ translate('e.g. 5000') }}" required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="package_type_id">
                                                    {{ translate('Package / Packaging Type') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <select name="package_type_id" id="package_type_id" class="vcs-select"
                                                    required>
                                                    <option value="" disabled selected>
                                                        {{ translate('Select Packaging Type') }}</option>
                                                    @forelse ($package_types as $package_type)
                                                        <option value="{{ $package_type->id }}" {{ old('package_type_id') == $package_type->id ? 'selected' : '' }}>
                                                            {{ $package_type->name }}
                                                        </option>
                                                    @empty
                                                        <option value="">{{ translate('Standard Packaging') }}</option>
                                                    @endforelse
                                                </select>
                                            </div>

                                            <div class="col-12 vcs-form-group">
                                                <label class="vcs-label" for="product_customization">
                                                    {{ translate('Detailed Specifications / Customization Requirements') }}
                                                    <span class="vcs-req">*</span>
                                                </label>
                                                <textarea name="product_customization" id="product_customization" rows="5"
                                                    class="vcs-textarea" required
                                                    placeholder="{{ translate('Please specify your detailed requirements to ensure prompt, precise supplier quotations (e.g. dosage form, active ingredient strength, brand preferences, required certifications like NMRA/GMP/ISO, packaging specs, and target price expectations)...') }}">{{ old('product_customization') }}</textarea>
                                                <span class="vcs-hint">
                                                    <i class="la la-info-circle text-primary"></i> {{ translate('Include details such as API strength, required certifications (NMRA, GMP, ISO), and packaging specifications for accurate supplier bids.') }}
                                                </span>
                                            </div>

                                            <!-- Product Images Dropzone -->
                                            <div class="col-12 vcs-form-group">
                                                <label class="vcs-label">
                                                    {{ translate('Product Reference Images / Specification Sheets') }}
                                                </label>
                                                <div class="vcs-dropzone" id="vcsDropzone">
                                                    <input type="file" name="product_images[]" id="product_images" multiple
                                                        accept="image/*,.pdf,.doc,.docx">
                                                    <div class="vcs-dropzone-icon">
                                                        <i class="la la-cloud-upload"></i>
                                                    </div>
                                                    <div class="vcs-dropzone-title">
                                                        {{ translate('Click or drag files here to upload') }}</div>
                                                    <div class="vcs-dropzone-subtitle">
                                                        {{ translate('Supports JPG, PNG, PDF up to 10MB each (multiple files allowed)') }}
                                                    </div>
                                                    <div class="vcs-file-preview-list" id="filePreviewList"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Section 4: Delivery, Timeline & Financial Terms -->
                                    <div class="vcs-fieldset-card">
                                        <div class="vcs-fieldset-title">
                                            <span class="vcs-fieldset-step-badge">4</span>
                                            <span>{{ translate('Delivery, Logistics & Financial Terms') }}</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="delivery_destination">
                                                    {{ translate('Delivery Destination / Facility Type') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="delivery_destination" name="delivery_destination"
                                                    class="vcs-input" value="{{ old('delivery_destination') }}"
                                                    placeholder="{{ translate('e.g. Central Warehouse, Hospital Pharmacy Desk') }}"
                                                    required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="delivery_lead_time">
                                                    {{ translate('Expected Lead Time') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="delivery_lead_time" name="delivery_lead_time"
                                                    class="vcs-input" value="{{ old('delivery_lead_time') }}"
                                                    placeholder="{{ translate('e.g. Within 14 Days, Urgent (48 Hours), Monthly') }}"
                                                    required>
                                            </div>

                                            <div class="col-12 vcs-form-group">
                                                <label class="vcs-label" for="delivery_address">
                                                    {{ translate('Delivery Street Address') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="delivery_address" name="delivery_address"
                                                    class="vcs-input" value="{{ old('delivery_address', $defaultAddress) }}"
                                                    placeholder="{{ translate('Detailed delivery physical address') }}"
                                                    required>
                                            </div>

                                            <div class="col-md-4 vcs-form-group">
                                                <label class="vcs-label" for="delivery_city">
                                                    {{ translate('Delivery City') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="delivery_city" name="delivery_city" class="vcs-input"
                                                    value="{{ old('delivery_city', $defaultCity) }}"
                                                    placeholder="{{ translate('e.g. Colombo, Kandy, Galle') }}" required>
                                            </div>

                                            <div class="col-md-4 vcs-form-group">
                                                <label class="vcs-label" for="delivery_country">
                                                    {{ translate('Delivery Country') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="delivery_country" name="delivery_country"
                                                    class="vcs-input" value="{{ old('delivery_country', $defaultCountry) }}"
                                                    placeholder="{{ translate('e.g. Sri Lanka') }}" required>
                                            </div>

                                            <div class="col-md-4 vcs-form-group">
                                                <label class="vcs-label" for="delivery_zipcode">
                                                    {{ translate('Delivery Postal / Zip Code') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="delivery_zipcode" name="delivery_zipcode"
                                                    class="vcs-input"
                                                    value="{{ old('delivery_zipcode', $authUser ? $authUser->postal_code : '') }}"
                                                    placeholder="{{ translate('e.g. 00100') }}" required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="rfq_submission_date">
                                                    {{ translate('RFQ Submission Date') }} <span class="vcs-req">*</span>
                                                </label>
                                                <input type="date" id="rfq_submission_date" name="rfq_submission_date"
                                                    class="vcs-input"
                                                    value="{{ old('rfq_submission_date', date('Y-m-d')) }}" required>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="rfq_deadline_date">
                                                    {{ translate('Quotation Submission Deadline') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="date" id="rfq_deadline_date" name="rfq_deadline_date"
                                                    class="vcs-input" min="{{ date('Y-m-d') }}"
                                                    value="{{ old('rfq_deadline_date', date('Y-m-d', strtotime('+14 days'))) }}"
                                                    required>
                                                <span
                                                    class="vcs-hint">{{ translate('Date by which all supplier quotes must be received') }}</span>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="annual_sourcing_amount">
                                                    {{ translate('Estimated Annual Sourcing Budget') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="annual_sourcing_amount" name="annual_sourcing_amount"
                                                    class="vcs-input" value="{{ old('annual_sourcing_amount') }}"
                                                    placeholder="{{ translate('e.g. LKR 5,000,000 / USD 25,000') }}"
                                                    required>
                                                <span
                                                    class="vcs-hint">{{ translate('Helps suppliers offer appropriate tier discounts') }}</span>
                                            </div>

                                            <div class="col-md-6 vcs-form-group">
                                                <label class="vcs-label" for="payment_terms">
                                                    {{ translate('Preferred Payment Terms') }} <span
                                                        class="vcs-req">*</span>
                                                </label>
                                                <input type="text" id="payment_terms" name="payment_terms" class="vcs-input"
                                                    value="{{ old('payment_terms') }}"
                                                    placeholder="{{ translate('e.g. Net 30 Days, Bank Transfer, Letter of Credit (LC), Advance') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Disclaimer & Privacy Notice -->
                                    <div class="vcs-terms-note">
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="la la-lock fs-18 text-primary mt-1 mr-2"></i>
                                            <div>
                                                <strong>{{ translate('Buyer Confidentiality & Membership Agreement:') }}</strong><br>
                                                {{ translate('By submitting this sourcing request, your information is protected under strict confidentiality and shared exclusively with matching NMRA-certified suppliers. You will also receive complimentary access to the Value Ceylon Sourcing Network. By clicking "Submit Sourcing Request", you acknowledge and agree to our Terms of Service and Privacy Policy.') }}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form Submission Action -->
                                    <div class="vcs-submit-action-row d-flex align-items-center justify-content-between flex-wrap gap-3 pt-2">
                                        <div class="text-muted fs-13 vcs-ssl-notice">
                                            <i class="la la-check-circle text-success mr-1"></i>
                                            {{ translate('Protected with 256-bit encrypted SSL') }}
                                        </div>

                                        <div class="vcs-submit-btn-wrap">
                                            @if (isCustomer())
                                                <button type="submit" class="vcs-submit-btn" id="submitRfqBtn">
                                                    <i class="la la-paper-plane fs-18"></i>
                                                    {{ translate('Submit Sourcing Request') }}
                                                </button>
                                            @else
                                                <a href="{{ route('user.login') }}" class="vcs-submit-btn text-white">
                                                    <i class="la la-sign-in fs-18"></i>
                                                    {{ translate('Sign In as Customer to Submit') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Right Sticky Sidebar: Trust & Support (4 Cols) -->
                    <div class="col-lg-4">
                        <div class="vcs-sticky-sidebar">

                            <!-- Sourcing Guarantee Card -->
                            <div class="vcs-sidebar-card">
                                <h3 class="vcs-sidebar-card-title">
                                    <i class="la la-shield text-primary fs-20"></i>
                                    {{ translate('Value Ceylon Sourcing Guarantee') }}
                                </h3>

                                <ul class="vcs-guarantee-list">
                                    <li class="vcs-guarantee-item">
                                        <div class="vcs-guarantee-check"><i class="la la-check"></i></div>
                                        <div>
                                            <div class="vcs-guarantee-heading">{{ translate('100% NMRA Verified') }}</div>
                                            <p class="vcs-guarantee-sub">
                                                {{ translate('All suppliers carry authentic licenses issued by the National Medicines Regulatory Authority.') }}
                                            </p>
                                        </div>
                                    </li>

                                    <li class="vcs-guarantee-item">
                                        <div class="vcs-guarantee-check"><i class="la la-check"></i></div>
                                        <div>
                                            <div class="vcs-guarantee-heading">{{ translate('Confidential Sourcing') }}
                                            </div>
                                            <p class="vcs-guarantee-sub">
                                                {{ translate('Your specifications, proprietary formulations, and pricing bids remain strictly private.') }}
                                            </p>
                                        </div>
                                    </li>

                                    <li class="vcs-guarantee-item">
                                        <div class="vcs-guarantee-check"><i class="la la-check"></i></div>
                                        <div>
                                            <div class="vcs-guarantee-heading">{{ translate('Direct Factory Pricing') }}
                                            </div>
                                            <p class="vcs-guarantee-sub">
                                                {{ translate('Bypass unnecessary intermediaries to secure optimal wholesale and tender pricing.') }}
                                            </p>
                                        </div>
                                    </li>

                                    <li class="vcs-guarantee-item">
                                        <div class="vcs-guarantee-check"><i class="la la-check"></i></div>
                                        <div>
                                            <div class="vcs-guarantee-heading">{{ translate('Dedicated Support') }}</div>
                                            <p class="vcs-guarantee-sub">
                                                {{ translate('Our healthcare procurement specialists actively assist in expediting quotes.') }}
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- What Happens Next Timeline -->
                            <div class="vcs-sidebar-card">
                                <h3 class="vcs-sidebar-card-title">
                                    <i class="la la-clock-o text-primary fs-20"></i>
                                    {{ translate('What Happens After Submission?') }}
                                </h3>

                                <div class="vcs-timeline">
                                    <div class="vcs-timeline-item">
                                        <div class="vcs-timeline-node">1</div>
                                        <div class="vcs-timeline-card">
                                            <div class="vcs-timeline-header">
                                                <strong class="vcs-timeline-title">{{ translate('Review & Validation') }}</strong>
                                                <span class="vcs-timeline-tag">{{ translate('Within 24h') }}</span>
                                            </div>
                                            <p class="vcs-timeline-desc">
                                                {{ translate('Our medical procurement team reviews your specs and verifies regulatory compliance.') }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="vcs-timeline-item">
                                        <div class="vcs-timeline-node">2</div>
                                        <div class="vcs-timeline-card">
                                            <div class="vcs-timeline-header">
                                                <strong class="vcs-timeline-title">{{ translate('Supplier Matching') }}</strong>
                                                <span class="vcs-timeline-tag">{{ translate('1 - 2 Days') }}</span>
                                            </div>
                                            <p class="vcs-timeline-desc">
                                                {{ translate('Verified NMRA suppliers analyze your request and prepare competitive wholesale bids.') }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="vcs-timeline-item">
                                        <div class="vcs-timeline-node vcs-timeline-node-accent">
                                            <i class="la la-check"></i>
                                        </div>
                                        <div class="vcs-timeline-card">
                                            <div class="vcs-timeline-header">
                                                <strong class="vcs-timeline-title">{{ translate('Quotations Dashboard') }}</strong>
                                                <span class="vcs-timeline-tag vcs-timeline-tag-accent">{{ translate('Bids Ready') }}</span>
                                            </div>
                                            <p class="vcs-timeline-desc">
                                                {{ translate('Compare wholesale quotes, lead times, and negotiate payment terms directly in your portal.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Urgent Sourcing Help Box -->
                            <div class="vcs-help-box">
                                <h4><i class="la la-headset mr-1"></i> {{ translate('Need Urgent Assistance?') }}</h4>
                                <p>
                                    {{ translate('Managing a hospital tender or require immediate drug inventory? Speak directly with our B2B procurement desk.') }}
                                </p>
                                <a href="{{ route('about-value-ceylon') }}" class="vcs-btn vcs-btn-white w-100 text-center">
                                    <i class="la la-phone"></i> {{ translate('Contact Sourcing Team') }}
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // File upload visual feedback
            const fileInput = document.getElementById('product_images');
            const previewList = document.getElementById('filePreviewList');
            const dropzone = document.getElementById('vcsDropzone');

            if (fileInput && previewList) {
                fileInput.addEventListener('change', function () {
                    previewList.innerHTML = '';
                    const files = this.files;
                    if (files.length > 0) {
                        for (let i = 0; i < files.length; i++) {
                            const file = files[i];
                            const pill = document.createElement('span');
                            pill.className = 'vcs-file-pill';
                            pill.innerHTML = '<i class="la la-paperclip text-primary"></i> ' + escapeHtml(file.name) + ' <small class="text-muted">(' + formatFileSize(file.size) + ')</small>';
                            previewList.appendChild(pill);
                        }
                    }
                });

                // Drag and drop styles
                ['dragenter', 'dragover'].forEach(eventName => {
                    dropzone.addEventListener(eventName, function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        dropzone.classList.add('dragover');
                    }, false);
                });

                ['dragleave', 'drop'].forEach(eventName => {
                    dropzone.addEventListener(eventName, function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        dropzone.classList.remove('dragover');
                    }, false);
                });
            }

            // Helper functions
            function escapeHtml(str) {
                const div = document.createElement('div');
                div.textContent = str;
                return div.innerHTML;
            }

            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
            }

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const targetId = this.getAttribute('href');
                    if (targetId.length > 1) {
                        const targetElem = document.querySelector(targetId);
                        if (targetElem) {
                            e.preventDefault();
                            targetElem.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                });
            });
        });
    </script>
@endsection